<?php
/**
 * In this file register application`s dependencies.
 * For use of these, just use of $app['provider'].
 * These are lazyload. So high the performance.
 */

/**
 * Register router singleton provider.
 */
App::singleton('router', function($app)
{
	return new Qlake\Routing\Router;
});

/**
 * Register request singleton provider.
 */
App::singleton('request', function($app)
{
	return new Qlake\Http\Request;
});

/**
 * Register view instance provider.
 */
App::bind('view', function($app)
{
	$view = new Qlake\View\View;

	$view->setPaths([__DIR__ . '/../views']);

	return $view;
});

/**
 * Register config singleton provider.
 */
App::singleton('config', function($app)
{
	$defaultPath = __DIR__;

	$config = new Qlake\Config\Config();

	$config->setDefaultPath($defaultPath);

	return $config;
});

/**
 * Register database query builder instance provider.
 */
App::bind('db', function($app)
{
	$cf = new Qlake\Database\Connection\ConnectionFactory(Config::get('database'));

	$connector = $cf->createConnector();

	$connection = $connector->createConnection();

	return new Qlake\Database\Query($connection, new Qlake\Database\Grammar\MysqlGrammar);
});


/**
 * Register cache singleton provider.
 */
App::singleton('cache', function($app)
{
	$driverName = Config::get('cache.driver');
	$className = "Qlake\\Cache\\".ucfirst($driverName)."Cache";
	$driver = new $className;
	$cfgDrivers = Config::get("cache.drivers");
	$driver->setConfig($cfgDrivers[$driverName]);
	$cache = new Qlake\Cache\Cache($driver);
	return $cache;
});

/**
 * Register html singleton provider.
 */
App::singleton('html', function($app)
{
	return new Qlake\Html\Html();
});


