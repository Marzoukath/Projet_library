<?php

    function years_table($db)
    {
        $sql = "CREATE TABLE Years (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            file_id INT(11) UNSIGNED NOT NULL,
            associated_year ENUM('1', '2', '3', '4', '5'),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        if ($db->query($sql)) {
            echo "Table Years created successfully";
        } else {
            echo "Error creating table: " . $db->error;
        }
    }