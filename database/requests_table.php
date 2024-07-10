<?php

    function requests_table($db)
    {
        $sql = "CREATE TABLE Requests (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            description TEXT NOT NULL,
            asked_by VARCHAR(255) NOT NULL,
            processed_by VARCHAR(255),
            status ENUM('enregistrée', 'en cours', 'traitée') DEFAULT 'enregistrée',
            observation TEXT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        if ($db->query($sql)) {
            echo "Table Requests created successfully";
        } else {
            echo "Error creating table: " . $db->error;
        }
    }