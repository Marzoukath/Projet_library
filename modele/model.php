<?php
function getcompte() {
    try 
    {
        require_once('connect.php');
        print_r($_POST);
        $db = dbConnect();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sth = $db->prepare("INSERT INTO Utilisateurs (nom, email, phone, motdepasse, matricule) VALUES(:nm, :email, :phone, :mdp, :mat)");
        $sth->bindParam(':nm', $_POST['fullname']);
        $sth->bindParam(':email', $_POST['email']);
        $sth->bindParam(':phone', $_POST['mobile']);
        $sth->bindParam(':mdp', $_POST['password']);
        $sth->bindParam(':mat', $_POST['matricule']);
        $sth->execute();
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    $db = null;
    header('Location: ../vue/success.php');
    exit; 
   
}
