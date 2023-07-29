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

    //ft utilisateurManager
    public function getUserInformation($login){
      //test return false;
      $req = "SELECT * FROM utilisateur where login = :login";
      $stmt = $this->getBdd()->prepare($req);
      $stmt->bindValue(":login",$login,PDO::PARAM_STR);
      $stmt->execute();
      $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
      $stmt->closeCursor();
      return $resultat;
    }

    //ft qui verfiie si le login existe deja,  est verifLoginDisponible
    public function verifLoginDisponible($login){
      //au lieu de recup les infos, on va juste l'appeler getUserInformation
      $utilisateur = $this->getUserInformation($login);
      return  empty($utilisateur);
    }

    //ft qui crée el compte en getBdd
    public function bdCreerCompte($login,$passwordCrypte,$mail,$clef){
      $req= "INSERT INTO utilisateur (login, password, mail, is_valid, role, clef, image)
      VALUES (:login, :password, :mail, 0, 'utilisateur', :clef, '')";
      $stmt = $this->getBdd()->prepare($req);
      $stmt->bindValue(":login",$login,PDO::PARAM_STR);
      $stmt->bindValue(":password",$passwordCrypte,PDO::PARAM_STR);
      $stmt->bindValue(":mail",$mail,PDO::PARAM_STR);
      $stmt->bindValue(":clef",$clef,PDO::PARAM_INT);
      $stmt->execute();
      $estModifier = ($stmt->rowCount() > 0);
      $stmt->closeCursor();
      return $estModifier;
      echo "votre compte est crée";
    }

  }






?>
