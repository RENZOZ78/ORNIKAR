<?php

  require_once("Model.class.php");

  class MainManager extends Model{
    //recuperation de data
    public function getProduits(){

        $req = $this->getBdd()->prepare("SELECT * FROM produits");
        $req->execute();
        $produit = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $produit;

    }
  }
 ?>
