<?php
include __DIR__ . '/partials/templates/header.php';  //Includo header
include __DIR__ . '/partials/home/server.php';  //Includo server con comando select per poi stampare stanze e dati

?>
    <div class="box">
        <div class="container full">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ROOM NUMBER</th>
                        <th>FLOOR</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($results as $room) { ?>
                    <tr>
                        <td> <?php echo $room['id']; ?></td>    <!-- Inserisco Php per avere id stanza-->
                        <td> <?php echo $room['room_number']; ?></td>    <!-- Inserisco Php per avere numero stanza-->
                        <td> <?php echo $room['floor']; ?></td>    <!-- Inserisco Php per avere piano stanza-->
                        <td> <a href="show.php?id=<?php echo $room['id']; ?>">VIEW</a> </td>    <!-- Mi collego a file che restituisce dati partendo da id stanza-->
                        <td> <a href="update.php?id=<?php echo $room['id']; ?>">UPDATE</a></td>   <!-- Mi collego a file di aggiornamento dati partendo da id stanza-->
                        <td>
                            <form class="" action="partials/delete/server-delete.php" method="post"> <!-- Mi collego a file con comando DELETE-->
                                <input type="submit" name="" value="DELETE" class="btn btn-danger">
                                <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                            </form>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

<?php
include __DIR__ . '/partials/templates/footer.php';  //Includo footer
 ?>
