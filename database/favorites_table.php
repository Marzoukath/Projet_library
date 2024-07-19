<?php

    function favorites_table($db)
    {
        $sql = "CREATE TABLE Favorites (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            user_matricule VARCHAR(255) NOT NULL,
            file_id VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        if ($db->query($sql)) {
            echo "Table Favorites created successfully";
        } else {
            echo "Error creating table: " . $db->error;
        }
    }