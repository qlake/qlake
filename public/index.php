<?php


error_reporting(E_ALL & ~E_NOTICE);


require __DIR__ . '/../vendor/autoload.php';


require __DIR__ . '/../bootstrap/autoload.php';


$app = require __DIR__ . '/../bootstrap/start.php';


$app->run();

