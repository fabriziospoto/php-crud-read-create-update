<?php
include __DIR__ . '/../database.php';   //Includo database
include __DIR__ . '/../functions.php';   //Includo function

if(empty($_GET['id'])){
    die('nessun id');
}

$id = $_GET['id'];

$row = getId($conn,'stanze',$id);   //Funzione getID in function
