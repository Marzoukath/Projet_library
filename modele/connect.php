<?php
function dbConnect() {
    try {
        $db = new PDO('mysql:host=127.0.0.1;dbname=digit_lib;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}