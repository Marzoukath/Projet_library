<?php
<<<<<<< HEAD
session_start();

function getcompte() {
    try 
    {
        require_once('connect.php');
=======
function create_account() {
    try 
    {
        require_once('db_connection.php');
        print_r($_POST);
>>>>>>> 15df83840343c9bd717a0fd2fc8ad592c5a8a129
        $db = dbConnect();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sth = $db->prepare("INSERT INTO Admin (fullname, email, mobile, password, matricule, created_at) VALUES(:nm, :email, :phone, :mdp, :mat, :created_at)");
        $sth->bindParam(':nm', $_POST['fullname']);
        $sth->bindParam(':email', $_POST['email']);
        $sth->bindParam(':phone', $_POST['mobile']);
        $sth->bindParam(':mdp', $_POST['password']);
        $sth->bindParam(':mat', $_POST['matricule']);
        $currentDateTime = date('Y-m-d H:i:s');
        $sth->bindParam(':created_at', $currentDateTime);
        
        $sth->execute();
        
        $_SESSION['success_message'] = "Compte créé avec succès";
    }
    catch(Exception $e) {
        $_SESSION['error_message'] = 'Erreur : ' . $e->getMessage();
    }
    $db = null;
    header('Location: ../vue/creer_compte.php');
    exit; 
}
?>
