<?php
//INSERTION APPARTEMENT
function insertion($id_app ,$name, $desc , $price , $img){
    try{
        $database = new PDO('mysql:host=localhost;dbname=GESTION_IMMOBILIERS','root',"");
    $sql=$database->prepare("INSERT INTO APPARTEMENT(id_app,name,description,price_per_night,image) VALUES(?,?,?,?,?)");
    $sql->execute(array($id_app,$name,$desc,$price,$img));
}
    catch(Exception $e){
        die('oh non:('. $e->getMessage());
    }
}
   insertion(2 , "BEL-AIR" ,"SUBLIME",7600,'img');
   echo "rosine";

   //modification
   
   function update($id){
    try{
       $db= new PDO('mysql:host=localhost;dbname=GESTION_IMMOBILIERS', 'root','');

      // $db = new PDO('mysql:host=localhost ; dbname= GESTION_IMMOBILIERS', 'root','');
      // exit;
      //recuperation de l'appart correspondant a l'id
      $sql="SELECT * FROM APPARTEMENT WHERE id_app=:id";
      $res = $db->prepare($sql);
      $res->bindParam(':id', $id);
      $res->execute();
      $row = $res->fetch();
      // print_r($row);
      // exit;
      if($row){
        echo "l'appart existe <br>";
        //modification des champs
        $nom = "valence";
        $desc="45 etoiles";
        $prix = 1444900;
        $image = "100.pmj";
        //mettre a jour 
        $sql="UPDATE APPARTEMENT SET  name=:nom , description=:descrip , price_per_night=:prix , image=:im WHERE id_app =:id";
        $res=$db->prepare($sql);
        // UPDATE APPARTEMENT SET  name=:nom , description=:descrip , price_per_night=:prix , image=:im WHERE id_app =4
        
        $res->bindParam(':nom' , $nom);
        $res->bindParam(':descrip', $desc);
        $res->bindParam(':prix' , $prix);
        $res->bindParam(':im' , $img);
        $res->bindParam(':id', $id, PDO::PARAM_INT) ;
        $res->execute();
        echo "modif success";
      }else{
        echo "n'existe pas";
        
      }
    }catch (Exception $e){
      echo "ereur".$e->getMessage();
    }
    exit;

      }
      update(46);
    
//suppression
      function suppression(){
        try{
        $database = new PDO('mysql:host=localhost;dbname=GESTION_IMMOBILIERS' , 'root' , '');
        $sql=$database->prepare("UPDATE APPARTEMENT SET rm=0 WHERE id_app = 100");
        $sql->execute(array());
      }
      catch(Exception $e){
        die('rosine:)' .$e->getMessage());
      }
    }
    suppression();
    echo "merci";
    ?>