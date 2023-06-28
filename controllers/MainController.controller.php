<?php
  class MainController{


    public  function accueil(){
      $page_description = "Weby cloudy vous permet de mettre en avant votre activité sur le web. Vous obtiendrez de nouveaux clients sur votre site internet et votre  notoriété grandira sur les réseaux sociaux.
      Weby Cloudy vous propose en outre de vous accompagner dans la création et la gestion de votre société" ;

      $costum_css= "style.css";

      $uvp= "Vos idées sont nos inspirations";

      $page_title= "WebyCloudy ";

      $H1= "Accueil";

      $header_content=  include "inc/header.php";

      $page_content=  include "inc/content_projets.php";

        require_once("views/common/template.php");

    }

    public function entreprise(){
      $page_description = "
      Weby Cloudy vous propose en outre de vous accompagner dans la création et la gestion de votre société" ;

      $costum_css= "projets.css";

      $uvp= "Profitez de la puissance de votre site web";

      $page_title= "WebyCloudy | société";

      $H1= "Création de société";

      $header_content=  include "inc/header.php";

      $page_content=  include "inc/content_projets.php";

      //include ("inc/content_accueil.php");
      require_once("views/common/template.php");

    }

    public function site(){
      $page_description = "Weby cloudy vous permet de mettre en avant votre activité sur le web. Vous obtiendrez de nouveaux clients sur votre site internet et votre  notoriété grandira sur les réseaux sociaux.
      Weby Cloudy vous propose en outre de vous accompagner dans la création et la gestion de votre société" ;

      $costum_css= "projets.css";

      $uvp= "Profitez de la puissance de votre site web";

      $page_title= "WebySites";

      $H1= "Créez votre site internet";

      $header_content=  include "inc/header.php";

      $page_content=  include "inc/content_projets.php";

      //include ("inc/content_accueil.php");
      require_once("views/common/template.php");

    }

    public function reseaux(){
      $page_description = "Weby cloudy vous permet de mettre en avant votre activité sur le web. Vous obtiendrez de nouveaux clients sur votre site internet et votre  notoriété grandira sur les réseaux sociaux.
      Weby Cloudy vous propose en outre de vous accompagner dans la création et la gestion de votre société" ;

      $costum_css= "projets.css";

      $uvp= "Profitez de votre audience sur réseaux sociaux";

      $page_title= "WebySites";

      $H1= "Reseaux sociaux";

      $header_content=  include "inc/header.php";

      $page_content=  include "inc/content_projets.php";

      //include ("inc/content_accueil.php");
      require_once("views/common/template.php");
    }

    public function contact(){
      $page_description = "Weby cloudy vous permet de mettre en avant votre activité sur le web. Vous obtiendrez de nouveaux clients sur votre site internet et votre  notoriété grandira sur les réseaux sociaux.
      Weby Cloudy vous propose en outre de vous accompagner dans la création et la gestion de votre société" ;

      $costum_css= "projets.css";

      $uvp= "Contactez nous pour toute question";

      $page_title= "WebySites";

      $H1= "Contact";

      $header_content=  include "inc/header.php";

      $page_content=  include "inc/content_projets.php";

      //include ("inc/content_accueil.php");
      require_once("views/common/template.php");
    }

    public function pageErreur($msg){
      $page_description = "Page permettant de gérer les erreurs" ;

      $costum_css= "projets.css";

      $uvp= "Contactez nous pour toute question";

      $page_title= "WebySites | Page erreur";

      $H1= "Page d'erreur";

      $header_content=  include "inc/header.php";

      $page_content= $msg;

      //include ("inc/content_accueil.php");
      require_once("views/common/template.php");
    }
  }
 ?>
