<?php
$directory = basename(dirname(dirname(__FILE__))); 
$url = explode($directory, $_SERVER['REQUEST_URI']);
//var_dump($url);
//var_dump(dirname(__FILE__, 2));
//var_dump(basename((dirname(__FILE__, 2))));
if (count($url) == 1) {
    define('WEBROOT', '/');
}else{
    define('WEBROOT', $url[0] . 'Portfolio/');
} 

//var_dump(WEBROOT);
?>

