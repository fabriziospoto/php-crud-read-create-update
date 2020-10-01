<?php
include __DIR__ . '/env.php';   //Collegamento a env

$conn = new mysqli($servername, $username, $password,
$dbname);

if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    die();
}
?>
