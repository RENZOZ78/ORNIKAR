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
  }
    ?>
