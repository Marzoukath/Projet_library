
<?php

function compte() 
{
    try
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            function valid_donnees($donnees)
            {
                $donnees = trim($donnees);
                $donnees = stripslashes($donnees);
                $donnees = htmlspecialchars($donnees);
                return $donnees;
            }
            $fullname = valid_donnees($_POST['fullname']);
            $email = valid_donnees($_POST['email']);
            $mobile = valid_donnees($_POST['mobile']); 
            $matricule = valid_donnees($_POST['matricule']);
            $filiere = valid_donnees($_POST['filiere']);
            $_POST['password'] = $_POST['email']; // password = email as default
            require '../../modele/create_student.php';
            create_account();
        }
        require_once './vue/signup_admin.php';  
    }
    catch(Exception $e) { die('Erreur : '.$e->getMessage()); }
}
compte();
