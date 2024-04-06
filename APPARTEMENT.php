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
   function modification( $x , $y , $z , $w){
    try{
        $database = new PDO('mysql:host=localhost;dbname=GESTION_IMMOBILIERS' , 'root' , '');
        $sql=$database->prepare("UPDATE APPARTEMENT SET name=? , description = ?, price_per_night=? , image=? WHERE id_app = 100");
        $sql->execute(array($x , $y, $z,$w));
    }
    catch(Exception $e){
        die('rosine:)' .$e->getMessage());
      }
    }
      modification("PHILLIWEST" , "5 etoiles" , 78000, "philli.png");
      

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