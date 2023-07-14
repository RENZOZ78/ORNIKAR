<?php
  require_once("./controllers/MainController.controller.php");
  require_once("models/MainManager.model.php");
  require_once("models/Utilisateur/Utilisateur.model.php");


  class UtilisateurController extends MainController{

    private $utilisateurManager;

    //constructeur pour creer une instance de MainManager
    public function __construct(){
      $this->utilisateurManager = new UtilisateurManager();
    }

    //ft qui gere les infos de la page d'accueils--------
    public  function accueil(){
      //echo password_hash("test", PASSWORD_DEFAULT);

      //Afficher les alertes
      Toolbox::ajouterMessageAlerte("test", Toolbox::COULEUR_VERTE);
      Toolbox::ajouterMessageAlerte("Toutes les reponses a vos questions se trouvent ici", Toolbox::COULEUR_ROUGE);
      Toolbox::ajouterMessageAlerte("Great", Toolbox::COULEUR_ORANGE);

      //recuperer les données getUtilisateurs
      $utilisateurs = $this->visiteurManager->getUtilisateurs();
      print_r($utilisateurs);
      printf($utilisateurs);

      //recuperation des données de la variables data de l'instance mainManager
        $produits = $this->visiteurManager->getProduits();
        print_r($produits);

      //tableaux qui regroupent les variable et ses valeurs
      $data_page = [
        "view" => "./views/Visiteur/accueil.view.php",
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

    //ft qui verifie si les data login sont valides + validaiton mail
    public function validation_login($login, $password){
      if($this->utilisateurManager->isCombinaisonValide($login, $password)){
          if($this->utilisateurManager->estCompteActive($login)){
            Toolbox::ajouterMessageAlerte("Bon retour sur le site ".$login. "!", Toolbox:: COULEUR_VERTE);
            $_SESSION['profil'] = ["login" => $login];
              header("location: ".URL."compte/profil");
          }else{
            Toolbox::ajouterMessageAlerte("Le compte ".$login. " n'a pas été activé", Toolbox::COULEUR_ROUGE);
            //renvoyer le mail da validation a l'utilisateur
            header("location: ".URL."login");
          }
      }else {
        Toolbox::ajouterMessageAlerte("la combinaison mot de passe et login non valide", Toolbox::COULEUR_ROUGE);
        header("location: ".URL. "login");
      }
    }

    //ft page entreprise-----------------
    public function entreprise(){
      //recuperation des données de la variables data de l'instance mainManager
      $produits = $this->visiteurManager->getProduits();

      //afficher les alertes
      Toolbox::ajouterMessageAlerte("test", Toolbox::COULEUR_VERTE);
      Toolbox::ajouterMessageAlerte("Super", Toolbox::COULEUR_ROUGE);
      Toolbox::ajouterMessageAlerte("Great", Toolbox::COULEUR_ORANGE);

      // Envoyer les données dans la view
      $data_page = [
        "view" => "./views/Visiteur/entreprise.view.php",
        "custom_css" => ["style.css", "accueil.css"],
        "H1" => "Créer votre société",
          "produits" => $produits,
        "uvp"=> "Vos projets sont nos inspirations",
        "page_title"=> "WebyCloudy | Société ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
    }

    //ft page cretion entreprise-----------
    public function creation_entreprise(){
      //recuperation des données de la variables data de l'instance mainManager
      $produits = $this->mainManager->getProduits();

      //afficher les alertes
      Toolbox::ajouterMessageAlerte("test", Toolbox::COULEUR_VERTE);
      Toolbox::ajouterMessageAlerte("Super", Toolbox::COULEUR_ROUGE);
      Toolbox::ajouterMessageAlerte("Great", Toolbox::COULEUR_ORANGE);

      // Envoyer les données dans la view
      $data_page = [
        "view" => "./views/Visiteur/entreprise.view.php",
        "custom_css" => ["style.css", "accueil.css"],
        "H1" => "Créer votre société",
          "produits" => $produits,
        "uvp"=> "Vos projets sont nos inspirations",
        "page_title"=> "WebyCloudy | Société ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
    }

    //ft page site-----------------------
    public function site(){
      //recuperation des données de la variables produit de l'instance mainManager a partir de bdd
      $produits = $this->visiteurManager->getProduits();

      // envoyer la data a site.view
      $data_page = [
        "view" => "./views/Visiteur/site.view.php",
        "custom_css" => ["projets.css"],
        "H1" => "Créer votre site internet",
        "produits" => $produits,
        "uvp"=> "Profitez de la puissance de votre site web",
        "page_title"=> "WebyCloudy | Site ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
    }

    //ft page reseau sociaux--------------
    public function reseaux(){
      //recuperation des données de la variables produit de l'instance mainManager a partir de bdd
      $produits = $this->visiteurManager->getProduits();

      //      Envoyer la data la page reseaux
      $data_page = [
        "view" => "./views/Visiteur/reseau.view.php",
        "custom_css" => ["style.css"],
        "H1" => "Les réseaux sociaux",
        "produits" => $produits,
        "uvp"=> "Profitez de votre audience sur les réseaux sociaux",
        "page_title"=> "WebyCloudy | Reseaux sociaux ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
    }

    //ft page marketing--------------------
  public function marketing(){
    //recuperation des données de la variables produit de l'instance mainManager a partir de bdd
    $produits = $this->visiteurManager->getProduits();

    //      envoyer data a page contact view
      $data_page = [
        "view" => "./views/Visiteur/marketing.view.php",
        "custom_css" => ["projets.css", "marketing.css"],
        "H1" => "Publicité",
        "uvp"=> "Il est temps de faire passer votre activité au niveau supérieur",
        "produits" => $produits,
        "page_title"=> "WebyCloudy | Publicité ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
  }

  //ft page contact----------------
  public function contact(){
    //recuperation des données de la variables produit de l'instance mainManager a partir de bdd
    $produits = $this->visiteurManager->getProduits();

    //      envoyer data a page contact view
      $data_page = [
        "view" => "./views/Visiteur/contact.view.php",
        "custom_css" => ["projets.css"],
        "H1" => "Contact",
        "uvp"=> "Restons en contact",
        "produits" => $produits,
        "page_title"=> "WebyCloudy | Contact ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
  }

  //ft page login----------------
  public function login(){
    //recuperation des données de la variables produit de l'instance mainManager a partir de bdd
    $produits = $this->visiteurManager->getProduits();
    $utilisateurs = $this->visiteurManager->getUtilisateurs();

    //      envoyer data a page contact view
      $data_page = [
        "view" => "./views/Visiteur/login.view.php",
        "custom_css" => ["projets.css"],
        "H1" => "Se connecter",
        "uvp"=> "Veuillez entrer vos logins et mot de passe",
        "produits" => $produits,
        "utilisateurs" => $utilisateurs,
        "page_title"=> "WebyCloudy | Login ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
  }

    //ft page erreur qui appelle la ft du parent-------
    //on ne veut pas de page erreur specifique aux visiteur => on laisse la ft principale dans le controlller
    public function pageErreur($msg){
      parent::pageErreur($msg);
    }

  }
 ?>
