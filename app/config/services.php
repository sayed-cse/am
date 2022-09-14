<?php
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\ViewBaseInterface;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt;
use Phalcon\Mvc\Dispatcher;
// use Phalcon\Events\Event;
// use Phalcon\Events\Manager as evManager;
use Phalcon\Mvc\Dispatcher\Exception;
use	Phalcon\Mvc\Url as UrlResolver;
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
#Dispatcher
$di->set('dispatcher',function () {
    $dispatcher = new Dispatcher();
    return $dispatcher;
});
# View
// $di->set('view', function() use ($config) {
//     $view = new View();
//     $view->setViewsDir(APP_PATH . $config->app->viewsDir);
//     $view->registerEngines(array(       
//     	".volt" => function($view, $di) use ($config) {
// 			$volt = new Volt($view, $di);
// 			$volt->setOptions(
// 				array(
// 					'compiledPath'	=>	APP_PATH . $config->app->cacheDir,
// 					'compiledExtension' => '.php',
// 					'compiledSeparator' => '_',
// 					//'compileAlways'     => true
// 				)
// 			);
// 			$compiler = $volt->getCompiler();
// 			$compiler->addFunction('strtotime','strtotime');
// 			return $volt;
// 		}
//     ));
//     return $view;
// });

    # Registering the view component
    $di->setShared('voltService',function (ViewBaseInterface $view) use ($config) {
        if(true !== is_dir(BASE_PATH . $config->app->cacheDir)){ mkdir(BASE_PATH . $config->app->cacheDir, 0777,true); }
        $volt = new Volt($view);
        $volt->setOptions([
            'always'    => true,
            'extension' => '.php',
            'separator' => '_',
            'stat'      => true,
            'path'      => BASE_PATH . $config->app->cacheDir,
            'prefix'    => '%%',
        ]);
        return $volt;
    });
    # View
    $di->set('view', function() use ($config){
        $view = new View();
        $view->setViewsDir(APP_PATH . $config->app->viewsDir);
        $view->registerEngines(['.volt' => 'voltService',]);
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