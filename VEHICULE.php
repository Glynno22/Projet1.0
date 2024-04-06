<?php
//INSERTION VEHICULE
function insertion($id ,$brand, $marque , $model , $type , $capacity , $price_per_day,$image){
    try{
        $database = new PDO('mysql:host=localhost;dbname=GESTION_IMMOBILIERS','root',"");
    $sql=$database->prepare("INSERT INTO VEHICULE(id_vehicule,brand,marque,model,type,capacity,price_per_day,image) VALUES(?,?,?,?,?,?,?,?)");
    $sql->execute(array($id,$brand,$marque,$model,$type,$capacity,$price_per_day,$image));
}
    catch(Exception $e){
        die('oh non:('. $e->getMessage());
    }
}
   insertion(2 , "rosine" ,"toyota","v8",'taxi',3 ,1000000,"im");
   

//modification
function modification( $x , $y , $z , $w , $t , $s ,$d ){
    try{
        $database = new PDO('mysql:host=localhost;dbname=GESTION_IMMOBILIERS' , 'root' , '');
        $sql=$database->prepare("UPDATE VEHICULE SET brand=? , marque = ?,model=?, type=? , capacity=? , price_per_day=? , image=? WHERE id_vehicule = 2");
        $sql->execute(array($x , $y, $z,$w,$t,$s,$d));
    }
    catch(Exception $e){
        die('rosine:)' .$e->getMessage());
      }
    }
      modification("valencia" , "toyota" ,"v4"  , "terestre", 78000, 600000,"phil.png");
      echo "rosine";

//suppression
function suppression(){
    try{
        $database = new PDO('mysql:host=localhost;dbname=GESTION_IMMOBILIERS' , 'root' , '');
        $sql=$database->prepare("UPDATE VEHICULE SET rm=0 WHERE id_vehicule = 2");
        $sql->execute(array());
      }
      catch(Exception $e){
        die('rosine:)' .$e->getMessage());
      }
    }
    suppression();
    echo "merci";

