<title>Tekken 7</title>
<?php include "header.php"; ?>

<div class="vasenpalsta">
  <div class="tuote">
    <img src="kuvat/tekken7.jpg" alt="">
  </div>
</div>
<div class="oikeapalsta">
  <div id="tuotekuvaus">
    <h2 style="margin:5px;">Tekken 7</h2>
    <h2 style="margin:5px;">40€</h2>
    <p>
    DEVELOPER: BANDAI NAMCO Studios Inc. <br>
    PUBLISHER: BANDAI NAMCO Entertainment
    <br> <br>
    Discover the epic conclusion of the long-time clan warfare between members of the Mishima family. Powered by Unreal Engine 4, the legendary fighting game franchise fights back with stunning story-driven cinematic battles and intense duels that can be enjoyed with friends and rivals.
  </p>
  <?php if (isset($_SESSION['kirjautunut'])) {
    echo '<form action="ostorkoriLisaa.php" method="post">';
    echo '<h3>Määrä: ';
    echo '<input class="number" type="number" name="maara" value="1" min="1"></h3>';
    echo '<input type="hidden" name="idTuote" value="1"';
    echo '<br><input class="submit" type="submit" value="LISÄÄ OSTOSKORIIN">';
    echo '</form>';
  }
  else {
    echo "<label>Sinun pitää kirjautua, jotta voit lisätä ostoskoriin</label>";
  } ?>
  </div>
</div>

<?php include "footer.php"; ?>
