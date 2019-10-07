<title>Kirjautiminen</title>
<?php include "header.php"; ?>
<hr>
<?php
  $annettu_tunnus=$_POST['nimi'];
  $annettu_salasana=$_POST['sala'];

  $stmt=$db->prepare("SELECT salasana from Asiakas where asiakas=:nimi");
  $stmt->bindParam(':nimi', $annettu_tunnus);
  $stmt->execute();
  $oikea_salasana = $stmt->fetch(PDO::FETCH_COLUMN);

  if(password_verify($annettu_salasana,$oikea_salasana)) {
    $_SESSION['kirjautunut']=true;
    $_SESSION['nimi']=$annettu_tunnus;
    echo '<h3>Olet kirjautunut sisään nimellä: </h3>'.$_SESSION['nimi'];
  }
  else {
    echo '<h3>Käyttäjänimi tai salasana väärin</h3>';
  }
?>

<?php include "footer.php"; ?>
