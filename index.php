<?php
  session_start();
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
    <a id="logoP" href="Panier.php"><img src="http://localhost/Php-web/panier.png" alt=""/></a>
  </header>
      <img id="banniere" src="file://localhost/main.jpg" alt="">
      <div class="contenu">
        <h2>Nos Produits</h2>
        <ul class="">
          <?php
            $lignes = scandir("Produits");//on prends les fichiers du dossier Produits
                                          //qui vont être les éléments du tableau qui sera dans la variable $lignes
            $lignes2 = array(".","..");//on creer un tableau avec les valeurs "."(répertoire courant) et ".."(répertoire parent)
            $result = array_diff($lignes, $lignes2);//on compare les tableaux $lignes et $lignes2
                                                    //pour supprimer les répertoires parent et courant
            $key = array_search($_GET["produit"], $result);//on obttient la clé d'une valeur dans la variable(tableau) $_GET["produit"]

            foreach ($result as $ligne)//pour chaque ligne du tableau(variable) $result
              {
                $rest = pathinfo($ligne);//on enleve l'extension de la valeur
                echo "<li><a href=index.php?produit=".$ligne.">".$rest['filename']."</a></li>";
              }
              $dossier = "Produits";//on affecte le dossier "Produits" à la variable $dossier

              if(isset($_GET["produit"]))//si la varaible $_GET["produit"] contient un élément
                {
                  $article_path = "$dossier/".$_GET["produit"];//on affiche son chemin 
                }
          ?>
        </ul>
        <?php
          include ($article_path);
         ?>
      </div>
  </body>
</html>
