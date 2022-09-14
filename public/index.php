<?php declare(strict_types=1);
error_reporting(E_ALL);
setlocale(LC_ALL, 'en_US.UTF-8');
mb_internal_encoding('UTF-8');
(new \Phalcon\Support\Debug())->listen();
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Application;
defined('BASE_PATH') || define('BASE_PATH', dirname(__DIR__));
defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/app');
try{
$di = new FactoryDefault();
# Read the configuration
require APP_PATH . '/config/config.php';
# Read Auto-Loader
require APP_PATH . '/config/loader.php';
# Read Services
require APP_PATH . '/config/services.php';
# Handle the request
$app = new Application($di);
$response = $app->handle(substr($_SERVER["REQUEST_URI"], strlen('/anikamachinery/')-1));
$response->send();
} catch (\Exception $e) {
echo "PhalconException:: ", $e->getMessage(),'<br/>';
echo nl2br(htmlentities($e->getTraceAsString()));
}   
