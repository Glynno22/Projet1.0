<?php

include 'connection.php';



//INSERTION D'UNE RESERVATION
function insert_reservation_vehicule($debut , $fin , $fk_u , $fk_v){

    $connect = connection();

    if($connect!=null){
        $sql = "INSERT INTO resevation_vehicule(date_debut_vehicule , date_fin_vehicule , fk_utilisateur , fk_vehicule , create_at_rv) 
        VALUES (:debut , :fin , :fk_u , :fk_v , now())"; 

        $nv=$connect->prepare($sql);

        $nv->bindParam(':debut' , $debut);
        $nv->bindParam(':fin',$fin);
        $nv->bindParam(':fin',$fin);
        $nv->bindParam(':fk_u',$fk_u);
        $nv->bindParam(':fk_v',$fk_v);
        $nv->execute();

        return true;
    }

    return false;
}






//SUPRESSION D'UNE RESERVATION
function supression_reservation_vehicule($id){

    $connect=connection();

    if($connect!=null){

        $sql = "UPDATE resevation_vehicule SET rmv_rv=0 , update_at_rv=now() where id_reservation_vehicule=:id";
        $nv = $connect->prepare($sql);
        $nv->bindParam(':id',$id);
        $nv->execute();
        echo "   bonjour";
    }
}







//AFFICHAGE DES DONNEES
function affichage_reservatin_vehicule(){
    $tab =[];

    $connect = connection();
    
    if($connect !== null){
        $sql = "SELECT * FROM resevation_vehicule WHERE rmv_rv=1 ";
        $nv = $connect->query($sql);
        while ($var=$nv->fetch()) {
            $tab[]=[
                'id_reservation_vehicule_'=>$var['id_reservation_vehicule_'],
                'date_debut_vehicule'=>$var['date_debut_vehicule'],
                'date_fin_vehicule'=>$var['date_fin_vehicule'],
                'ceate_at_rv'=>$var['ceate_at_rv'],
                'update_at_rv'=>$var['update_at_rv'],
                'fk_utilisateur'=>$var['fk_utilisateur'],
                'fk_vehicule'=>$var['fk_vehicule'],
            ];
        }
    }

    return $tab;
}

?>

