<?php
function create_account() {
    try 
    {
        require_once('db_connection.php');
        print_r($_POST);
        $db = dbConnect();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sth = $db->prepare("INSERT INTO Teacher (fullname, email, mobile, password, matricule, specialite, grade, created_at) VALUES(:nm, :email, :phone, :mdp, :mat, :spe, :grad, :created_at)");
        $sth->bindParam(':nm', $_POST['fullname']);
        $sth->bindParam(':email', $_POST['email']);
        $sth->bindParam(':phone', $_POST['mobile']);
        $sth->bindParam(':mdp', $_POST['password']);
        $sth->bindParam(':mat', $_POST['matricule']);
        $sth->bindParam(':spe', $_POST['specialite']);
        $sth->bindParam(':grad', $_POST['grade']);
        $currentDateTime = date('Y-m-d H:i:s');
        $sth->bindParam(':created_at', $currentDateTime);
        
        $sth->execute();
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    $db = null;
    header('Location: ../vue/success.php');
    exit; 
   
}
