<?php
  class Toolbox {
    public const COULEUR_ORANGE = "alert-warning";
    public const COULEUR_ROUGE = "alert-danger";
    public const COULEUR_VERTE = "alert-success";

    //fonciton qui envoie des alertes
    public static function ajouterMessageAlerte($message,$type){
      $_SESSION['alert'][]=[
        "message" => $message,
        "type" => $type
      ];
      return $_SESSION;
    }

    //ft qui envoie des mails aux getUtilisateurs
    public static function sendMail($destinataire,$sujet,$message){
      $headers = "From: webycloudy@gmail.com";
      if(mail($destinataire,$sujet,$message,$headers)){
        self::ajouterMessageAlerte("Mail de validation a été envoyé", self::COULEUR_VERTE);
      }else{
        self::ajouterMessageAlerte("Mail non envoyé", self::COULEUR_ROUGE);
      }
    }

    //ft qui permet de rajouter une images
    public static function ajoutImage($file, $dir){
      if(!isset($file['name']) || empty($file['name']))
        throw new Exception("Vous devez indiquer une image");

      if(!file_exists($dir)) mkdir($dir,0777);

      $extension = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
      $random = rand(0,99999);
      $target_file = $dir.$random."_".$file['name'];

      if(!getimagesize($file["tmp_name"]))
        throw new Exception("Le ficher n'est pas une image");
      if($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !=="gif")
        throw new Exception("L'extension du fichier n'est pas reconnue");
      if(file_exists($target_file))
        throw new Exception("Le fichier existe déja");
      if($file['size'] > 500000)
        throw new Exception("Le fichier est trop gros");
      if(!move_uploaded_file($file['tmp_name'], $target_file))
          throw new Exception("l'ajout de l'image n'a pas fonctionné");
        else return ($random."_".$file['name']);
      }
    }
