<?php
  require_once("./models/MainManager.model.php");

  class UtilisateurManager extends MainManager{

    private function getPasswordUser($login){
      $req = "SELECT password FROM utilisateur where login = :login";
      $stmt = $this->getBdd()->prepare($req);
      $stmt->bindValue(":login",$login,PDO::PARAM_STR);
      $stmt->execute();
      $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
      $stmt->closeCursor();
      return $resultat['password'];
    }

    public function isCombinaisonValide($login, $password){

      $passwordBD = $this->getPasswordUser($login);
      echo $passwordBD;
      return password_verify($password, $passwordBD);
      }

      public function estCompteActive($login){
        //test return false;
        $req = "SELECT is_valid FROM utilisateur where login = :login";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":login",$login,PDO::PARAM_STR);
        $stmt->execute();
        $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return ((int)$resultat['is_valid'] ===0) ? false : true;

      }



    }






?>
