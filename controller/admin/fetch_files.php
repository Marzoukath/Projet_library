<?php

function fetch_files()
{
    $db = new PDO('mysql:host=127.0.0.1;dbname=Digital_Library;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // print_r($db);
    $stmt = $db->prepare("SELECT * FROM Files");
    $stmt->execute();
    $files = $stmt->fetchAll();
    return $files;
    // print_r($files);
    $db->close();
    exit;
}

