<?php

xdebug_start_code_coverage();

require('phar://includes.phar/functions.php');

function a() {
	echo "a\n";
}

a();
test();

var_dump(xdebug_get_code_coverage());