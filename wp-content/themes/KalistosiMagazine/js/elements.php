<?php

/**
 * On-the-fly Compression Script
 * Copyright (c) 2009 and onwards, Manas Tungare.
 * Creative Commons Attribution, Share-Alike.
 */

$jsPath = dirname(__FILE__);

$files = array(
	'/vendor/retina.js',
	'/vendor/cookie.js',
	'/eu-cookie.js',
	'/functions.js'
);

$buffer = '';
foreach ($files as $file) $buffer .= file_get_contents($jsPath.$file);

?>
