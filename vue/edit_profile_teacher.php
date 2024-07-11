<?php session_start();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="keywords" content="admin template, Mofi admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/icofont.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">
    
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
    
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    
    <style>
        /* Custom CSS for centering content and background image */
        .page-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-image: url('image/architecture-2559509_1280.jpg'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
        }
        
        .card {
            width: 40%; /* Adjust width as needed */
            background-color: rgba(255, 255, 255, 0.9); /* Adjust opacity and color as needed */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1); /* Optional: add box shadow for depth */
        }
        
        .card-title {
            text-align: center;
        }
        
        .form-control {
            background-color: rgba(255, 255, 255, 0.7); /* Adjust opacity and color as needed */
        }
        
        .card-footer {
            text-align: center;
        }
        .logo {
            position: absolute;
            top: 20px;
            left: 10px;
            height: 40px; /* Adjust height as needed */
            width: auto; /* Maintain aspect ratio */
        }
    </style>
    
    <title>Mon Profil</title>
</head>
<body>
    <div class="page-wrapper">
      <img src="image/logo_black.png" alt="Your Logo" class="logo">
        <form id="" action="" method="post" class="card">
            <div class="card-title mb-4">
                <h4>Mon profil</h4>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Nom complet</label>
                    <input class="form-control" type="text" value="<?php echo $_SESSION['fullname'];?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Matricule</label>
                    <input class="form-control" type="text" value="<?php echo $_SESSION['matricule'];?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Adresse e-mail</label>
                    <input class="form-control" type="email" value="<?php echo $_SESSION['email'];?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Numéro de téléphone</label>
                    <input class="form-control" type="text" value="<?php echo $_SESSION['mobile'];?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Spécialité</label>
                    <input class="form-control" type="text" value="<?php echo $_SESSION['specialite'];?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Grade</label>
                    <input class="form-control" type="text" value="<?php echo $_SESSION['grade'];?>">
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Modifier les données</button>
            </div>
        </form>
        
        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 footer-copyright d-flex flex-wrap align-items-center justify-content-between">
                        <p class="mb-0 f-w-600">Copyright 2024 © Digital Library  </p>
                        <p class="mb-0 f-w-600">AGBODJA Marzoukath & BATOKO Chahidath</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <!-- latest jquery-->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="assets/js/scrollbar/simplebar.js"></script>
    <script src="assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/sidebar-pin.js"></script>
    <script src="assets/js/slick/slick.min.js"></script>
    <script src="assets/js/slick/slick.js"></script>
    <script src="assets/js/header-slick.js"></script>
    <!-- calendar js-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
</body>
</html>
