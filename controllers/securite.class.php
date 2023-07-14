<?php

  class Securite{
    public static function secureHTML($chaine){
      return htmlentities($chaine);
    }
  }

 ?>
