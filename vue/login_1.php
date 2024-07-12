<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "Digital_Library";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $matricule = mysqli_real_escape_string($conn, $_POST['matricule']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);


        $sql = "SELECT * FROM Teachers WHERE matricule = ? AND password = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ss", $matricule, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION['fullname'] = $row['fullname'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['matricule'] = $matricule;
                $_SESSION['mobile'] = $row['mobile'];
                $_SESSION['specialite'] = $row['specialite'];
                $_SESSION['grade'] = $row['grade'];
                $_SESSION['newsletter'] = $row['newsletter'];
                $_SESSION['created_at'] = $row['created_at'];
                $_SESSION['id'] = $row['id'];
                print_r($_SESSION);
                header("Location: ./users/upload_file.php");
                exit();
            } else {
                $sql = "SELECT * FROM Students WHERE matricule = ? AND password = ?";
                $stmt = $conn->prepare($sql);

                if ($stmt) {
                    $stmt->bind_param("ss", $matricule, $password);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $_SESSION['fullname'] = $row['fullname'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['matricule'] = $matricule;
                        $_SESSION['mobile'] = $row['mobile'];
                        $_SESSION['sector'] = $row['sector'];
                        $_SESSION['id'] = $row['id'];

                        header("Location:  ./users/upload_file.php");
                        exit();
                    }
                        else {
                        echo '<div class="error-message">Créer un compte, le compte n\'existe pas</div>';
                    }
                } else {
                    echo "Erreur de préparation de la requête SQL : " . $conn->error;
                }
            }

            $sql = "SELECT * FROM Admins WHERE matricule = ? AND password = ?";
            $stmt = $conn->prepare($sql);

            if ($stmt) {
                $stmt->bind_param("ss", $matricule, $password);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $_SESSION['fullname'] = $row['fullname'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['matricule'] = $matricule;
                    $_SESSION['mobile'] = $row['mobile'];
                    $_SESSION['id'] = $row['id'];
                    
                    header("Location: ./admin/upload_file.php");
                    exit();
                }
                    else {
                    echo '<div class="error-message">Créer un compte, le compte n\'existe pas</div>';
                }
            } else {
                echo "Erreur de préparation de la requête SQL : " . $conn->error;
            }

            $stmt->close();
        } else {
            echo "Erreur de préparation de la requête SQL : " . $conn->error;
        }
        $conn->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            font-family: 'Ubuntu', sans-serif;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("./image/library-5641389_1280.jpg") no-repeat center center fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .main-container {
            width: 500px;
            margin: 0 auto;
            text-align: center;
        }

        .logo {
            font-size: 48px;
            font-weight: bold;
            color: #F22613;
            margin: 30px;
            position: absolute;
            top: 0;
            left: 0;
            font-style: italic;
            text-shadow: 2px 2px 4px #333;
        }

        .logo img {
            width: 150px;
        }

        .signup-form {
            background: linear-gradient(rgba(0, 255, 242, 0.4), #647699 60%);
            border-radius: 10px;
            padding: 65px 0;
        }

        .sign-back h1 {
            text-transform: uppercase;
            text-align: center;
            color: #000;
            margin-top: 0;
            letter-spacing: 5px;
            text-shadow: 1px 1px 1px #333;
        }

        .signup-row {
            text-align: center;
            margin: 20px 0;
            position: relative;
        }

        .signup-row input {
            padding: 5px 0;
            border: 0;
            border-bottom: 1px solid #000;
            background: transparent;
            width: 50%;
            text-align: center;
            outline: none;
            color: #000;
            font-family: 'Ubuntu', sans-serif;
            font-weight: bold;
        }

        .signup-row input::-webkit-input-placeholder {
            color: #fff;
            text-shadow: 1px 1px 1px rgba(51, 51, 51, 0.6);
        }

        .signup-row i {
            color: #fff;
            position: relative;
            left: 20px;
            text-shadow: 1px 1px 1px rgba(51, 51, 51, 0.6);
        }

        .signup-row button {
            font-size: 40px;
            text-decoration: none;
            background-color: transparent;
            border: none;
            outline: 0;
        }

        .signup-row button i {
            left: 0;
        }

        .form-bottom {
            display: flex;
            justify-content: center;
        }

        .remember:not(:last-child) {
            margin-right: 30px;
            color: #af942d;
        }

        .remember:not(:last-child):hover {
            margin-right: 30px;
            color: #fff;
            transition: all 500ms;
        }

        .remember button {
            text-decoration: none;
            color: #af942d;
            transition: all 500ms;
        }

        .remember button:hover {
            text-decoration: none;
            color: #fff;
        }

        input[type="checkbox"] {
            position: relative;
            top: 1px;
            transition: all 500ms;
        }

        .error-message {
            color: red;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="logo">
        <img src="image/logo_white-removebg-preview.png" alt="Logo">
    </div>
    <div class="main-container">
        <div class="signup-form">
            <form class="sign-back" action="" method="post">
                <h1>Se connecter</h1>
                <div class="signup-row">
                    <i class="fa fa-user"></i>
                    <input type="text" name="matricule" value="" placeholder="MATRICULE" required>
                </div>
                <div class="signup-row">
                    <i class="fa fa-key"></i>
                    <input type="password" name="password" value="" placeholder="MOT DE PASSE" required>
                </div>
                <div class="signup-row">
                    <button type="submit">
                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="form-bottom">
                    <div class="remember">
                        <input type="checkbox" name="remember" value="">
                        <span>Remember</span>
                    </div>
                    <div class="remember">
                        <a href="select_typeusers.php">Vous n'avez pas un compte ?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://use.fontawesome
