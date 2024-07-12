
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
            $password = valid_donnees($_POST['password']); 
            $matricule = valid_donnees($_POST['matricule']);
            
            // if (empty($fullname) || !strlen($fullname) <= 20 ){
            //     echo "Pas de caracteres numeriques, pas plus de 20 caracteres";
            // }
                
            // if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            //     echo "Respectez le format(xyz@gmail.com)";
            // }
            // if {
            if(1)
            {
                require '../modele/create_admin.php';
                create_account();
            }
            // }
           
        }
        require_once './vue/signup_admin.php';  
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}
// echo 'aa';
compte();
