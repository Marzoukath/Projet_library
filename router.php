<?php

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'compte') {
        require './controller/get_compte.php';
        compte();
    }
    elseif ($_GET['action'] == 'ajout') {
        require './controller/get_fich.php';
        ajout();
     
        }elseif ($_GET['action'] =='sucess') {
            require './vue/ajout_fichier.php';
            
         
            }
    }
