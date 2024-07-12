<?php
    require 'files_table.php';
    require 'sectors_table.php';
    require 'years_table.php';
    require 'semesters_table.php';
    require 'categories_table.php';
    require 'requests_table.php';
    require 'favorites_table.php';
    require 'admins_table.php';
    require 'teachers_table.php';
    require 'students_table.php';

    require('connection.php');
    $db = DB_Connection();
    
    files_table($db);
    sectors_table($db);
    years_table($db);
    semesters_table($db);
    categories_table($db);
    requests_table($db);
    favorites_table($db);
    admins_table($db);
    teachers_table($db);
    students_table($db);

    $db->close();