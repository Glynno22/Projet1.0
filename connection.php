<?php   

//FICHIER DE CONNECTION

    function connection(){
        
        try{
            $database = new PDO('mysql:host=localhost;dbname=GIMMOBILIER','root','');
            return $database;
        }catch(PDOException $e){
            die('mouf tu as mal fait '.$e->getMessage());
        }
        return "null";
    }


?>