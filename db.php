<?php
    class Database {
        public $woestijn;
 
        public function __construct($db = "woestijn", $user="root", $pwd="", $host="localhost:3307")
        {
            try {
                $this->woestijn = new PDO("mysql:host=$host; dbname=$db", $user, $pwd);
                $this->woestijn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "connected to database $db";
            }
            catch(PDOException $e){
                echo("Connection failed: " . $e->getMessage());
            }
        }
    }
 
 
?>