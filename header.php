<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <?php include "yhteys.php"; ?>
    <div class="headerWrap">
      <div id="header">
        <a class="logo" href="index.php">Verkkokauppa</a>
        <input type="text" id="search">
        <table>
          <tr>
            <td><a href="index.php">Asiakaspalvelu</a></td>
            <td>
              <?php session_start();
              if(isset($_SESSION['kirjautunut'])){
                echo "<a href='kirjautuminenUlos.php'>Kirjaudu ulos</a>";
              }
              else {
                echo "<a href='kirjautuminen.php'>Kirjautuminen</a>";
              } ?>
            </td>
          </tr>
          <tr>
            <td><a href="index.php">Yhteysteiedot</a></td>
            <td><a href="ostoskori.php">Ostoskori</a></td>
          </tr>
        </table>
      </div>
    </div>
    <div class="content">
