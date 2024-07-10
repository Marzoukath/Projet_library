<?php
function getfich($uploadfile) {
    try 
    {
        require_once('connect.php');
        $db = dbConnect();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sth = $db->prepare("INSERT INTO Files (filiere, annee, semestre , matiere, fichier) VALUES(:fil, :an, :semest, :mati, :fich)");
        $sth->bindParam(':fil', $_POST['filiere']);
        $sth->bindParam(':an', $_POST['year']);
        $sth->bindParam(':semest', $_POST['semestre']);
        $sth->bindParam(':mati', $_POST['matiere']);
        $sth->bindParam(':fich', $uploadfile);
        $sth->execute();
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    // header('Location: ../vue/success.php');
    //exit; 
   
}
 