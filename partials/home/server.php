<?php
include __DIR__ . '/../database.php';  //Includo Databse
include __DIR__ . '/../functions.php';  //Includo Functions

$results = getAll($conn,'stanze'); //Funzione getAll per avere dati
