<?php
session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "Digital_Library";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $matricule = $_POST['matricule'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $filiere = $_POST['filiere'];
    $studentId = $_SESSION['id'];
      echo $_SESSION['id'];
 
    if(empty($studentId)) {
        echo 'i';

        echo "Student ID is not set in the session.";
        die();
    }

    try {
        $sql = "UPDATE Students SET fullname = :fullname, matricule = :matricule, email = :email, mobile = :mobile, filiere = :filiere WHERE id = :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':matricule', $matricule);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mobile', $mobile);
        $stmt->bindParam(':filiere', $filiere);
        $stmt->bindParam(':id', $studentId);

        if($stmt->execute()) {
            $_SESSION['fullname'] = $fullname;
            $_SESSION['matricule'] = $matricule;
            $_SESSION['email'] = $email;
            $_SESSION['mobile'] = $mobile;
            $_SESSION['filiere'] = $filiere;
            header("Location: edit-profile.php?success=1");
        } else {
            echo "Failed to update the database.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    header("Location: edit-profile.php");
}
?>
