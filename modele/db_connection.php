<?php
function dbConnect() {
    try {
        $db = new PDO('mysql:host=127.0.0.1;dbname=Digital_Library;charset=utf8', 'root', '');
<<<<<<< HEAD:modele/connect.php
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
=======
>>>>>>> 15df83840343c9bd717a0fd2fc8ad592c5a8a129:modele/db_connection.php
        return $db;
    } catch (PDOException $e) {
        die('Erreur : '.$e->getMessage());
    }
}
?>
