<?php

require_once("models/MainManager.model.php");
require_once("controllers/Toolbox.class.php");


  Abstract class MainController{
    private $mainManager;

    public function __construct(){
      $this->mainManager = new MainManager();
    }

    protected function genererPage($data){
      extract($data);//creer la variable directement
      ob_start();
      require_once($view);
      $page_content = ob_get_clean();
      require_once($template);
    }


    protected function pageErreur($msg){
      //recuperation des données de la variables produit de l'instance mainManager a partir de bdd
      //$produits = $this->mainManager->getProduits();

      //envoyer data a page erreur
      $data_page = [
        "view" => "./views/error.view.php",
        "custom_css" => ["projets.css"],
        "H1" => "Page erreur",
        //"produits" => $produits,
        "uvp"=> "Contactez nous pour toute question",
        "page_title"=> "WebyCloudy | Page erreur ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
    }
  }
 ?>
