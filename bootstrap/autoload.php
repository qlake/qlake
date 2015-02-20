<?php

//use Qlake\Support\Autoload;

//require __DIR__ . '/../vendor/Qlake/Support/Autoload.php';

//$paths = [
//	__DIR__ . '/../' . 'controllers',
//	__DIR__ . '/../../vendor/' . 'Mockery',
//];

//Autoload::addDirectories($paths);

//Autoload::register();


/*

 $aliases = [
        'App' => 'Qlake\Iwan\App',
        'View' => 'Qlake\Iwan\View',
        //'ClearException' => 'Qlake\Exception\ClearException',
        'Route' => 'Qlake\Iwan\Route',
        'Config' => 'Qlake\Iwan\Config',
        'Cache' => 'Qlake\Iwan\Cache',
        'DB' => 'Qlake\Iwan\DB',
        'Html' => 'Qlake\Iwan\HtmlBuilder',
    ];

foreach ($aliases as $key => $value)
{
	class_alias($key, $value);
}
*/


return require __DIR__.'/../vendor/autoload.php';



// for performance
//$compiledPath = __DIR__.'/../storage/framework/compiled.php';

//if (file_exists($compiledPath))
//{
//	require $compiledPath;
//}