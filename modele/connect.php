<?php
function dbConnect() {
    try {
        $db = new PDO('mysql:host=127.0.0.1;dbname=Digital_Library;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        die('Erreur : '.$e->getMessage());
    }
}
?>
