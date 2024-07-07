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
          <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo_dl.png" alt=""/><img class="img-fluid for-dark" src="../assets/images/logo/logo_dl.png" alt=""/></a></div>
        </div>
        <div class="col-4 col-xl-4 page-title">
          <h4 class="f-w-700">Gestion des utilisateurs</h4>
          <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
              <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"> </i></a></li>
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
              <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo_dl.png" alt=""></a></div>
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
                    <h4>Liste des utilisateurs</h4>
                    <p class="mt-1 f-m-light">Classification des types d'utilisateurs.</p>
                  </div>
                  <div class="card-body">
                    <ul class="simple-wrapper nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item"><a class="nav-link txt-primary" id="students-tab" data-bs-toggle="tab" href="#students" role="tab" aria-controls="students" aria-selected="true">Etudiants</a></li>
                      <li class="nav-item"><a class="nav-link active txt-primary" id="lecturers-tabs" data-bs-toggle="tab" href="#lecturers" role="tab" aria-controls="lecturers" aria-selected="false">Enseignants</a></li>
                      <li class="nav-item"><a class="nav-link txt-primary" id="admins-tab" data-bs-toggle="tab" href="#admins" role="tab" aria-controls="admins" aria-selected="false">Administrateurs</a></li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade" id="students" role="tabpanel" aria-labelledby="students-tab">
                        <p class="pt-3">Tabs have long been used to show alternative views of the same group.</p>
                      </div>
                      <div class="tab-pane fade show active" id="lecturers" role="tabpanel" aria-labelledby="lecturers-tabs">
                        <div class="pt-3 mb-0">
                          <div class="flex-space flex-wrap align-items-center"><img class="tab-img" src="../assets/images/avtar/3.jpg" alt="profile">
                            <ul class="d-flex flex-column gap-1">
                              <li> <strong>Visit Us:</strong> 2600 Hollywood Blvd,Florida, United States-33020</li>
                              <li> <strong>Mail Us:</strong> contact@us@gmail.com</li>
                              <li><strong>Contact Number: </strong> (954) 357-7760</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="admins" role="tabpanel" aria-labelledby="admins-tab">
                        <ul class="pt-3 d-flex flex-column gap-1">
                          <li>Us Technology offers web & mobile development solutions for all industry verticals.Include a short form using fields that'll help your business understand who's contacting them.</li>
                          <li> <strong>Visit Us: </strong> 2600 Hollywood Blvd,Florida, United States-	33020</li>
                          <li> <strong>Mail Us:</strong> contact@us@gmail.com</li>
                          <li> <strong>Contact Number: </strong> (954) 357-7760</li>
                        </ul>
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
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
  </body>
</html>