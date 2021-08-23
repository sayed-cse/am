<?php
error_reporting(0);
# Sets locale information
setlocale(LC_ALL, 'en_US.UTF-8');
# Enable framework debugger
#(new \Phalcon\Debug())->listen();
use Phalcon\Mvc\Application;
try{
# define('BASE_DIR', dirname(__DIR__));
# define('APP_DIR', BASE_DIR . '/app');
# if (!defined('APP_PATH')) { define('APP_PATH', dirname(dirname(dirname(__FILE__)))); }    
if(!defined('APP_PATH')){ define('APP_PATH', realpath('..') . '/'); }
# Read the configuration
require APP_PATH . 'app/config/config.php';
# Read Auto-Loader
require APP_PATH . 'app/config/loader.php';
# Read Services
require APP_PATH . 'app/config/services.php';
# Handle the request
$application = new Application($di);
//echo($application->handle()->getContent());
$response = $application->handle();
$response->send();

} catch (Exception $e) {
echo "PhalconException:: ", $e->getMessage(),'<br/>';
echo nl2br(htmlentities($e->getTraceAsString()));
# Get Phalcon Version
#echo('Phalcon '.Phalcon\Version::get()."<br/>");
}   
