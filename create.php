<?php
include __DIR__ . '/partials/templates/header.php';   //Includo l'header

?>
<div class="box">
    <div class="container full">
        <form action="partials/create/server-create.php" method="post">  <!--action a server con comando INSERT-->
            <div class="form-group">
                <label for="roomNumber">Numero della stanza</label>
                <input type="number" class="form-control" name="roomNumber" placeholder="Inserisci numero stanza" value="" id="roomNumber">    <!--Input per inserire nuovi dati -->
            </div>
            <div class="form-group">
                <label for="floor">Floor</label>
                <input type="number" class="form-control" name="floor" placeholder="Inserisci piano" value="" id="floor">   <!--Input per inserire nuovi dati -->
            </div>
            <div class="form-group">
                <label for="beds">Numero di letti</label>
                <input type="number" class="form-control" name="beds" placeholder="Inserisci numero letti" value="" id="beds">   <!--Input per inserire nuovi dati -->
            </div>
            <div class="form-group">
                <input type="submit" class="bg-warning form-control" value="Modifica">   <!--Tasto modifica -->
            </div>
        </form>
    </div>
</div>

<?php
include __DIR__ . '/partials/templates/footer.php'; //Includo Footer
?>
