<?php

    function semesters_table($db)
    {
        $sql = "CREATE TABLE Semesters (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            file_id INT(11) UNSIGNED NOT NULL,
            associated_semester ENUM('1', '2', '3', '4', '5', '6', '7', '8', '9', '10'),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        if ($db->query($sql)) {
            echo "Table Semesters created successfully";
        } else {
            echo "Error creating table: " . $db->error;
        }
    }