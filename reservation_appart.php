<?php


include 'connection.php';


//INSERTION D'UNE RESERVATION D'APPARTEMENT
    function insert_reservation($debut , $fin , $id_apartement , $id_utilisateur){

        $connect = connection();

        if($connect != null){
            $sql = "INSERT INTO reservation_appart(date_debut_a, date_fin_a, fk_apartement, fk_utili, create_at_reserv) 
            VALUES (:debut, :fin, :apart, :utili, now())";

            $val=$connect->prepare($sql);
            $val->bindParam(':debut',$debut);
            $val->bindParam(':fin',$fin);
            $val->bindParam(':apart',$id_apartement);
            $val->bindParam(':utili',$id_utilisateur);
            $val->execute();

            return true;
        }

        return false;
    }






//SUPRESSION D'UNE RESERVATION
    function supression_reservation_apart($id){
        
        $connect = connection();

        if($connect != null){
            $reques = $connect->prepare("UPDATE reservation_appart SET rmv_reservation_a=0 where id_reservation_appart=:id");
            $reques->execute(array(
                'id' => $id
            ));
            
            return true;
        }

        return false;
    }









//AFFICHAGE DES DONNEES
function affichage_reservatin_appart(){
    $tab =[];

    $connect = connection();
    
    if($connect !== null){
        $sql = "SELECT * FROM reservation_appart WHERE rmv_reservation_a=1 ";
        $nv = $connect->query($sql);
        while ($var=$nv->fetch()) {
            $tab[]=[
                'id_reservation_appart'=>$var['id_reservation_appart'],
                'date_debut_a'=>$var['date_debut_a'],
                'date_fin_a'=>$var['date_fin_a'],
                'ceate_at_reserv'=>$var['ceate_at_reserv'],
                'update_at_reserv'=>$var['update_at_reserv'],
                'fk_apartement'=>$var['fk_apartement'],
                'fk_utili'=>$var['fk_utili'],
            ];
        }
    }

    return $tab;
    
}

?>