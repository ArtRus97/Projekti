<title>Kirjautiminen</title>
<?php include "header.php"; ?>
<?php include "yhteys.php"; ?>
<hr>
<?php
  $annettu_tunnus=$_POST['nimi'];
  $annettu_salasana=$_POST['sala'];

  $stmt=$db->prepare("SELECT salasana from asiakas where nimi=:nimi");
  $stmt->bindParam(':nimi', $annettu_tunnus);
  $stmt->execute();
  $oikea_salasana = $stmt->fetch(PDO::FETCH_COLUMN);

  if(password_verify($annettu_salasana,$oikea_salasana)) {
    session_start();
    $_SESSION['kirjautunut']=true;
    $_SESSION['nimi']=$annettu_tunnus;
    echo '<p>Olet kirjautunut sisään nimellä: </p>'.$_SESSION['nimi'];
  }
  else {
    echo '<p>Käyttäjänimi tai salasana väärin</p>';
  }
?>

<?php include "footer.php"; ?>
