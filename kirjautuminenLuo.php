<title>Luo käyttänimi</title>
<?php include "header.php"; ?>
<hr>
<?php
include 'yhteys.php';
$encrypted_pass = password_hash($_POST['sala'],PASSWORD_DEFAULT);
$stmt=$db->prepare("INSERT INTO asiakas VALUES (null,:nimi, :sala)");
$stmt->bindParam(':nimi',$_POST['nimi']);
$stmt->bindParam(':sala',$encrypted_pass);

if($stmt->execute()){
  echo "Käyttäjänimi luotu";
}
else{
  echo "Luonti epäonnistui";
}
?>
<?php include "footer.php"; ?>
