<?php

include 'connection.php';



//INSERTION D'UN APPARTEMENT

function insert_appartement($name , $location , $prix_nuit , $prix_heur , $ville , $localisation , $description , $douche , $chambre , $cuisine , $parking , $photo){

    $connect = connection();

    if($connect != null){
        
        $sql = "INSERT INTO apartement(name_apart,location,prix_Par_Nuit,prix_par_heur,ville,localisation,description,douche,chambre,cuisine,parking,photo) VALUES (:name,:location,:prix_nuit,:prix_heur,:ville,:localisation,:description,:douche,:chambre,:cuisine,:parking,:photo)";

        $val=$connect->prepare($sql);

        $val->bindParam(':name',$name);
        $val->bindParam(':location',$location);
        $val->bindParam(':prix_nuit',$prix_nuit);
        $val->bindParam(':prix_heur',$prix_heur);
        $val->bindParam(':ville',$ville);
        $val->bindParam(':localisation',$localisation);
        $val->bindParam(':description',$description);
        $val->bindParam(':douche',$douche);
        $val->bindParam(':chambre',$chambre);
        $val->bindParam(':cuisine',$cuisine);
        $val->bindParam(':parking',$parking);
        $val->bindParam(':photo',$photo);

        $val->execute();
        
        return true;

    }

    return false;
    
}


    



//SUPRESSION D'UN APARTEMENT

function supression_appartement($id){

    $connect = connection();

    if($connect != null){
        $reques = $connect->prepare("UPDATE apartement SET rmva=0 where id_apartement=:id");
        $reques->execute(array(
            'id' => $id
        ));
        echo 'sortie';

        return true;
    } 

    return false;
}



         
    


//AFFICHAGE DES DONNEES 
function affichage_appartement(){
    $tab =[];

    $connect = connection();
    
    if($connect !== null){
        $sql = "SELECT * FROM apartement WHERE rmva=1 ";
        $nv = $connect->query($sql);
        while ($var=$nv->fetch()) {
            $tab[]=[
                'id_apartement'=>$var['id_apartement'],
                'name_apart'=>$var['name_apart'],
                'location'=>$var['location'],
                'prix_Par_Nuit'=>$var['prix_Par_Nuit'],
                'prix_par_heur'=>$var['prix_par_heur'],
                'ville'=>$var['ville'],
                'localisation'=>$var['localisation'],
                'description'=>$var['description'],
                'douche'=>$var['douche'],
                'chambre'=>$var['chambre'],
                'cuisine'=>$var['cuisine'],
                'parking'=>$var['parking'],
                'photo'=>$var['photo'],
                'ceate_at_apart'=>$var['ceate_at_apart'],
                'update_at_apart'=>$var['update_at_apart'],

            ];
        }
    }
   
    return $tab;

}



?>