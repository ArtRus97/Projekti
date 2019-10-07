<title>Luo käyttänimi</title>
<?php include "header.php"; ?>
<hr>
<?php
include 'yhteys.php';
$encrypted_pass = password_hash($_POST['sala'],PASSWORD_DEFAULT);
$stmt=$db->prepare("INSERT INTO Asiakas VALUES (null,:nimi, :sala)");
$stmt->bindParam(':nimi',$_POST['nimi']);
$stmt->bindParam(':sala',$encrypted_pass);

if($stmt->execute()){
  echo "<p>Käyttäjänimi luotu nimellä:</p>".$_POST['nimi'];
  echo "<p>Kirjaudu seuraavaksi sisään</p>";
}
else{
  echo "<p>Luonti epäonnistui</p>";
}
?>
<?php include "footer.php"; ?>
