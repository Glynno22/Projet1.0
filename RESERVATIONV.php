<?php
//INSERTION reservationv
function insertion($id_res ,$id_user, $id_veh , $rental_start_date , $rental_end_date,$totalprice , $img){
    try{
        $database = new PDO('mysql:host=localhost;dbname=GESTION_IMMOBILIERS','root',"");
    $sql=$database->prepare("INSERT INTO RESERVATION_VEHICULE(id_reservation_vehicule,id_user,id_vehicule,rental_start_date,rental_end_date,total_price,image) VALUES(?,?,?,?,?,?,?)");
    $sql->execute(array($id_res,$id_user,$id_veh,$rental_start_date,$rental_end_date,$totalprice,$img));
}
    catch(Exception $e){
        die('oh non:('. $e->getMessage());
    }
}
   insertion(2 , 2 ,2,'2004-09-07','2020-08-06',56000,"image");
   echo "rosine";

//modification
function modification($w , $t , $s ,$d ){
    try{
        $database = new PDO('mysql:host=localhost;dbname=GESTION_IMMOBILIERS' , 'root' , '');
        $sql=$database->prepare("UPDATE RESERVATION_VEHICULE SET  rental_start_date=? , rental_end_date=? , total_price=? , image=? WHERE id_reservation_vehicule = 2");
        $sql->execute(array($w,$t,$s,$d));
    }
    catch(Exception $e){
        die('rosine:)' .$e->getMessage());
      }
    }
      modification('2020-03-08','2034-06-09', 60000000,"phi.png");
      echo "rosine";

      function suppression(){
        try{
            $database = new PDO('mysql:host=localhost;dbname=GESTION_IMMOBILIERS' , 'root' , '');
            $sql=$database->prepare("UPDATE RESERVATION_VEHICULE SET RM=0 WHERE id_reservation_vehicule = 2");
            $sql->execute(array());
          }
          catch(Exception $e){
            die('rosine:)' .$e->getMessage());
          }
        }
        suppression();
        echo "merci";
    