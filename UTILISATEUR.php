<?php
//inscription de l'utilisateur
function inscription($id , $name , $pass , $remb){
try{
    $database = new PDO('mysql:host=localhost;dbname=GESTION_IMMOBILIERS', 'root','');
    $sql=$database->prepare("INSERT INTO UTILISATEUR (id_user , name , password , remember_token) VALUES(? , ? , ? , ?)");
    $sql->execute(array($id , $name , $pass , $remb));

}
catch(Exception $e){
  die('rosine:)' .$e->getMessage());
}
}
inscription(2 ,"touye","22S73970" , "");


//modification de l'utilisateur
function modification( $x , $y , $z){
    try{
        $database = new PDO('mysql:host=localhost;dbname=GESTION_IMMOBILIERS' , 'root' , '');
        $sql=$database->prepare("UPDATE UTILISATEUR SET name=? , password = ?, remember_token=? WHERE id_user = 2");
        $sql->execute(array($x , $y, $z));
    }
    catch(Exception $e){
        die('rosine:)' .$e->getMessage());
      }
    }
      modification("mama" , "22S73985" , "");
      echo "merci";

    //connection
    function connection(){
        try{
        $database = new PDO('mysql:host=localhost;dbname=GESTION_IMMOBILIERS' , 'root' , '');
        }catch{
            die('rosine:)' .$e->getMessage());
        }
        $sql=$database->query("SELECT id_user FROM UTILISATEUR WHERE password = '22S73985' AND id_user='2'")
    }
    echo "connection reussi";
?>