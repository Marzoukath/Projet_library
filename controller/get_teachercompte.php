<?php
function getcompte() {
    try 
    {
        require_once('connect.php');
        print_r($_POST);
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
        
        // JavaScript to show the popup message
        echo "<script type='text/javascript'>
                alert('Compte créé avec succès');
                window.location.href = '../vue/creer_compte.php';
              </script>";
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    $db = null;
}
?>
