<?php
  session_start();//debut de la session

  if(isset($_GET["produit"])){ //si la variable $_GET["produit"] est définie
    if(!isset($_SESSION["panier"])){//et si la variable $_SESSION["panier"] est définie
    $_SESSION["panier"] = array();//la variable $_SESSION["panier"] devient un tableau vide
    }
    $_SESSION["panier"][] = $_GET["produit"];//le tableau $_SESSION["panier"][] prendra les valeurs de $_GET["produit"]
  }
  if (isset($_GET["delete"])) {//si la variable $_GET["delete"] est définie
    array_splice($_SESSION["panier"], $_GET["delete"], 1);//on supprime la valeur de l'élément choisit
  }
  if(isset($_GET["all"])){
    unset($_SESSION["panier"]);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <header>
      <h1>Musica Store</h1>
    </header>
    <h2>Panier</h2>
    <div class="contenu">
      <?php
      if(isset($_SESSION["panier"])){//si la variable(tableau) $_SESSION["panier"] contient 1 ou plusieurs éléments
        foreach ($_SESSION["panier"] as $key => $val) {//pour chaque éléments on obtient sa clé et sa valeur
          $produit = basename($val, ".php");//on supprime l'extension des valeurs des differents éléments du tableau $_SESSION["panier"]
          echo "<div class=\"choix\"><a href=index.php?produit=".$key.">".$produit."</a>|<a href=Panier.php?delete=".$key.">sup</a><br><br></div>";
        }
        //if(isset($_SESSION["delete"])){
          //unset($_SESSION["panier"]);
          echo '<a href="Panier.php?all='.$_SESSION["panier"].'" id="all">Tout supprimer</a>';
    }
       ?>
    </div>
    <a class="ajout" href="index.php">Accueil</a>
  </body>
</html>
