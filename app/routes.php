<?php
/**
 * All the routes for your website you add in this file
 * First field is the /urlpath, second is the function name aka controller
 * The last field is the function name
 * It is all too simple so you can handle it easily
 */

$Route->new('/', ['\Functions\Home', 'index']);
$Route->new('/dbcount', ['\Functions\CountRows', 'index']);
