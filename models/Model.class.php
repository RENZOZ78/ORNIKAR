<?php

  abstract class Model{
    private static $pdo;

    private static function setBdd(){
      self::$pdo = new PDO("mysql:host=localhost, dbname=Webycloudy;charset=utf8", "root", "");
      self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    protected function getBdd(){
      if(self::$pdo === null){
        self::setBdd();
        echo "vous etes connecté";
      }
      return self::$pdo;
      echo "vous etes connecté";
    }
  }

 ?>
