<?php

function autoload($class){
    include "classes/". $class .".php";
}

spl_autoload_register('autoload');

$pro = new Product("si", "si", 9);