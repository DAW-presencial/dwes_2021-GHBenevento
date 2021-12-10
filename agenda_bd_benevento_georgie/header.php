<?php

function autoload($class){
    include "includes/". $class .".php";
}

spl_autoload_register('autoload');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <title>Agenda</title>
</head>
<body>