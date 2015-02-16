<?php

use Qlake\Support\Autoload;

//require __DIR__ . '/../vendor/Qlake/Support/Autoload.php';

$paths = [
	__DIR__ . '/../' . 'controllers',
	__DIR__ . '/../../vendor/' . 'Mockery',
];

Autoload::addDirectories($paths);

Autoload::register();