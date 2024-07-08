<?php
    require_once('connection.php');
    $db = DB_Connection();
    $sql = "CREATE TABLE Sectors (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        file_id INT(11) UNSIGNED NOT NULL,
        associated_sector ENUM('GC', 'GCP', 'GE', 'GIT', 'GME', 'GBH', 'GEn', 'PSA', 'MA', 'MBH'),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($db->query($sql)) {
        echo "Table Sectors created successfully";
    } else {
        echo "Error creating table: " . $db->error;
    }

    $db->close();