<?php

    function students_table($db)
    {
        $sql = "CREATE TABLE Students (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            fullname VARCHAR(255) NOT NULL,
            email VARCHAR(100) NOT NULL UNIQUE,
            mobile VARCHAR(20) NOT NULL,
            password VARCHAR(255) NOT NULL,
            matricule VARCHAR(100) NOT NULL UNIQUE,
            sector ENUM('GC','GCP','GE','GIT','GME','GBH','GEn','GIMR','PSA','MA','MBH') NOT NULL,
            status ENUM('actif','inactif') DEFAULT 'actif',
            newsletter TINYINT(1) NOT NULL DEFAULT 0,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        if ($db->query($sql)) { echo "Table Students created successfully"; }
        else { echo "Error creating table: " . $db->error; }
    }