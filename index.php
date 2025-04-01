<?php
// require 'src/flow.php';
// require 'src/init.php';

function autoload(string $directory = 'src'): void
{
	foreach (glob($directory . '/*.php') as $file) {
		require_once $file;
	}
}

autoload();

use Oe2i\Flow\Flow;

$flow = Flow::name('Ababio');
echo $flow;
