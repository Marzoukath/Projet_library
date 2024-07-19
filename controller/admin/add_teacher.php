
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
            $specialite = valid_donnees($_POST['specialite']);
            $domain = valid_donnees($_POST['domain']);
            $grade = valid_donnees($_POST['grade']);
            $_POST['password'] = $_POST['email']; // password = email as default
            require '../../modele/create_teacher.php';
            create_account();
        }
        require_once './vue/signup_admin.php';  
    }
    catch(Exception $e) { die('Erreur : '.$e->getMessage()); }
}

compte();
