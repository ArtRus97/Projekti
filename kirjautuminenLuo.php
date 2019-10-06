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
  echo "<h3>Käyttäjänimi luotu nimellä:</h3>".$_POST['nimi'];
}
else{
  echo "<h3>Luonti epäonnistui</h3>";
}
?>
<?php include "footer.php"; ?>
