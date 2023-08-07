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
        //print_r($produits);

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
            $msg =  "Le compte de ".$login. " n'a pas été activé par mail. ";
            $msg .= "<a href='renvoyerMailValidation/".$login."'>Renvoyez le mail de validation </a>";
            Toolbox::ajouterMessageAlerte($msg, Toolbox::COULEUR_ROUGE);
            //renvoyer le mail da validation a l'utilisateur
            header("Location: ".URL."login");
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

  //ft page profil----------------
  public function profil(){
    //recuperation des données de la variables $data a partir de la classe utilisateurManager , dans la session de la ft getUserInformation en prennant en parametre profil et un login
    $datas = $this->utilisateurManager->getUserInformation($_SESSION['profil']['login']);
    $_SESSION['profil']['role'] = $datas['role'];
    //print_r($datas);

    //      envoyer data a page contact view
      $data_page = [
        "view" => "views/Utilisateur/profil.view.php",
        "custom_css" => ["projets.css"],
        "H1" => "Compte de ".$_SESSION['profil']['login'],
        "uvp"=> "Vous trouverez toutes vos informations",
        "utilisateur" => $datas,
        "page_js" => ['profil.js'],
        "page_title"=> "WebyCloudy | Profil ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
  }

  //ft page decoonexion----------------
  public function deconnexion(){
    Toolbox::ajouterMessageAlerte("Vous êtes maintenant déconnecté", Toolbox::COULEUR_ORANGE);
    unset($_SESSION['profil']);
    header ("location: " .URL."accueils");
  }

  //ft qui valide un compte , en verifiant que le login n'existe pass
    public function validation_creerCompte($login,$password,$mail){
      if ($this->utilisateurManager->verifLoginDisponible($login)){

        $passwordCrypte = password_hash($password,PASSWORD_DEFAULT);
        $clef = rand(0,9999);
        if($this->utilisateurManager->bdCreerCompte($login,$passwordCrypte,$mail,$clef)){
          $this->sendMailValidation($login, $mail, $clef);
          echo "instance avec ". $login,$mail,$clef. "crée!!";
          Toolbox::ajouterMessageAlerte("La compte a été crée, un mail de validation vous sera envoyé", Toolbox::COULEUR_VERTE);
          header("Location: ".URL. "login");
          echo "le compte est crée";
        }
      }else{
        Toolbox::ajouterMessageAlerte("Le login est déjà utilisé !", Toolbox::COULEUR_ROUGE);
        header("Location: ".URL."creerCompte");
        echo "le compte n'est pas crée";
      }
    }

    //ft  qui valide l'envoie de mailde  validation_login
    private function sendMailValidation($login,$mail,$clef){
      $urlVerification = URL."validationMail/".$login."/".$clef;
      $sujet = "Creation du compte sur le site webycloudy";
      $message = "Pour valider votre compte veuillez cliquer sur le lien suivant".$urlVerification;
      Toolbox::sendMail($mail,$sujet,$message);
    }

    public function renvoyerMailValidation($login){
      $utilisateur = $this->utilisateurManager->getUserInformation($login);
      $this->sendMailValidation($login,$utilisateur['mail'],$utilisateur['clef']);
      header ("Location: ".URL."login");
    }

    //ft qui active le compte utilisateur=basculer le champs isValid a 1
    public function validation_mailCompte($login,$clef){
      if($this->utilisateurManager->bdValidationMailCompte($login,$clef)){
        Toolbox::ajouterMessageAlerte("Votre compte est bien activéé !", Toolbox::COULEUR_VERTE);
        $_SESSION['profil'] = [
          "login" => $login,
        ];
        header("Location: ".URL.'compte/profil');
      }else{
        Toolbox::ajouterMessageAlerte("Le compte n'a pas été activée!", Toolbox::COULEUR_ROUGE);
        header ("Location :".URL."creerCompte");
      }
    }

    public function validation_modificationMail($mail){
      echo "entree";
      if($this->utilisateurManager->bdValidationModificationMail($_SESSION['profil']['login'],$mail)){
        Toolbox::ajouterMessageAlerte("Le mail est bien modifié !", Toolbox::COULEUR_VERTE);
      }else{
        Toolbox::ajouterMessageAlerte("Aucune modification de mail effectuée !", Toolbox::COULEUR_ROUGE);
      }
        header ("Location: ".URL."compte/profil");
    }

    public function modificationPassword(){
        // Envoyer les données dans la view
        $data_page = [
          "view" => "./views/Utilisateur/modificationPassword.view.php",
          "custom_css" => ["style.css", "accueil.css"],
          "H1" => "Modifier votre mot  ".$_SESSION['profil']['login'],
          "page_js" => ["modificationPassword.js"],
          "uvp"=> "",
          "page_title"=> "WebyCloudy | Modification Mot de passe ",
          "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
      }

    public function validation_modificationPassword($ancienPassword,$nouveauPassword,$confirmNouveauPassword){

      if($nouveauPassword === $confirmNouveauPassword){

        if($this->utilisateurManager->isCombinaisonValide($_SESSION['profil']['login'],$ancienPassword)){
          $passwordCrypte = password_hash($nouveauPassword,PASSWORD_DEFAULT);

            if($this->utilisateurManager->bdModificationPassword($_SESSION['profil']['login'],$passwordCrypte)){
              Toolbox::ajouterMessageAlerte('Le mot de passe a bien été modifié', Toolbox::COULEUR_VERTE);
              header("Location: ".URL."compte/profil");
            }else{
              Toolbox::ajouterMessageAlerte("La modification n'a pas été éffectuée", Toolbox::COULEUR_ROUGE );
              header("Location: ".URL."compte/modificationPassword");

            }

        }else{
          Toolbox::ajouterMessageAlerte('La combinaison login /ancien mot de passe ne correspond pas', Toolbox::COULEUR_ROUGE);
          header('Location :'.URL.'compte/modificationPassword');
        }

      }else{
        Toolbox::ajouterMessageAlerte('Les deux 2 nouveaux mots de passe ne correpondent pas', Toolbox::COULEUR_ROUGE);
        header ('Location :'.URL.'compte/modificationPassword');
      }
    }




    //ft page erreur qui appelle la ft du parent-------
    //on ne veut pas de page erreur specifique aux visiteur => on laisse la ft principale dans le controlller
    public function pageErreur($msg){
      parent::pageErreur($msg);
    }

  }
 ?>
