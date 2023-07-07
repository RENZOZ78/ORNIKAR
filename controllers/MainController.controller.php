<?php

require_once("models/MainManager.model.php");
require_once("controllers/Toolbox.class.php");


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
      //Afficher les alertes
      Toolbox::ajouterMessageAlerte("test", Toolbox::COULEUR_VERTE);
      Toolbox::ajouterMessageAlerte("Toutes les reponses a vos questions se trouvent ici", Toolbox::COULEUR_ROUGE);
      Toolbox::ajouterMessageAlerte("Great", Toolbox::COULEUR_ORANGE);
      
      //recuperation des données de la variables data de l'instance mainManager
        $produits = $this->mainManager->getProduits();

      //tableaux qui regroupent les variable et ses valeurs
      $data_page = [
        "view" => "./views/accueil.view.php",
        "custom_css" => ["style.css", "accueil.css"],
        "produits" => $produits,
        "H1" => "Accueil",
        "page_js" => ["accueil.js"],
        "uvp"=> "Vos idées sont nos inspirations",
        "page_title"=> "WebyCloudy | Accueil ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
    }

    public function entreprise(){
      //recuperation des données de la variables data de l'instance mainManager
      $produits = $this->mainManager->getProduits();

      //afficher les alertes
      Toolbox::ajouterMessageAlerte("test", Toolbox::COULEUR_VERTE);
      Toolbox::ajouterMessageAlerte("Super", Toolbox::COULEUR_ROUGE);
      Toolbox::ajouterMessageAlerte("Great", Toolbox::COULEUR_ORANGE);

      // Envoyer les données dans la view
      $data_page = [
        "view" => "./views/entreprise.view.php",
        "custom_css" => ["style.css", "accueil.css"],
        "H1" => "Créer votre société",
          "produits" => $produits,
        "uvp"=> "Vos projets sont nos inspirations",
        "page_title"=> "WebyCloudy | Société ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
    }

    public function site(){
      //recuperation des données de la variables produit de l'instance mainManager a partir de bdd
      $produits = $this->mainManager->getProduits();

      // envoyer la data a site.view
      $data_page = [
        "view" => "./views/site.view.php",
        "custom_css" => ["projets.css"],
        "H1" => "Créer votre site internet",
        "produits" => $produits,
        "uvp"=> "Profitez de la puissance de votre site web",
        "page_title"=> "WebyCloudy | Site ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
    }

    public function reseaux(){
      //recuperation des données de la variables produit de l'instance mainManager a partir de bdd
      $produits = $this->mainManager->getProduits();

      //      Envoyer la data la page reseaux
      $data_page = [
        "view" => "./views/reseau.view.php",
        "custom_css" => ["style.css"],
        "H1" => "Les réseaux sociaux",
        "produits" => $produits,
        "uvp"=> "Profitez de votre audience sur les réseaux sociaux",
        "page_title"=> "WebyCloudy | Reseaux sociaux ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
    }

    public function contact(){
      //recuperation des données de la variables produit de l'instance mainManager a partir de bdd
      $produits = $this->mainManager->getProduits();

    //      envoyer data a page contact view
      $data_page = [
        "view" => "./views/contact.view.php",
        "custom_css" => ["projets.css"],
        "H1" => "Contact",
        "uvp"=> "Restons en contact",
        "produits" => $produits,
        "page_title"=> "WebyCloudy | Contact ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
    }public function marketing(){
      //recuperation des données de la variables produit de l'instance mainManager a partir de bdd
      $produits = $this->mainManager->getProduits();

    //      envoyer data a page contact view
      $data_page = [
        "view" => "./views/marketing.view.php",
        "custom_css" => ["projets.css", "marketing.css"],
        "H1" => "Publicité",
        "uvp"=> "Il est temps de faire passer votre activité au niveau supérieur",
        "produits" => $produits,
        "page_title"=> "WebyCloudy | Publicité ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
    }

    public function pageErreur($msg){
      //recuperation des données de la variables produit de l'instance mainManager a partir de bdd
      $produits = $this->mainManager->getProduits();

      //envoyer data a page erreur
      $data_page = [
        "view" => "./views/error.view.php",
        "custom_css" => ["projets.css"],
        "H1" => "Page erreur",
        "produits" => $produits,
        "uvp"=> "Contactez nous pour toute question",
        "page_title"=> "WebyCloudy | Page erreur ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);

    }
  }
 ?>
