<?php

require_once("models/MainManager.model.php");


  class MainController{
    private $mainManager;

    public function __construct(){
      $this->mainManager = new MainManager();
    }

    private function genererPage($data){
      extract($data);//creer la variable directement
      ob_start();
      require_once($view);
      $page_content = ob_get_clean();
      require_once($template);
    }

    public  function accueil(){
      $_SESSION['alert'] = [
        "message" => "Vous êtes au bon endroit pour booster la mise en oeuvre de vos projets",
        "type" => "alert-success"
      ];

      //recuperation des données de la variables data de l'instance mainManager
        $produits = $this->mainManager->getProduits();

      //tableaux qui regroupent les valriable et ses valeurs
      $data_page = [
        "view" => "./views/accueil.view.php",
        "costum_css" => ["style.css", "accueil.css"],
        "produits" => $produits,
        "H1" => "Accueil",
        "uvp"=> "Vos idées sont nos inspirations",
        "page_title"=> "WebyCloudy | Accueil ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
    }

    public function entreprise(){
      $_SESSION['alert'] = [
        "message" => "Il est urgent que vous créer votre société",
        "type" => "alert-danger"
      ];

      $data_page = [
        "view" => "./views/entreprise.view.php",
        "costum_css" => "style.css",
        "H1" => "Créer votre société",
        "uvp"=> "Vos projets sont nos inspirations",
        "page_title"=> "WebyCloudy | Société ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
    }

    public function site(){
        $produit = $this->mainManager->getProduits();
      $data_page = [
        "view" => "./views/site.view.php",
        "costum_css" => "projets.css",
        "H1" => "Créer votre site internet",
          "produit" => $produit,
        "uvp"=> "Profitez de la puissance de votre site web",
        "page_title"=> "WebyCloudy | Site ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
    }

    public function reseaux(){
      $data_page = [
        "view" => "./views/reseau.view.php",
        "costum_css" => "projets.css",
        "H1" => "Les réseaux sociaux",
        "uvp"=> "Profitez de votre audience sur les réseaux sociaux",
        "page_title"=> "WebyCloudy | Reseaux sociaux ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
    }

    public function contact(){
      $data_page = [
        "view" => "./views/contact.view.php",
        "costum_css" => "projets.css",
        "H1" => "Contact",
        "uvp"=> "Restons en contact",
        "page_title"=> "WebyCloudy | Contact ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
    }

    public function pageErreur($msg){
      $data_page = [
        "view" => "./views/error.view.php",
        "costum_css" => "projets.css",
        "H1" => "Page erreur",
        "uvp"=> "Contactez nous pour toute question",
        "page_title"=> "WebyCloudy | Page erreur ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);

    }
  }
 ?>
