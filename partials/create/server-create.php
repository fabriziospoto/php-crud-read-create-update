<?php
include __DIR__ . '/../database.php';  //Includo Database

if(empty($_POST['roomNumber'])){    //Serie di die() per interrompere script se input è vuoto
    die('Non hai inserito il numero della stanza');
}

if(empty($_POST['floor'])){
    die('Non hai inserito il piano');
}

if(empty($_POST['beds'])){
    die('Non hai inserito il numero dei letti');
}

$sql = "INSERT INTO stanze (room_number, floor, beds, created_at, updated_at) VALUES(?,?,?,NOW(),NOW())";  //Comando Insert per creare nuova stanza con i cinque valori indicati. NOW() per prendere orario corrente

$stmt = $conn->prepare($sql);
$stmt->bind_param("iii",$roomN,$floor,$beds);  //bind_param() per prepared statements contro Sql Injections

$roomN = $_POST['roomNumber'];   //Parametri per prepared statements
$floor = $_POST['floor'];
$beds = $_POST['beds'];

$stmt->execute();

if($stmt && $stmt->affected_rows > 0) {
    header("Location: $basepath/show.php?id=$stmt->insert_id");   //Se riuscito rimando a pagina con riepilogo dati nuova stanza
} elseif($stmt){
    die('Nessun inserimento');
} else {
    die('Errore');
}

$stmt->close();
$conn->close();    // Chiudo connessione
