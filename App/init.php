<?php 

spl_autoload_register('registerAutoload');

function registerAutoload(string $className) 
{
    $basePath = 'App/Support/';
    $fileExtension = '.php';
    $fullClassNamePath = explode('\\',$className);
    $mergePath = $basePath . end($fullClassNamePath) . $fileExtension;
    require_once $mergePath;
}