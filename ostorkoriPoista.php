<title>Ostoskori</title>
<?php include "header.php"; ?>
<?php include 'yhteys.php'; ?>
<h2>Ostoskori</h2>
<hr>
<?php
$stmt=$db->prepare("DELETE FROM Ostoskori where idOstoskori=:idOstoskori");
$stmt->bindParam(':idOstoskori',$_POST['idOstoskori']);

if($stmt->execute()){
  echo '<p>Poistit tuotteen ostoskorista.</p><br>';
}
else{
  echo "<p>Poisto epäonnistui.</p>";
} ?>
<?php include "footer.php"; ?>
