<?php

namespace App\Controllers;

use View;

class Index extends Controller
{
	public static function index()
	{
		echo 'index';exit;
		return View::render('index');
	}

	/*public function __missing($args)
	{
		echo $args;exit;
	}*/
}