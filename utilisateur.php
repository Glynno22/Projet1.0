
<?php

    include 'connection.php';

    session_start();

    $_SESSION['id_u'];
    $_SESSION['nam'];
    $_SESSION['email'];
    $_SESSION['passwd'];




    //INSCRIPTION D'UN UTILISATEUR
    function ajout_utilisateur($nam, $email, $passwd):bool{
        
        $connect = connection();

        $ach = sha1($passwd);

        if($connect != "null"){
            $sql = "INSERT INTO utilisateur(nam,email,passwd, create_at) VALUES(:nam,:email,:passwd, now())";
            $nv = $connect->prepare($sql);
            $nv->bindParam(':nam', $nam);
            $nv->bindParam(':email',$email);
            $nv->bindParam(':passwd',$ach);
            $nv->execute();

            return true;
        }

        return false;
    }




    //CONNEXION D'UN UTLISATEUR
    function connextion_utilisateur($email , $passwd){

        $ach = sha1($passwd);

        $connect = connection();

        if($connect != "null"){

            $sql="SELECT * FROM utilisateur WHERE email=:email and passwd=:passwd";
            $nv = $connect->prepare($sql);

            $nv->execute(array(
                'email'=> $email,
                'passwd'=> $ach
            ));

            $tab = $nv->fetch();

        return $tab;
            
        }
    }





    $donnee = connextion_utilisateur("claraa","claraa");

    if(count($donnee)!=0){

        $_SESSION['id_u']=$donne['id_utilisateur'];
        $_SESSION['nam']=$donne['nam'];
        $_SESSION['email']=$donne['email'];
        $_SESSION['passwd']=$donne['passwd'];

    };
    

    $_SESSION['nam']="amanda";
    $_SESSION['email']="clara";
    $_SESSION['passwd']="ooo";






   //  MODIFICATION D'UN UTILISATEUR
    function modification_utilisateur($id){

        $a = $_SESSION['nam'];
        $b = $_SESSION['email'];
        $c = $_SESSION['passwd'];

        // print_r($_SESSION);

        $connect =  new PDO('mysql:host=localhost;dbname=GIMMOBILIER','root','');
            
        if($connect != "null"){
            $sql = "UPDATE utilisateur SET nam=:nam , email=:email  WHERE id_utilisateur=:id";       
            $nv = $connect->prepare($sql);
            var_dump($nv);
            $nv->bindValue(':nam' , $a);
            $nv->bindValue(':email' , $b);
            $nv->bindValue(':passwd' , $c);
            $nv->bindValue(':id' , $id , PDO::PARAM_INT);
            // var_dump($nv);
            $nv->execute();
            echo "bonjour";
            

        }


    }



    //SUPRESSION D'UN UTILISATEUR
    function supression_utilisateur($email , $passwd){
    
        $connect = connection();

        if($connect != "null"){
            $sql = "UPDATE utilisateur SET rmv=0 where email=:email and passwd=:pass";
            $nv = $connect->prepare($sql);
            $nv->execute(array(
                'email' => $email,
                'pass' => $passwd
            )
            );
            return true;
        }

        return false;
    
    }







    // AFFICHAGE DE TOUT LES UTILISATEURS QUI N'ONT PAS ETE SUPRIMER
    function affichage_utilisateur(){
        $tab =[];

        $connect = connection();
        
        if($connect !== null){

            $sql = "SELECT * FROM utilisateur WHERE rmv=1 ";
            $nv = $connect->query($sql);

            while ($var=$nv->fetch()) {
                $tab[]=[
                    'id_utilisateur'=>$var['id_utilisateur'],
                    'name'=>$var['nam'],
                    'email'=>$var['email'],
                    'passwd'=>$var['passwd'],
                    'ceate_at'=>$var['ceate_at'],
                    'update_at'=>$var['update_at'],

                ];
            }
        }
    
        return $tab;
    }




    // AFFICHAGE DE TOUT LES UTILISATEURS y compris ceux qui n'ont PAS ETE SUPRIMER
    function affichage_tout_les_utilisateur(){
        $tab =[];

        $connect = connection();
        
        if($connect !== null){

            $sql = "SELECT * FROM utilisateur";
            $nv = $connect->query($sql);

            while ($var=$nv->fetch()) {
                $tab[]=[
                    'id_utilisateur'=>$var['id_utilisateur'],
                    'name'=>$var['nam'],
                    'email'=>$var['email'],
                    'passwd'=>$var['passwd'],
                    'ceate_at'=>$var['ceate_at'],
                    'update_at'=>$var['update_at'],

                ];
            }
        }
    
        return $tab;
    }

?>



