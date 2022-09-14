<?php
use Phalcon\Autoload\Loader;
$loader = new Loader();
# Registering a set of directories taken from the configuration file
$loader->setDirectories(array(
	APP_PATH . $config->app->controllersDir,
	APP_PATH . $config->app->modelsDir,
	APP_PATH . $config->app->pluginsDir,
	APP_PATH . $config->app->libraryDir,
	APP_PATH . $config->app->helpersDir,
	APP_PATH . $config->app->formsDir,
	APP_PATH . $config->app->cacheDir
))->register();