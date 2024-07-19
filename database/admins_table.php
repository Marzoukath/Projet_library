<?php

    function admins_table($db)
    {
        $sql = "CREATE TABLE Admins (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            fullname VARCHAR(255) NOT NULL,
            email VARCHAR(100) NOT NULL UNIQUE,
            mobile VARCHAR(20) NOT NULL,
            password VARCHAR(255) NOT NULL,
            matricule VARCHAR(100) NOT NULL UNIQUE,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        if ($db->query($sql)) { echo "Table Admins created successfully"; } 
        else { echo "Error creating table: " . $db->error; }
    }