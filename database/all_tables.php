<?php
    require 'files_table.php';
    require 'sectors_table.php';
    require 'categories_table.php';

    require('connection.php');
    $db = DB_Connection();
    
    files_table($db);
    sectors_table($db);
    categories_table($db);

    $db->close();