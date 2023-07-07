<?php

  abstract class Model{
    private static $pdo;

    private static function setBdd(){
      self::$pdo = new PDO("mysql:host=127.0.0.1;dbname=webycloudy;charset=utf8", "root", "");
      
      self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    protected function getBdd(){
      if(self::$pdo === null){
        self::setBdd();
        echo "vous etes connecté";
      }
      return self::$pdo;
      echo "vous n'etes pas connecté, mais ca passe!";
    }
  }

 ?>
