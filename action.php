<?php
  echo $_POST['nom'];
  echo "<br>";
  echo $_POST['prenom'];
  echo "<br>";
  echo $_POST['objet'];
  echo "<br>";
  echo $_POST['mail'];
  echo "<br>";
  echo $_POST['message'];

  mail($_POST['mail'], $_POST['nom'], $_POST['message']);
  
 ?>
