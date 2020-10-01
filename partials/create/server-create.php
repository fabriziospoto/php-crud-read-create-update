<?php
include __DIR__ . '/../database.php';

if(empty($_POST['roomNumber'])){
    die('Non hai inserito il numero della stanza');
}

if(empty($_POST['floor'])){
    die('Non hai inserito il piano');
}

if(empty($_POST['beds'])){
    die('Non hai inserito il numero dei letti');
}

$sql = "INSERT INTO stanze (room_number, floor, beds, created_at, updated_at) VALUES(?,?,?,NOW(),NOW())";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iii",$roomN,$floor,$beds);

$roomN = $_POST['roomNumber'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];

$stmt->execute();

if($stmt && $stmt->affected_rows > 0) {
    header("Location: $basepath/show.php?id=$stmt->insert_id");
} elseif($stmt){
    die('Nessun inserimento');
} else {
    die('Errore');
}

$stmt->close();
$conn->close();
