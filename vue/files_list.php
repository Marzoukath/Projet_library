<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mofi admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Mofi admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/logo/icon_dl.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/icon_dl.png" type="image/x-icon">
    <title>Dashboard - Liste des fichiers</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/datatables.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
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
          <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="assets/images/logo/logo_dl.png" alt=""/><img class="img-fluid for-dark" src="assets/images/logo/logo_dl.png" alt=""/></a></div>
        </div>
        <div class="col-4 col-xl-4 page-title">
          <h4 class="f-w-700">Gestion des fichiers</h4>
          <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
              <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"> </i></a></li>
              <li class="breadcrumb-item f-w-400">Apps</li>
              <li class="breadcrumb-item f-w-400 active">Gestion des fichiers</li>
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
              <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="assets/images/logo/logo_dl.png" alt=""></a></div>
            </div>
            <div class="nav-right col-xxl-8 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
              <ul class="nav-menus">
                <li><span class="header-search">
                    <svg>
                      <use href="assets/svg/icon-sprite.svg#search"></use>
                    </svg></span></li>
                <li>
                  <div class="mode">
                    <svg>
                      <use href="assets/svg/icon-sprite.svg#moon"></use>
                    </svg>
                  </div>
                </li>
                <li class="profile-nav onhover-dropdown px-0 py-0">
                  <div class="d-flex profile-media align-items-center"><img class="img-30" src="assets/images/dashboard/profile.png" alt="">
                    <div class="flex-grow-1"><span>Alen Miller</span>
                      <p class="mb-0 font-outfit">UI Designer<i class="fa fa-angle-down"></i></p>
                    </div>
                  </div>
                  <ul class="profile-dropdown onhover-show-div">
                    <li><a href="private-chat.html"><i data-feather="user"></i><span>Account </span></a></li>
                    <li><a href="letter-box.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                    <li><a href="task.html"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                    <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a></li>
                    <li><a href="login.html"><i data-feather="log-in"> </i><span>Log in</span></a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <script class="result-template" type="text/x-handlebars-template">
              <div class="ProfileCard u-cf">                        
              <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
              <div class="ProfileCard-details">
              <div class="ProfileCard-realName">{{name}}</div>
              </div>
              </div>
            </script>
            <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
          </div>
        </div>
        <!-- Page Header Ends                              -->
      </div>
      <!-- Page Body Start-->
      <div class="page-body-wrapper default-menu default-menu">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper" data-layout="stroke-svg">
          <div>
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="assets/images/logo/logo_dl.png" alt=""></a>
              <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="assets/images/logo/logo-icon.png" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href="index.html"><img class="img-fluid" src="assets/images/logo/logo-icon.png" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-8">Fichiers</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack">    </i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                      <svg class="stroke-icon">
                        <use href="assets/svg/icon-sprite.svg#stroke-project"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="assets/svg/icon-sprite.svg#fill-project"></use>
                      </svg><span style="color: white;">Gestion des fichiers</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="files_list.php" style="color: black;">Lister</a></li>
                      <li><a href="upload_file.php" style="color: black;">Ajouter</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header pb-0 card-no-border">
                  <h4 class="mb-3">Liste des fichiers</h4><span>Liste complète de tous les fichiers.</span>
                </div>
                <div class="card-body">
                  <div class="table-responsive theme-scrollbar">
                    <table class="display" id="data-source-1" style="width:100%">
                      <thead>
                        <tr>
                          <th>Titre</th>
                          <th>Auteur(s)</th>
                          <th>Langue</th>
                          <th>Type</th>
                          <th>Proposé par</th>
                          <th>Validé par</th>
                          <th>Note</th>
                          <th>Statut</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>System Architect</td>
                          <td>Tiger Nixon</td>
                          <td>Edinburgh</td>
                          <td class="action"><a class="pdf" href="sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"></i></a></td>
                          <td>t.nixon@datatables.net</td>
                          <td>Edinburgh</td>
                          <td>Edinburgh</td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td> 
                            <ul class="action">
                              <!-- <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1">Vertically centered</button> -->
                              <li class="edit"> <a data-bs-toggle="modal" data-bs-target="#exampleModalCenter1"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter2"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Titre</th>
                          <th>Auteur(s)</th>
                          <th>Langue</th>
                          <th>Type</th>
                          <th>Proposé par</th>
                          <th>Validé par</th>
                          <th>Note</th>
                          <th>Statut</th>
                          <th>Actions</th>
                        </tr>
                      </tfoot>
                    </table>
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
                    <p class="text-center">Attackers on malicious activity may trick you into doing something dangrous like installing software or revealing your personal informations.</p>
                    <form class="row g-3"> 
                      <div class="col-md-12">
                        <label class="form-label" for="inputEmail4">Email</label>
                        <input class="form-control" id="inputEmail4" type="email" placeholder="Enter Your Email">
                      </div>
                      <div class="col-md-12">
                        <label class="form-label" for="inputPassword4">Password</label>
                        <input class="form-control" id="inputPassword4" type="password" placeholder="Enter Your Password">
                      </div>
                      <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" id="gridCheck" type="checkbox">
                          <label class="form-check-label d-block mb-0" for="gridCheck">Check me out</label>
                        </div>
                      </div>
                      <div style="display:flex;">
                        <button class="btn btn-primary d-flex m-auto" type="submit" data-bs-dismiss="modal">Sign in</button>
                        <button class="btn btn-secondary d-flex m-auto" type="button" data-bs-dismiss="modal">Close</button>
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
                      <li> <img src="assets/images/gif/danger.gif" alt="error"></li>
                    </ul>
                    <h4 class="text-center pb-2">Êtes vous sûr(e) de vouloir supprimer ce fichier ?</h4>
                    <form class="row g-3">
                      <div class="col-md-12">
                        <input class="form-control" id="modalTtile" type="text" value="Titre du livre" style="margin-bottom:15px;" disabled>
                        <input class="form-control" id="modalAuthor" type="text" value="Auteur du livre" disabled>
                        <input class="form-control" id="fileId" type="text" value="17" disabled style="display:none;">
                      </div>
                      <div style="display:flex;">
                        <button class="btn btn-primary d-flex m-auto" type="submit" data-bs-dismiss="modal">Supprimer</button>
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
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright d-flex flex-wrap align-items-center justify-content-between">
                <p class="mb-0 f-w-600">Copyright 2024 © Digital Library</p>
                <p class="mb-0 f-w-600">AGBODJA Foumi & BATOKO Chahidath
                  <!-- <svg class="footer-icon">
                    <use href="assets/svg/icon-sprite.svg#footer-heart"> </use>
                  </svg> -->
                </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
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
    <script src="assets/js/typeahead/handlebars.js"></script>
    <script src="assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="assets/js/typeahead/typeahead.custom.js"></script>
    <script src="assets/js/typeahead-search/handlebars.js"></script>
    <script src="assets/js/typeahead-search/typeahead-custom.js"></script>
    <!-- Plugins JS Ends-->
    <script src="assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/datatable/datatables/datatable.custom.js"></script>
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
  </body>
</html>