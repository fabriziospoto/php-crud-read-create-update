<?php
include __DIR__ . '/../database.php';   //Includo database
include __DIR__ . '/../functions.php';  //Includo functions

if(empty($_POST['id'])){
    die('nessun id');
}

$id = $_POST['id'];

removeId($conn,'stanze',$id,$basepath);   //Funzione remove in function
