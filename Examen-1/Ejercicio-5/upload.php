<?php
$route="files/".$_FILES['file1']['name'];
$route2="files/".$_FILES['file2']['name'];

if(move_uploaded_file($_FILES['file1']['tmp_name'], $route) && move_uploaded_file($_FILES['file2']['tmp_name'], $route2)){

    $file1 = $_FILES['file1']['name'] .' '. $_FILES['file1']['size'];
    $file2 = $_FILES['file2']['name'] .' '. $_FILES['file2']['size'];

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $dob = $_POST['dob'];

    echo $name . ' ' . $surname . ' ' . $dob . ' ' . $file1 . ' ' . $file2;

}else{
    echo "No se ha subido el archivo";
}