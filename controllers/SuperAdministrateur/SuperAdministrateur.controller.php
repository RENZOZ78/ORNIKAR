<?php
  require_once("./controllers/MainController.controller.php");
  require_once("models/MainManager.model.php");
  require_once("models/SuperAdministrateur/SuperAdministrateur.model.php");

  class SAdministrateurController extends MainController{

    private $sAdministrateurManager;

    //constructeur pour creer une instance de MainManager
    public function __construct(){
      $this->sAdministrateurManager = new SAdministrateurManager();
    }

    public function gestion_full_utilisateur(){
    $utilisateurs = $this->sAdministrateurManager->getUtilisateurs();
      $data_page = [
        "view" => "./views/SuperAdministrateur/gestionFullUtilisateur.view.php",
        "custom_css" => ["creerCompte.css"],
        "H1" => "Gestion complète des utilisateurs",
        "uvp"=> "Ici vous pouvez gérer toutes les données utilisateurs",
        "utilisateurs" => $utilisateurs,
        "page_title"=> "WebyCloudy | Gestion Full Utilisateurs",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
    }

    public function validation_modification_full_utilisateur($login,$role,$mail,$is_valid){
      if($this->sAdministrateurManager->bdModificationRoleUser($login,$role,$mail,$is_valid)){
        Toolbox::ajouterMessageAlerte("Le role est bien modifié !", Toolbox::COULEUR_VERTE);
      }else{
        Toolbox::ajouterMessageAlerte("Aucune modification de rôle n'a été effectuée !", Toolbox::COULEUR_ROUGE);
      }
        header ("Location: ".URL."administration/droits");
    }

    public function gestion_commandes(){
    $utilisateurs = $this->sAdministrateurManager->getUtilisateurs();
      $data_page = [
        "view" => "./views/Administrateur/gestionCommandes.view.php",
        "custom_css" => ["creerCompte.css"],
        "H1" => "Gérer les droits utilisateurs",
        "uvp"=> "Ici vous pouvez gérer les droits utilisateurs",
        "utilisateurs" => $utilisateurs,
        "page_title"=> "WebyCloudy | Gestion droits ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
    }

    public function gestion_produits(){
    $produits = $this->sAdministrateurManager->getProduits();
      $data_page = [
        "view" => "./views/Administrateur/gestionProduits.view.php",
        "custom_css" => ["creerCompte.css"],
        "H1" => "Gestion des produits",
        "uvp"=> "Ici vous pouvez gérer les produits",
        "produits" => $produits,
        "page_title"=> "WebyCloudy | Gestion produits ",
        "template" => "views/common/template.php"
      ];
      $this->genererPage($data_page);
    }

    //ft page erreur qui appelle la ft du parent-------
    public function pageErreur($msg){
      parent::pageErreur($msg);
    }

  }
 ?>
