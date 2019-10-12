<title>Ostoskori</title>
<?php include "header.php"; ?>
<?php include 'yhteys.php'; ?>
<h2>Ostoskori</h2>
<hr>
<?php
$stmt=$db->prepare("CALL LisaaOstoskoriin(:maara, :nimi, :idTuote)");
$stmt->bindParam(':maara',$_POST['maara']);
$stmt->bindParam(':nimi',$_SESSION['nimi']);
$stmt->bindParam(':idTuote',$_POST['idTuote']);

if($stmt->execute()){
  echo '<p>Lisäsit '.$_POST['maara'].' kappaletta tuotetta, jonka ID on '.$_POST['idTuote'].' ostoskoriisi.</p><br>';
}
else{
  echo "<p>Lisäys epäonnistui</p>";
} ?>
<?php include "footer.php"; ?>
