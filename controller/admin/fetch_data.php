<?php
    
    $servername = "127.0.0.1"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "Digital_Library"; 
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error){ die("Connection failed: " . $conn->connect_error); }

    // Students
    $sql = "SELECT fullname, email, mobile, matricule, filiere, newsletter, `created_at` AS cree, `updated_at` AS mise FROM Students";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        $students = [];
        while($row = $result->fetch_assoc()) { $students[] = $row; }
    } 
    else { $students = []; }

    // Teachers
    $sql = "SELECT fullname, email, mobile, matricule, specialite, grade, newsletter, `created_at` AS cree, `updated_at` AS mise FROM Teacher";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        $teachers = [];
        while($row = $result->fetch_assoc()) { $teachers[] = $row; }
    }
    else { $teachers = []; }

    // Admins
    $sql = "SELECT fullname, email, mobile, matricule, `created_at` AS cree, `updated_at` AS mise FROM Admin";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        $admins = [];
        while($row = $result->fetch_assoc()) { $admins[] = $row; }
    }
    else { $admins = []; }

    // Files

    $sql = "SELECT * FROM Files";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        $files = [];
        while($row = $result->fetch_assoc()) { $files[] = $row; }
    }
    else { $files = []; }

    $conn->close();

