<?php

include 'connection.php';

session_start();



//INSERTION D'UN VEHICULE
function insert_vehicule($model , $brand , $type , $capacite){

    $connect = connection();

    if($connect != null){
        
        $sql = "INSERT INTO vehicule(model,brand,type,capacite,create_at_vehicule) VALUES (:model,:brand,:type,:capacite, now())";

        $val=$connect->prepare($sql);

        $val->bindParam(':model',$model);
        $val->bindParam(':brand',$brand);
        $val->bindParam(':type',$type);
        $val->bindParam(':capacite',$capacite);

        $val->execute();
    }
    
}






//SUPRESSION D'UN vehicule
function supression_vehicule($id){
    $connect = connection();

    if($connect != null){

        $reques = $connect->prepare("UPDATE vehicule SET rmvv=0 where id_vehicule=:id");
        $reques->execute(array(
            'id' => $id
        ));

        return true;

        }

    return false;
}







//AFFICHARGE DES DONNEES
function affichage_vehicule(){
    $tab =[];

    $connect = connection();
    
    if($connect !== null){
        $sql = "SELECT * FROM vehicule WHERE rmvv=1 ";
        $nv = $connect->query($sql);
        while ($var=$nv->fetch()) {
            $tab[]=[
                'id_vehicule'=>$var['id_vehicule'],
                'model'=>$var['model'],
                'brand'=>$var['brand'],
                'type'=>$var['type'],
                'capacite'=>$var['capacite'],
                'ceate_at_vehicule'=>$var['ceate_at_vehicule'],
                'update_at_vehicule'=>$var['update_at_vehicule'],

            ];
        }
    }
return $tab;

}



?>
