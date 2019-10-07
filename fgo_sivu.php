<title>Fate/Grand Order</title>
<?php include "header.php"; ?>

<div class="vasenpalsta">
  <div class="tuote">
    <img src="kuvat/fgo.jpg" alt="">
  </div>
</div>
<div class="oikeapalsta">
  <div id="tuotekuvaus">
    <h2 style="margin:5px;">Fate/Grand Order</h2>
    <h2 style="margin:5px;">0€</h2>
    <p>
    DEVELOPER: Delightworks
    PUBLISHER: Aniplex
    <br> <br>
    A new mobile "Fate RPG," presented by TYPE-MOON!
    With an impressive main scenario and multiple character quests,
    the game features millions of words of original story!
    Packed with content that both fans of the Fate franchise and newcomers will be able to enjoy.
  </p>
  <?php if (isset($_SESSION['kirjautunut'])) {
    echo '<form action="ostorkoriLisaa.php" method="post">';
    echo '<h3>Määrä: ';
    echo '<input class="number" type="number" name="maara" value="1" min="1"></h3>';
    echo '<input type="hidden" name="idTuote" value="3"';
    echo '<br><input class="submit" type="submit" value="LISÄÄ OSTOSKORIIN">';
    echo '</form>';
  }
  else {
    echo "<label>Sinun pitää kirjautua, jotta voit lisätä ostoskoriin</label>";
  } ?>
  </div>
</div>

<?php include "footer.php"; ?>
