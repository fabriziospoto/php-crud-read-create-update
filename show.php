<?php
include __DIR__ . '/partials/templates/header.php';   //Includo header
include __DIR__ . '/partials/show/server-show.php';   //Includo server
?>

<body>
    <div class="box">
        <div class="container full">
            <a href="index.php">Torna Indietro</a>
            <ul class="list-group">
                <li class="list-group-item">ID: <?php echo $row['id']; ?> </li>      <!-- Uso php per stampare dati camera -->
                <li class="list-group-item">Numero della stanza: <?php echo $row['room_number']; ?> </li>
                <li class="list-group-item">Piano: <?php echo $row['floor']; ?> </li>
                <li class="list-group-item">Numero di letti: <?php echo $row['beds']; ?> </li>
            </ul>
        </div>
    </div>
<?php
include __DIR__ . '/partials/templates/footer.php';  //Includo footer
 ?>
