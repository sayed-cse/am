<?php
use Phalcon\Di\FactoryDefault;
use	Phalcon\Mvc\View;
use	Phalcon\Mvc\Dispatcher;
use	Phalcon\Mvc\Url as UrlResolver;
//use	Phalcon\Mvc\Router;
use Phalcon\Mvc\View\Engine\Volt;
use	Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;
# Factory Default	
$di = new FactoryDefault();
# Register the global configuration as config
$di->set('config', $config);
# Set Base Url
$di->set('url', function() use ($config){
	$url = new UrlResolver();
	$url->setBaseUri($config->app->baseUri);
	return $url;
});

$di->set('dispatcher', function() use ($di) {
        $evManager = $di->getShared('eventsManager');
        $evManager->attach("dispatch:beforeException", function($event, $dispatcher, $exception)
            {
                switch ($exception->getCode()) {
                    case Dispatcher::EXCEPTION_HANDLER_NOT_FOUND:
                    case Dispatcher::EXCEPTION_ACTION_NOT_FOUND:
                        $dispatcher->forward(
                            array(
                                'controller' => 'error',
                                'action'     => 'show404',
                            )
                        );
                        return false;
                }
            }
        );
        $dispatcher = new Dispatcher();
        $dispatcher->setEventsManager($evManager);
        return $dispatcher;
    },true
);

# View
$di->set('view', function() use ($config) {
    $view = new View();
    $view->setViewsDir(APP_PATH . $config->app->viewsDir);
    $view->registerEngines(array(       
    	".volt" => function($view, $di) use ($config) {
			$volt = new Volt($view, $di);
			$volt->setOptions(
				array(
					'compiledPath'	=>	APP_PATH . $config->app->cacheDir,
					'compiledExtension' => '.php',
					'compiledSeparator' => '_',
					//'compileAlways'     => true
				)
			);
			$compiler = $volt->getCompiler();
			$compiler->addFunction('strtotime','strtotime');
			return $volt;
		}
    ));
    return $view;
});
# Caching

# Database Connection mysql
// $di->set('db', function() use ($config){
// 	$db = new DbAdapter(array(
// 		'adapter' 	=> $config->database->mysql->adapter,
// 		'host' 		=> $config->database->mysql->host,
// 		'username' 	=> $config->database->mysql->username,
// 		'password' 	=> $config->database->mysql->password,
// 		'dbname' 	=> $config->database->mysql->dbname,
// 		'charset' 	=> $config->database->mysql->charset,
// 		'options' 	=> array(
//         PDO::MYSQL_ATTR_INIT_COMMAND 	=>	'SET NAMES utf8',
//         PDO::ATTR_CASE					=>	PDO::CASE_LOWER,
//  		PDO::ATTR_PERSISTENT 			=>	TRUE,
//  		PDO::ATTR_DEFAULT_FETCH_MODE	=>	PDO::FETCH_BOTH,
//  		//PDO::ATTR_EMULATE_PREPARES 	=>	false,        
//         )
// 	));
// 	return $db;
// });
# Register User Component
$di->set('elements', function(){
	return new Elements();
});