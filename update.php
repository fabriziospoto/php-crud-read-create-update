<?php
include __DIR__ . '/partials/templates/header.php';   //Includo header
include __DIR__ . '/partials/update/server-update.php';   //Includo server
 ?>
<div class="box">
    <div class="container full">
        <form action="partials/update/server-update-edit.php" method="post">
            <div class="form-group">
                <label for="roomNumber">Numero della stanza</label>
                <input type="text" class="form-control" name="roomNumber" value="<?php echo $row['room_number'] ?>" id="roomNumber">    <!-- Uso php per stampare dati che modificherò -->
            </div>
            <div class="form-group">
                <label for="floor">Floor</label>
                <input type="text" class="form-control" name="floor" value="<?php echo $row['floor'] ?>" id="floor">
            </div>
            <div class="form-group">
                <label for="beds">Numero di letti</label>
                <input type="text" class="form-control" name="beds" value="<?php echo $row['beds'] ?>" id="beds">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>" id="id">
            </div>
            <div class="form-group">
                <input type="submit" class="bg-warning form-control" value="Modifica">
            </div>
        </form>
    </div>
</div>

 <?php
 include __DIR__ . '/partials/templates/footer.php';   //Includo footer

 ?>
