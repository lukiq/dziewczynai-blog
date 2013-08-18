<?php


require_once dirname(__FILE__).'/elements.php';

ob_start('ob_gzhandler');
header('Cache-Control: public'); 
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + (30*86400)) . ' GMT'); 
header('Content-type: text/javascript');

echo($buffer);