<?php session_start();?>
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
            margin: 30px; /* Déplace le texte */
            position: absolute; /* Positionne dans le coin supérieur gauche */
            top: 0;
            left: 0;
            font-style: italic; /* Applique le style italique */
            text-shadow: 2px 2px 4px #333;
        }

        .logo img {
            width: 150px; /* Ajuste la taille du logo */
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
            margin-top: 0;,
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
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background: #f8f8f8;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            z-index: 1000;
        }
        .popup.show {
            display: block;
        }
        .popup.success {
            border-color: #4caf50;
            color: #4caf50;
        }
        .popup.error {
            border-color: #f44336;
            color: #f44336;
        }
    </style>
</head>
<body>
    <?php
    // require_once('./controller/get_compte.php')
    ?>
    <?php if (isset($_SESSION['success_message'])) {
    echo "<div class='popup show' id='successPopup'>{$_SESSION['success_message']}</div>";
    unset($_SESSION['success_message']);
} elseif (isset($_SESSION['error_message'])) {
    echo "<div class='popup show' id='errorPopup'>{$_SESSION['error_message']}</div>";
    unset($_SESSION['error_message']);
}
?>
    
    <form id="signup-form" action="../controller/admin_account.php" method="post">
        <div class="logo">
            <img src="image/logo_white-removebg-preview.png" alt="">
        </div> 

        <div class="main-container">
            <!-- Start Main Forms -->
            <div class="signup-form">
                <div class="sign-back">
                    <h1>Incrivez-vous</h1>
                    <div class="signup-row">
                        <i class="fa fa-user"></i>
                        <input type="text" name="fullname" placeholder="FULL NAME" required pattern ="^[A-Za-z '-]+$" maxlength = "20">
                        

                    </div>
                    <div class="signup-row">
                        <i class="fa fa-envelope-o"></i>
                        <input type="email" name="email" placeholder="EMAIL"  required >
                    </div>
                    <div class="signup-row">
                        <i class="fa fa-phone"></i>
                        <input type="text" name="mobile" placeholder="MOBILE" required >
                        
                    </div>
                    <div class="signup-row">
                        <i class="fa fa-key"></i>
                        <input type="password" name="password" placeholder="PASSWORD" required>
                    </div>
                    <div class="signup-row">
                        <i class="fa fa-user"></i>
                        <input type="text" name="matricule" placeholder="MATRICULE" required>
                    </div>
                    <div class="signup-row" >
                        <button type='submit'>
                            <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                        </button>
                        <!-- <input;O type="submit" value="Enregistrer"> -->
                    </div>
                    <div class="form-bottom">
                        <div class="remember">
                            <input type="checkbox" name="remember">
                            <span>Remember</span>
                        </div>
                        <div class="remember">
                            <a href="log_in.php">Avez vous déjà un compte ?</a>
                        </div>
                    </div>
                    <input type="hidden" name="submit" value="true">
                </div>
            </div>
            <!-- End Main Forms -->
        </div>
        <!-- End Main Container -->
    </form>
    <script>
    setTimeout(function() {
        var popup = document.getElementById('successPopup');
        if (popup) {
            popup.classList.remove('show');
        }
        var errorPopup = document.getElementById('errorPopup');
        if (errorPopup) {
            errorPopup.classList.remove('show');
        }
    }, 3000);
   </script>
    
    
    <!-- Start Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://use.fontawesome.com/7dddae9ad9.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
    <!-- End Scripts -->
</body>
</html>
