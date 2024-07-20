<?php
  include('../../controller/admin/fetch_data.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mofi admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Mofi admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/logo/icon_dl.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/logo/icon_dl.png" type="image/x-icon">
    <title>Dashboard - Liste des utilisateurs</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    <style>
        .form-signup{
            font-family: 'Ubuntu', sans-serif;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../assets/images/library-5641389_1280.jpg") no-repeat center center fixed;
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

        .signup-row input::-webkit-input-placeholder, .signup-row select {
            color: #000;
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
    </style>
  </head>
  <body>
    <div class="loader-wrapper"> 
      <div class="loader loader-1">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
        <div class="loader-inner-1"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper default-wrapper" id="pageWrapper">
      <div class="page-header row">
        <div class="header-logo-wrapper col-auto">
          <div class="logo-wrapper"><a href="../page_accueil.html"><img class="img-fluid for-light" src="../assets/images/logo/logo_dl.png" alt=""/><img class="img-fluid for-dark" src="../assets/images/logo/logo_dl.png" alt=""/></a></div>
        </div>
        <div class="col-4 col-xl-4 page-title">
          <h4 class="f-w-700">Gestion des utilisateurs</h4>
          <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
              <li class="breadcrumb-item"><a href="../page_accueil.html"> <i data-feather="home"> </i></a></li>
              <li class="breadcrumb-item f-w-400">Dashboard</li>
              <li class="breadcrumb-item f-w-400 active">Gestion des utilisateurs</li>
            </ol>
          </nav>
        </div>
        <!-- Page Header Start-->
        <div class="header-wrapper col m-0">
          <div class="row">
            <form class="form-inline search-full col" action="#" method="get">
              <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                  <div class="Typeahead-menu"></div>
                </div>
              </div>
            </form>
            <div class="header-logo-wrapper col-auto p-0">
              <div class="logo-wrapper"><a href="../page_accueil.html"><img class="img-fluid" src="../assets/images/logo/logo_dl.png" alt=""></a></div>
            </div>

            <?php include('profile.php');?>

        </div>
        </div>
        <!-- Page Header Ends -->
      </div>
      <!-- Page Body Start-->
      <div class="page-body-wrapper default-menu default-menu">
        
        <?php include('sidebar_menu.php');?>

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 col-xl-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Ajout d'utilisateurs</h4>
                    <p class="mt-1 f-m-light">Ajout d'utilisateurs selon le type.</p>
                  </div>
                  <div class="card-body">
                    <ul class="simple-wrapper nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item"><a class="nav-link txt-primary active" id="students-tab" data-bs-toggle="tab" href="#students" role="tab" aria-controls="students" aria-selected="false">Etudiants</a></li>
                      <li class="nav-item"><a class="nav-link txt-primary" id="lecturers-tabs" data-bs-toggle="tab" href="#lecturers" role="tab" aria-controls="lecturers" aria-selected="false">Enseignants</a></li>
                      <li class="nav-item"><a class="nav-link txt-primary" id="admins-tab" data-bs-toggle="tab" href="#admins" role="tab" aria-controls="admins" aria-selected="true">Administrateurs</a></li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade form-signup show active" id="students" role="tabpanel" aria-labelledby="students-tab">
                            <div class="pt-3">
                                <div class="table-responsive theme-scrollbar">
                                    <form action="../../controller/admin/add_student.php" method="post">
                                        <div class="main-container">
                                            <!-- Start Main Forms -->
                                            <div class="signup-form">
                                                <div class="sign-back">
                                                    <div class="signup-row">
                                                        <i class="fa fa-user"></i>
                                                        <input type="text" name="fullname" placeholder="NOM COMPLET" required pattern ="^[A-Za-z '-]+$" maxlength = "20">
                                                    </div>
                                                    <div class="signup-row">
                                                        <i class="fa fa-envelope-o"></i>
                                                        <input type="email" name="email" placeholder="EMAIL"  required >
                                                    </div>
                                                    <div class="signup-row">
                                                        <i class="fa fa-phone"></i>
                                                        <input type="text" name="mobile" placeholder="MOBILE" required >
                                                    </div>
                                                    <!-- <div class="signup-row">
                                                        <i class="fa fa-key"></i>
                                                        <input type="password" name="password" placeholder="MOT DE PASSE" required>
                                                    </div> -->
                                                    <div class="signup-row">
                                                        <i class="fa fa-id-card"></i>
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
                                                    <div class="signup-row" >
                                                        <button type='submit'>
                                                            <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <input type="hidden" name="submit" value="true">
                                                </div>
                                            </div>
                                            <!-- End Main Forms -->
                                        </div>
                                        <!-- End Main Container -->
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade form-signup" id="lecturers" role="tabpanel" aria-labelledby="lecturers-tabs">
                            <div class="pt-3 mb-0">
                                <div class="table-responsive theme-scrollbar">
                                    <form id="signup-form" action="../../controller/admin/add_teacher.php" method="post">
                                        <div class="logo">
                                            <img src="image/logo_white-removebg-preview.png" alt="">
                                        </div> 

                                        <div class="main-container">
                                            <!-- Start Main Forms -->
                                            <div class="signup-form">
                                                <div class="sign-back">
                                                    <div class="signup-row">
                                                        <i class="fa fa-user"></i>
                                                        <input type="text" name="fullname" placeholder="NOM COMPLET" required pattern ="^[A-Za-z '-]+$" maxlength = "20">
                                                    </div>
                                                    <div class="signup-row">
                                                        <i class="fa fa-envelope-o"></i>
                                                        <input type="email" name="email" placeholder="EMAIL"  required >
                                                    </div>
                                                    <div class="signup-row">
                                                        <i class="fa fa-phone"></i>
                                                        <input type="text" name="mobile" placeholder="MOBILE" required >
                                                    </div>
                                                    <!-- <div class="signup-row">
                                                        <i class="fa fa-key"></i>
                                                        <input type="password" name="password" placeholder="MOT DE PASSE" required>
                                                    </div> -->
                                                    <div class="signup-row">
                                                        <i class="fa fa-id-card"></i>
                                                        <input type="text" name="matricule" placeholder="MATRICULE" required>
                                                    </div>
                                                    <div class="signup-row">
                                                        <i class="fa fa-graduation-cap"></i>
                                                        <input type="text" name="grade" placeholder="GRADE" required>
                                                    </div>
                                                    <div class="signup-row">
                                                      <i class="fa fa-cube"></i>
                                                      <select name="domain" required>
                                                          <option value="" disabled selected>DOMAINE</option>
                                                          <option value="Sciences et Technologies">Sciences et Technologies</option>
                                                          <option value="Art">Art</option>
                                                          <option value="Lettres et Langues">Lettres et Langues</option>
                                                          <option value="Sciences Humaines et Sociales">Sciences Humaines et Sociales</option>
                                                          <option value="Droits et Sciences Politiques">Droits et Sciences Politiques</option>
                                                          <option value="Economie et Gestion">Economie et Gestion</option>
                                                          <option value="Santé">Santé</option>
                                                          <option value="Sport">Sport</option>
                                                      </select>
                                                    </div>
                                                    <div class="signup-row">
                                                        <i class="fa fa-book"></i>
                                                        <input type="text" name="specialite" placeholder="SPECIALITE" required>
                                                    </div>
                                                    <div class="signup-row" >
                                                        <button type='submit'>
                                                            <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <input type="hidden" name="submit" value="true">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="admins" role="tabpanel" aria-labelledby="admins-tab">
                            <div class="pt-3">
                                <div class="table-responsive theme-scrollbar">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>

        <div class="card-body">
          <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-body"> 
                  <div class="modal-toggle-wrapper">
                    <h4 class="text-center pb-2">Êtes vous sûr(e) de vouloir continuer cette action?</h4>
                    <div class="row gallery my-gallery" id="aniimated-thumbnials2" style="display:flex; justify-content:center; align-items:center; margin:10px;">
                      <figure class="col-md-3 col-6 img-hover hover-3"><a href="../assets/images/logo/icon_dl.png" itemprop="contentUrl" data-size="1600x950">
                          <div><img src="../assets/images/logo/icon_dl.png" itemprop="thumbnail" alt="Image description"></div></a>
                        <figcaption itemprop="caption description"></figcaption>
                      </figure>
                      <a href="http://localhost/Projects/Projet_library/vue/assets/pdf/sample.pdf" target="_blank" style="text-align:center; margin:0px;">Télécharger</a>
                    </div>
                    <div>
                      <table style="text-align:center; width:100%;">
                        <thead>
                          <tr><th>1,908</th><th>34.0k</th><th>897</th></tr>
                        </thead>
                        <tbody>
                          <tr><th style="width:30%;">Téléchargement(s)</th><th style="width:40%;"><svg class="footer-icon">
                              <use href="../assets/svg/icon-sprite.svg#footer-heart"> </use>
                            </svg></th><th style="width:30%;">Note</th></tr>
                        </tbody>
                      </table>
                    </div>
                    <hr>
                    <div>
                      <table style="text-align:center; width:100%;">
                        <tr><th>Proposé par:</th><th>Statut</th><th>Validé par:</th></tr>
                        <tr>
                          <th style="width:30%; text-decoration: unset;">Utilisateur</th>
                          <th style="width:40%;"><span class="badge rounded-pill badge-success">disponible</span></th>
                          <th style="width:30%;">Admin</th>
                        </tr>
                      </table>
                    </div>
                    <hr>
                    <form class="row g-3" action="test_admin.php" method="post">
                      <div class="col-md-12">
                        <label class="form-label" for="updated_title">Titre</label>
                        <input class="form-control" id="updated_title" name="title" type="text" value="Titre du livre" required>
                      </div>
                      <div class="col-md-12">
                        <label class="form-label" for="updated_author">Auteur(s)</label>
                        <input class="form-control" id="updated_author" name="author" type="text" value="Nom de l'auteur">
                      </div>
                      <div class="col-md-12">
                        <label>Type</label>
                        <select class="form-select" name="type" required>
                          <option value="audio">Audio</option>
                          <option value="ebook" selected>eBook</option>
                          <option value="image">Image</option>
                          <option value="video">Vidéo</option>
                          <option value="memoire">Mémoire</option>
                          <option value="handbook">Manuel</option>
                          <option value="periodic">Périodique</option>
                          <option value="monograph">Monographie (Livre)</option>
                          <option value="scientific_article">Article scientifique</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <label>Statut</label>
                        <select class="form-select" name="status" required>
                          <option value="avalaible" selected>Disponible</option>
                          <option value="unavailable">Non disponible</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <label class="form-label" for="updated_description">Description</label>
                        <input class="form-control" id="updated_description" name="description" type="text" value="no mind.">
                      </div>
                      <div class="col-md-12">
                        <label class="form-label" for="updated_url">URL</label>
                        <input class="form-control" id="updated_url" name="url" type="text" value="https://url.com">
                      </div>
                      <div style="display:flex;">
                        <button class="btn btn-primary d-flex m-auto" type="submit" data-bs-dismiss="modal">Modifier</button>
                        <button class="btn btn-secondary d-flex m-auto" type="button" data-bs-dismiss="modal">Fermer</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card-body">
          <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-body"> 
                  <div class="modal-toggle-wrapper">  
                    <ul class="modal-img">
                      <li> <img src="../assets/images/gif/danger.gif" alt="error"></li>
                    </ul>
                    <h4 class="text-center pb-2">Êtes vous sûr(e) de vouloir supprimer ce fichier ?</h4>
                    <form class="row g-3" action="test_admin.php" method="post">
                      <div class="col-md-12">
                        <input class="form-control" id="modal_ttile" type="text" value="Titre du livre" style="margin-bottom:15px;" disabled>
                        <input class="form-control" id="modal_author" type="text" value="Auteur du livre" disabled>
                        <input class="form-control" id="modal_file_id" name="file_id" type="text" value="17" style="display:none;">
                      </div>
                      <div style="display:flex;">
                        <button class="btn btn-danger d-flex m-auto" type="submit" data-bs-dismiss="modal">Supprimer</button>
                        <button class="btn btn-secondary d-flex m-auto" type="button" data-bs-dismiss="modal">Annuler</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- footer start-->
         <?php include('footer.html');?>

      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/sidebar-pin.js"></script>
    <script src="../assets/js/slick/slick.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <script src="../assets/js/header-slick.js"></script>
    <!-- calendar js-->
    <script src="../assets/js/typeahead/handlebars.js"></script>
    <script src="../assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="../assets/js/typeahead/typeahead.custom.js"></script>
    <script src="../assets/js/typeahead-search/handlebars.js"></script>
    <script src="../assets/js/typeahead-search/typeahead-custom.js"></script>
    <!-- Plugins JS Ends-->
    <script src="../assets/js/height-equal.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <script src="../assets/js/modalpage/validation-modal.js"></script>
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <script>
        $(document).ready(function() {
            $('#data-source-students').DataTable();
            $('#data-source-lecturers').DataTable();
            $('#data-source-admins').DataTable();
        });
    </script>
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://use.fontawesome.com/7dddae9ad9.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
    <!-- Plugin used-->
  </body>
</html>