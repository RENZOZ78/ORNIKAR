<?php
  require_once("./models/MainManager.model.php");

  class VisiteurManager extends MainManager{

    //recuperation de data des produits
    public function getProduits(){

        $req = $this->getBdd()->prepare("SELECT * FROM produits");
        $req->execute();
        $produit = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $produit;
    }
  }



?>
