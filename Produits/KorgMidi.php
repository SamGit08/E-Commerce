<?php
  session_start();
 ?>
    <img class="imgprod" src="http://localhost/Php-web/KORG+MINILOGUE.JPG" alt=""/>
    <h3>Clavier midi Korg</h3>
    <div class="infos">
      <p id="prix">Prix: 300$</p>
      <?php
        echo "<a class=\"ajout\"href=Panier.php?produit=".$_GET["produit"].">Ajouter au panier </a>";
      ?>
      <p>Descriptif:<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
