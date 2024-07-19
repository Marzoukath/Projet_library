<?php
    
    $servername = "127.0.0.1"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "Digital_Library"; 
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error){ die("Connection failed: " . $conn->connect_error); }

    // Students
    $sql = "SELECT id, fullname, email, mobile, matricule, sector, newsletter, `created_at` AS cree, `updated_at` AS mise FROM Students";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        $students = [];
        while($row = $result->fetch_assoc()) { $students[] = $row; }
    } 
    else { $students = []; }

    // Teachers
    $sql = "SELECT id, fullname, email, mobile, matricule, speciality, grade, newsletter, `created_at` AS cree, `updated_at` AS mise FROM Teachers";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        $teachers = [];
        while($row = $result->fetch_assoc()) { $teachers[] = $row; }
    }
    else { $teachers = []; }

    // Admins
    $sql = "SELECT id, fullname, email, mobile, matricule, `created_at` AS cree, `updated_at` AS mise FROM Admins";
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

    // Requests
    $sql = "SELECT * FROM Requests";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        $requests = [];
        while($row = $result->fetch_assoc()) { $requests[] = $row; }
    }
    else { $requests = []; }

    $conn->close();

