<?php
function ajout() 
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
            $filiere = valid_donnees($_POST['filiere']);
            $year = valid_donnees($_POST['year']);
            $semestre = valid_donnees($_POST['semestre']); 
            $matiere= valid_donnees($_POST['matiere']); 
            $file = $_FILES['file'];
            if (!empty($_FILES["file"])) {
                $infos = $_FILES["file"];
                $nom = time() . ".pdf";
                $type = $infos['type'];
                $taille = $infos['size'];
                $fichier_temporaire = $infos['tmp_name'];
                $code_error = $infos['error'];
                switch ($code_error) {
                    case UPLOAD_ERR_OK:
                        //Fichier bien reçu      Déterminer sa destination finale 
                        $destination = dirname(__DIR__). DIRECTORY_SEPARATOR . "storage" . DIRECTORY_SEPARATOR . $nom;
                        //copier le fichier temporaire 
                        if (copy($fichier_temporaire, $destination)) {
                            require './modele/ajout_connec.php';
                            getfich($nom);
                        }
                        break;
                    default:
                }
            }
            header("location: http://localhost/projet_edl/router.php?action=sucess");
        }else{
            require'./vue/ajout_fichier.php'; 
        }
        
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}

