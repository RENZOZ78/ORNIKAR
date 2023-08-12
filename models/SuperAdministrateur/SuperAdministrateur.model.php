<?php
  require_once("./models/MainManager.model.php");

  class SAdministrateurManager extends MainManager{

    //recuperation de data des utilisateurs
    public function getUtilisateurs(){
        $req = $this->getBdd()->prepare("SELECT * FROM utilisateur");
        $req->execute();
        $utilisateur = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $utilisateur;
    }

    //recuperation de data des produits
    public function getProduits(){
        $req = $this->getBdd()->prepare("SELECT * FROM produits");
        $req->execute();
        $produit = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $produit;
    }

    public function bdModificationRoleUser($login,$role){
      $req= "UPDATE utilisateur set role = :role WHERE login = :login";
      $stmt = $this->getBdd()->prepare($req);
      $stmt->bindValue(":login",$login,PDO::PARAM_STR);
      $stmt->bindValue(":role",$role,PDO::PARAM_STR);
      $stmt->execute();
      $estModifier = ($stmt->rowCount() > 0);
      $stmt->closeCursor();
      return $estModifier;
    }

  }



?>
