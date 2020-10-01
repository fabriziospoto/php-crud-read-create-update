<?php
include __DIR__ . '/partials/templates/header.php';

?>
<div class="box">
    <div class="container full">
        <form action="partials/create/server-create.php" method="post">
            <div class="form-group">
                <label for="roomNumber">Numero della stanza</label>
                <input type="number" class="form-control" name="roomNumber" placeholder="Inserisci numero stanza" value="" id="roomNumber">
            </div>
            <div class="form-group">
                <label for="floor">Floor</label>
                <input type="number" class="form-control" name="floor" placeholder="Inserisci piano" value="" id="floor">
            </div>
            <div class="form-group">
                <label for="beds">Numero di letti</label>
                <input type="number" class="form-control" name="beds" placeholder="Inserisci numero letti" value="" id="beds">
            </div>
            <div class="form-group">
                <input type="submit" class="bg-warning form-control" value="Modifica">
            </div>
        </form>
    </div>
</div>

<?php
include __DIR__ . '/partials/templates/footer.php';
?>
