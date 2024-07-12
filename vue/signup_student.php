<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Signup</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            font-family: 'Ubuntu', sans-serif;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("image/library-5641389_1280.jpg") no-repeat center center fixed;
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

        .signup-row input, .signup-row select {
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

        .signup-row select {
            width: 52%;
            background: #fff;
            color: #000;
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
            border:none;
            outline:0;
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

        .remember a {
            text-decoration: none;
            color: #af942d;
            transition: all 500ms;
        }

        .remember a:hover {
            text-decoration: none;
            color: #fff;
        }

        input[type="checkbox"] {
            position: relative;
            top: 1px;
            transition: all 500ms;
        }
    </style>
</head>
<body>
    <form id="signup-form" action="../controller/student_account.php" method="post">
        <div class="logo">
            <img src="image/logo_white-removebg-preview.png" alt="Library Logo">
        </div> 

        <div class="main-container">
            <div class="signup-form">
                <div class="sign-back">
                    <h1>Incrivez-vous</h1>
                    <div class="signup-row">
                        <i class="fa fa-user"></i>
                        <input type="text" name="fullname" placeholder="NOM COMPLET" required pattern="^[A-Za-z '-]+$" maxlength="20">
                    </div>
                    <div class="signup-row">
                        <i class="fa fa-envelope-o"></i>
                        <input type="email" name="email" placeholder="EMAIL" required>
                    </div>
                    <div class="signup-row">
                        <i class="fa fa-phone"></i>
                        <input type="text" name="mobile" placeholder="MOBILE" required>
                    </div>
                    <div class="signup-row">
                        <i class="fa fa-key"></i>
                        <input type="password" name="password" placeholder="MOT DE PASSE" required>
                    </div>
                    <div class="signup-row">
                        <i class="fa fa-user"></i>
                        <input type="text" name="matricule" placeholder="MATRICULE" required>
                    </div>
                    <div class="signup-row">
                        <i class="fa fa-graduation-cap"></i>
                        <select name="filiere" required>
                            <option value="">Sélectionner une filière</option>
                            <option value="GC">Génie Civil</option>
                            <option value="GCP">Génie Chimique-Procédés</option>
                            <option value="GE">Génie Electrique</option>
                            <option value="GIT">Génie Informatique et Télécommunications</option>
                            <option value="GME">Génie Mécanique et Energétique</option>
                            <option value="GBH">Génie de Biologie Humaine</option>
                            <option value="GEn">Génie de l'Environnement</option>
                            <option value="GIMR">Génie d'Imagerie Médicale et de Radiologie</option>
                            <option value="PSA">Production et Santé Animale</option>
                            <option value="MA">Machinisme Agricole</option>
                            <option value="MBH">Maintenance Biomédicale et Hospitalière</option>
                        </select>
                    </div>
                    <div class="signup-row">
                        <button type="submit">
                            <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="form-bottom">
                        <div class="remember">
                            <input type="checkbox" name="remember">
                            <span>Se rappeler</span>
                        </div>
                        <div class="remember">
                            <a href="log_in.php">Vous avez déjà un compte?</a>
                        </div>
                    </div>
                    <input type="hidden" name="submit" value="true">
                </div>
            </div>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://use.fontawesome.com/7dddae9ad9.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
</body>
</html>
