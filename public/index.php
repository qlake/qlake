<?php


error_reporting(E_ALL & ~E_NOTICE);


$autoloader = require __DIR__.'/../bootstrap/autoload.php';


$app = require_once __DIR__.'/../bootstrap/application.php';


require_once __DIR__.'/../app/routes.php';


$request = Qlake\Http\Request::capture();

$response = $app->handle($request);

//$response->send();

//$app->terminate($request, $response);

