<?php
    require_once('connection.php');
    $db = DB_Connection();

    $sql = "CREATE TABLE Files (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        description TEXT,
        authors VARCHAR(255),
        type ENUM('ebook', 'audio', 'image', 'video', 'memoire', 'handbook', 'periodic', 'monograph', 'scientific_article') NOT NULL,
        url VARCHAR(255) NOT NULL,
        language ENUM('french', 'english') NOT NULL,
        -- associated_sector ENUM('GC', 'GCP', 'GE', 'GIT', 'GME', 'GBH', 'GEn', 'PSA', 'MA', 'MBH'),
        -- categorie ENUM('Sciences et Technologies', 'Art', 'Lettres et Langues', 'Sciences Humaines et Sociales', 'Droit et Sciences Politiques', 'Economie et Gestion', 'Santé', 'Sport'),
        miniature VARCHAR(255) UNIQUE,
        path VARCHAR(255) NOT NULL UNIQUE,
        number_of_downloads INT(11) DEFAULT 0,
        number_of_likes INT(11) DEFAULT 0,
        proposed_by VARCHAR(255) NOT NULL,
        validated_by VARCHAR(255),
        status ENUM('available', 'unavailable') NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($db->query($sql)) {
        echo "Table Files created successfully";
    } else {
        echo "Error creating table: " . $db->error;
    }

    $db->close();