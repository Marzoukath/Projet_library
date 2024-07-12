<?php

    function teachers_table($db)
    {
        $sql = "CREATE TABLE Teachers (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            fullname VARCHAR(255) NOT NULL,
            email VARCHAR(100) NOT NULL UNIQUE,
            mobile VARCHAR(20) NOT NULL,
            password VARCHAR(255) NOT NULL,
            matricule VARCHAR(100) NOT NULL UNIQUE,
            speciality VARCHAR(255) NOT NULL,
            domain ENUM('Sciences et Technologies','Art','Lettres et Langues','Sciences Humaines et Sociales','Droits et Sciences Politiques','Economie et Gestion','Santé','Sport') NOT NULL,
            grade VARCHAR(100) NOT NULL,
            newsletter TINYINT(1) NOT NULL DEFAULT 0,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        if ($db->query($sql)) { echo "Table Teachers created successfully"; }
        else { echo "Error creating table: " . $db->error; }
    }