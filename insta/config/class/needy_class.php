<?php

  class N{

    public static $e;
    public static $database;
    public static $DIR = "/insta";
    public static $GMAIL = "abc@gmail.com";
    public static $GMAIL_PASSWORD = "abc";

    public static function _DB(){
      try {
        self::$database = new PDO('mysql:host=smartchat-smartchat.i.aivencloud.com;dbname=myinstagram;charset=utf8mb4;port=19055','avnadmin','');
        self::$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $e = self::$e;
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
      return self::$database;
    }

  }

?>
