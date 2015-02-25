<?php



/**
 * Application Routes
 * 
 * Write your route here.
 * 
 */



Route::get('/', function()
{
	return View::render('index');
});