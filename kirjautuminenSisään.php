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
    $sql='select idAsiakas from Asiakas where asiakas="'.$_SESSION['nimi'].'"';
    $result=$db->query($sql);
    $_SESSION['id']=$result->fetch(PDO::FETCH_COLUMN);
    echo '<p>Olet kirjautunut sisään nimellä: '.$_SESSION['nimi'].' ja id on: '.$_SESSION['id'].'</p>';
  }
  else {
    echo '<p>Käyttäjänimi tai salasana väärin</p>';
  }
?>

<?php include "footer.php"; ?>
