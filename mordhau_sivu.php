<title>Mordhau</title>
<?php include "header.php"; ?>

<div class="vasenpalsta">
  <div class="tuote">
    <img src="kuvat/mordhau.jpg" alt="">
  </div>
</div>
<div class="oikeapalsta">
  <div class="tuotekuvaus">
    <h2 style="margin:5px;">Mordhau</h2>
    <h2 style="margin:5px;">25€</h2>
    <p>
      DEVELOPER: Triternion.
      PUBLISHER: Triternion.
    <br> <br>
    MORDHAU is a multiplayer medieval slasher. Create your mercenary and fight in brutal battles where you will experience fast paced combat, castle sieges, cavalry charges, and more.
    </p>
    <?php if (isset($_SESSION['kirjautunut'])) {
      echo '<form action="ostorkoriLisaa.php" method="post">';
      echo '<h3>Määrä: ';
      echo '<input class="number" type="number" name="maara" value="1" min="1"></h3>';
      echo '<input type="hidden" name="idTuote" value="2"';
      echo '<br><input class="submit" type="submit" value="LISÄÄ OSTOSKORIIN">';
      echo '</form>';
    }
    else {
      echo "<h3>Sinun pitää kirjautua, jotta voit lisätä ostoskoriin</h3>";
    } ?>
  </div>
</div>

<?php include "footer.php"; ?>
