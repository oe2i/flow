<?php

namespace Oe2i\Flow;

class Flow
{
	public static function name($name = null)
	{
		if ($name) {
			return 'Name is: ' . $name;
		}
		return 'No name given';
	}
}
