<?php

namespace Oe2i\Flow;

class Flow
{
	public static function name($name = null)
	{
		$name = !empty($name) ? $name : 'Anonymous';
		return 'Name is: <b>'.$name.'</b>';
	}
}
