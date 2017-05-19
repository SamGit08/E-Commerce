<?php
  $id = "default";
  session_start();

  if(isset($_SESSION["id"]))
  {
    $id = $_SESSION["id"];
  }
  if(isset($_POST["id"]))
  {
    $id = $_POST["id"];
  }
  setcookie("id", $id);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Bonjour</h1>

  <form class="" action="cook.php" method="post">
    <label for="NOM">Veuillez entrer votre id</label><br>
    <input type="text" name="id" value="" placeholder="id">
    <input type="submit" name="" value="ok">
  </form>
  <?php
  echo "<h1>Bienvenue ".$id."</h1>";
   ?>
  </body>
</html>
