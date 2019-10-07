<title>Ostoskori</title>
<?php include "header.php"; ?>
<?php
if(!isset($_SESSION['kirjautunut'])) {
	echo '<script> location.replace("kirjautuminenEi.php") </script>';
} ?>
  <h2>Ostoskori</h2>
  <hr>
  <div class="vasenpalsta">
    <?php
    $sql='SELECT idOstoskori, osoite, hinta, maara FROM Tuote join Ostoskori on Tuote.idTuote=Ostoskori.idTuote join Asiakas on Ostoskori.idAsiakas=Asiakas.idAsiakas where asiakas="'.$_SESSION['nimi'].'"';
    //$sql->bindParam(':nimi',$_SESSION['nimi']);
    $products=$db->query($sql); ?>
    <div id="ostoskori-esittely">
     <?php 	foreach ($products as $row) {
				include $row['osoite'];
        echo '<h3 class=ostoskori>Määrä: '.$row['maara'].' ';
        echo 'Hinta: '.$row['hinta']*$row['maara'].'€ </h3>';

        echo '<form action="ostorkoriPoista.php" method="post">';
        echo '<input type="hidden" name="idOstoskori" value="'.$row['idOstoskori'].'"';
        echo '<br><input class="submit" type="submit" value="POISTA">';
        echo '</form><br><hr>'; } ?>
     </div>
    </div>
  <div class="oikeapalsta">
    <div class="yhteenveto">
      <h2>Yhteenveto</h2>
      <table>
      <tr>
        <td>Tarjoukset</td>
        <td>#€</td>
      </tr>
      <tr>
        <td>Toimitus</td>
        <td>#€</td>
      </tr>
      <tr>
        <td>Loppusumma</td>
        <td>#€</td>
      </tr>
      </table>
      <a href="#" class="nappi">TILAA</a>
    </div>
  </div>


<?php include "footer.php"; ?>
