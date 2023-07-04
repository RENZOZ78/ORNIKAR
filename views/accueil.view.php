


<?php
  // affichage du contenu
  //$costum_css = include "style.css";
  $page_description = "Weby cloudy vous permet de mettre en avant votre activité sur le web. Vous obtiendrez de nouveaux clients sur votre site internet et votre  notoriété grandira sur les réseaux sociaux.
  Weby Cloudy vous propose également de vous accompagner dans la création et la gestion de votre société";
  $header_content=  include "./inc/header.php";

  $page_content =  include "./inc/content_accueil.php";
  //$template = "views/common/template.php";

?>
    <?php foreach ($produit as $ligne ) : ?>
      <br>
      -----------
      <br>
      Produit 1: <?= $ligne["id"];?>
      <br>
      Produit 2: <?= $ligne["designation"];?>
      <br>
      Produit 2: <?= $ligne["prix"];?>
      <br>
    <?php endforeach; ?>
