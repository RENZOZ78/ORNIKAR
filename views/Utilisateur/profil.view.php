

<div class="mt-5" id= "mail">
    Mail : <?= $utilisateur['mail'] ?> <br>
    login: <?= $utilisateur['login']?> <br>
    <?= $_SESSION['profil']['role'] ?>
</div>




<?php

  $page_description = "Page de profil" ;

  $costum_css= "projets.css";
  //$uvp= "Restons en contact";
  //$page_title= "WebySites | Contact";
  //$H1= "Contact";
  $header_content=  include "inc/header.php";
  $page_content=  include "inc/content_profil.php";

 ?>
