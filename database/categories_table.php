<?php
    require_once('connection.php');
    $db = DB_Connection();
    $sql = "CREATE TABLE Categories (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        file_id INT(11) UNSIGNED NOT NULL,
        associated_category ENUM('Sciences et Technologies', 'Art', 'Lettres et Langues', 'Sciences Humaines et Sociales', 'Droit et Sciences Politiques', 'Economie et Gestion', 'Santé', 'Sport'),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($db->query($sql)) {
        echo "Table Categories created successfully";
    } else {
        echo "Error creating table: " . $db->error;
    }

    $db->close();