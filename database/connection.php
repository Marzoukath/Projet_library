<?php
function DB_Connection() {
    try {
        $db = new PDO('mysql:host=127.0.0.1;dbname=Digital_Library;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}

// associated_field ENUM('GC', 'GCP', 'GE', 'GIT', 'GME', 'GBH', 'GEn', 'PSA', 'MA', 'MBH'),
//         categories ENUM('Sciences et Technologies', 'Art', 'Lettres et Langues', 'Sciences Humaines et Sociales', 'Droit et Sciences Politiques', 'Economie et Gestion', 'Santé', 'Sport'),
        