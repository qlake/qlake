<?php

namespace App\Controllers;

class Controller
{
	public function __missing($args = [])
	{
		print_r($args);
	}


	/*final public function __call($method, $args)
	{
		if ($method == '__missing')
		{
			$this->__missing($args);
		}
	}*/
}