<?php

$servername = "gbenevento.ddns.net";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystemtut";
$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

//FALTA CREAR DB