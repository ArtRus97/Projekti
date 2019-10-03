<title>Kirjautuminen</title>
<?php include "header.php"; ?>

<h2>Kirjautuminen</h2>
<hr>
<div class="kirjautuminen">
  <h3 style="margin-top:0px;">Kirjaudu sisään</h3>
    <form class="" action="kirjautuminenSisään.php" method="post">
      <label for="nimi">Käyttäjänimi:</label>
      <input type="text" name="nimi" value=""><br><br>
      <label for="sala">Salasana:</label>
      <input type="password" name="sala" value=""><br><br>
      <input type="submit" name="" value="Kirjaudu">
    </form>
  </div>
<div class="kirjautuminen">
  <h3 style="margin-top:0px;">Luo käyttäjä</h3>
    <form class="" action="kirjautuminenLuo.php" method="post">
      <label for="nimi">Käyttäjänimi:</label>
      <input type="text" name="nimi" value=""><br><br>
      <label for="sala">Salasana:</label>
      <input type="password" name="sala" value=""><br><br>
      <input type="submit" name="" value="Luo">
    </form>
</div>
<?php include "footer.php"; ?>
