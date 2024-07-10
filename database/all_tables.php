<?php
    require 'files_table.php';
    require 'sectors_table.php';
    require 'years_table.php';
    require 'semesters_table.php';
    require 'categories_table.php';
    require 'requests_table.php';

    require('connection.php');
    $db = DB_Connection();
    
    files_table($db);
    sectors_table($db);
    years_table($db);
    semesters_table($db);
    categories_table($db);
    requests_table($db);

    $db->close();