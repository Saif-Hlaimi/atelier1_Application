<?php
class Config {
    private static $instance =NULL;

    public static function getconnexion (){

        if (!isset(self::$instance)){
            self::$instance = new PDO('mysql:host=localhost;dbname=clubesprit', 'root',"");

        }
        //return self::$instance;
    } 
    
    
    public function afficherClubs() {
        $req = self::$instance->query("SELECT * FROM clube");
         echo $req;
    }
    
    }

$showdata = new Config();
$showdata->getconnexion();
$showdata->afficherClubs();
?>