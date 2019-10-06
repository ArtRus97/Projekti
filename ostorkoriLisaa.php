<title>Ostoskori</title>
<?php include "header.php"; ?>
<?php include 'yhteys.php'; ?>
<h2>Ostoskori</h2>
<hr>

<?php
$stmt=$db->prepare("CALL LisaaOstoskoriin (:maara, :nimi, :idTuote)");
$stmt->bindParam(':maara',$_POST['maara']);
$stmt->bindParam(':nimi',$_SESSION['nimi']);
$stmt->bindParam(':idTuote',$_POST['idTuote']);

if($stmt->execute()){
  echo '<h3>Lisäsit '.$_POST['maara'].' kappaletta tuotetta, jonka ID on '.$_POST['idTuote'].'ostoskoriisi.</h3><br>';
}
else{
  echo "<h3>Lisäys epäonnistui</h3>";
}
?>
<?php include "footer.php"; ?>
