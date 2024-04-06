<?php
//INSERTION reservationapp
function insertion($id_reservation ,$id_user, $id_app , $check_in_date, $check_out_date,$totalp){
    try{
        $database = new PDO('mysql:host=localhost;dbname=GESTION_IMMOBILIERS','root',"");
    $sql=$database->prepare("INSERT INTO RESERVATION_APPARTEMENT(id_reservation,id_user,id_app,check_in_date,check_out_date,total_price) VALUES(?,?,?,?,?,?)");
    $sql->execute(array($id_reservation,$id_user,$id_app,$check_in_date,$check_out_date,$totalp));
}
    catch(Exception $e){
        die('oh non:('. $e->getMessage());
    }
}
 //  insertion(3 , 2 ,2,'2016-07-01','2080-03-08',80000);
 //  echo "rosine";


  //modification
  function modification( $y ,$z ,$w){
    try{
        $database = new PDO('mysql:host=localhost;dbname=GESTION_IMMOBILIERS' , 'root' , '');
        $sql=$database->prepare("UPDATE RESERVATION_APPARTEMENT SET check_in_date=? , check_out_date = ?, total_price=? WHERE id_reservation = 3");
        $sql->execute(array($y, $z,$w));
    }
    catch(Exception $e){
        die('rosine:)' .$e->getMessage());
      }
    }
      modification('2005-06-09' ,'2010-09-07', 350000);

//suppression
function suppression(){
    try{
    $database = new PDO('mysql:host=localhost;dbname=GESTION_IMMOBILIERS' , 'root' , '');
    $sql=$database->prepare("UPDATE RESERVATION_APPARTEMENT SET RM=0 WHERE id_reservation = 3");
    $sql->execute(array());
  }
  catch(Exception $e){
    die('rosine:)' .$e->getMessage());
  }
}
suppression();
echo "merci";
?>
      
