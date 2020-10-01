<?php

function getAll($conn,$table) {  //Funzione getAll per avere dati. La uso per la home
    $sql = "SELECT * FROM $table";  //Comando Select per avere tutti i dati di una tabella
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $results = [];
        while($row = $result->fetch_assoc()) {  //Estraggo righe con metodo fetch_assoc() e le inserisco in array
            $results[] = $row;
        }
    } elseif ($result) {
        $results = [];   //Se non riuscito restituisce array vuoto o false
    } else {
        $results = false;   //Se non riuscito restituisce false
    }

    $conn->close();   //Chiudo connessione
    return $results;
}

function removeId($conn,$table,$id,$basepath) {  //Funzione remove per cancellare dati.
    $sql = "DELETE FROM $table WHERE id = ?";   //Comando Delete per cancellare stanza tramite id
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i",$id);    //bind_param() per prepared statements contro Sql Injections

    $stmt-> execute();

    if($stmt && $stmt->affected_rows>0){
        header("Location: $basepath/index.php?roomId=$id");    //Se riuscito rimando a index
    } else {
        echo 'non ho cancellato';   //Se non riuscito stampo messaggio
    }

    $stmt->close();    //Chiudo statement
    $conn->close();   //Chiudo connessione
}

function getId($conn,$table,$id){   //Funzione getId per avere tutti i dati di una tabella. La uso per show e update
    $sql = "SELECT * FROM $table WHERE id=$id";  //Comando Select per avere tutti i dati di una tabella con id uguale a quello selezionato
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();   //Estraggo righe con metodo fetch_assoc() e le inserisco in array
    } elseif ($result) {
        $row = [];   //Se non riuscito restituisce array vuoto
    } else {
        $row = false;    //Se non riuscito restituisce false
    }
    $conn->close();    //Chiudo connessione
    return $row;
}
