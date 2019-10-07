<title>Ostoskori</title>
<?php include "header.php"; ?>
  <h2>Ostoskori</h2>
  <hr>
  <div class="vasenpalsta">
    <?php include "tuotteet/tekken7_ostoskori.php" ?>
    <?php include "tuotteet/mordhau_ostoskori.php" ?>
    <?php include "tuotteet/fgo_ostoskori.php" ?>

    <?php
    $sql=$db->prepare("SELECT nimi, hinta, maara FROM Tuote join Ostoskori on Tuote.idTuote=Ostoskori.idTuote join Asiakas on Ostoskori.idAsiakas=Asiakas.idAsiakas where asiakas=:nimi");
    $sql->bindParam(':nimi',$_SESSION['nimi']);
    $products=$db->query($sql); ?>

     <?php 	foreach ($products as $row) {
				echo $row['nimi'].'<br>';
				echo include $row['osoite'];
        echo $row['maara'];
				} ?>

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
