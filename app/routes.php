<?php



/**
 * Application Routes
 * 
 * Write your route here.
 * 
 */
//echo '<pre>';


function sortArrayByArray(Array $array, Array $orderArray) {
    $ordered = array();
    foreach($orderArray as $key) {
        if(array_key_exists($key,$array)) {
            $ordered[$key] = $array[$key];
            unset($array[$key]);
        }
    }
    return $ordered + $array;
}



/*
$f = function($family, $name)
{
	echo $name.' '.$family;
};

function f($family, $name)
{
	echo $name.' '.$family;
};

class A
{
	public static function m($family, $name)
	{
		echo $name.' '.$family;
	}
}

$a = new A;

call_user_func_array2($f, ['name' => 'reza']);exit;

$f = new ReflectionFunction ($f);

print_r($f->getParameters());
exit;
*/
/**/



//print_r(sortArrayByArray(['1', 'ali', 'name' => 'reza', 'family' => 'kho'], ['name' , 'family']));exit;


/*
$f = new ReflectionClass($f);

print_r($f->getMethods()[0]->getParameters()[0]->getDefaultValue());
exit;
*/


Route::get('docs', function()
{

	return View::render('docs')->set('page', 'installation');
});


Route::get('docs/{page}', function($page)
{

	return View::render('docs')->set('page', $page);
});


Route::get('/{id}', 'App\Controllers\Index::sdsdsdfsdf');


Route::get('/gfg/gh', null);