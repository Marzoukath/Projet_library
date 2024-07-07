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
    <title>Dashboard - Ajout de fichier</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-picker.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/dropzone.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
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
              <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo_dl.png" alt=""></a></div>
            </div>
            <div class="nav-right col-xxl-8 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
              <ul class="nav-menus">
                <li><span class="header-search">
                    <svg>
                      <use href="../assets/svg/icon-sprite.svg#search"></use>
                    </svg></span></li>
                <li>
                  <div class="mode">
                    <svg>
                      <use href="../assets/svg/icon-sprite.svg#moon"></use>
                    </svg>
                  </div>
                </li>
                <li class="profile-nav onhover-dropdown px-0 py-0">
                  <div class="d-flex profile-media align-items-center"><img class="img-30" src="../assets/images/dashboard/profile.png" alt="">
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
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo_dl.png" alt=""></a>
              <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="pin-title sidebar-main-title">
                    <div> 
                      <h6>Pinned</h6>
                    </div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="">Dashboard</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-file"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-file"></use>
                      </svg><span>Gestion des fichiers</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="files_list.php" style="color: black;">Lister</a></li>
                      <li><a href="upload_file.php" style="color: black;">Ajouter</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-form"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-form"> </use>
                      </svg><span>Gestion des utilisateurs</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="users_list.php" style="color: black;">Lister</a></li>
                      <li><a href="create_users.php" style="color: black;">Ajouter</a></li>
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
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <form class="form theme-form" id="uploadForm" action="test_admin.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Titre</label>
                            <input class="form-control" type="text" name="title" placeholder="Audit de sécurité de système d’information d’Entreprise" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Auteur(s)</label>
                            <input class="form-control" type="text" name="author" placeholder="AB ERIC">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="mb-3">
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
                        </div>
                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label>URL</label>
                            <input class="form-control" name="url" type="text" placeholder="https://www.monrespro.cd/produit/audit-de-securite-de-systeme-dinformation-d-entreprise-securite-informatique-securite-informatique-ethical-hackingsecurite-informatique-et-ultime-du-debutant-pour-apprendre-les-bases/">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label>Langue</label>
                            <select class="form-select" aria-label="select example" name="language" required>
                              <option value="english">Anglais</option>
                              <option value="french" selected>Français</option>
                              <option value="others">Autres</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-12 col-sm-12">
                        <div class="card-wrapper border rounded-3 checkbox-checked">
                          <h6 class="sub-title">Catégories</h6>
                          <div style="display:flex;">
                            <div class="form-check" style="margin-right:15px">
                              <input class="form-check-input" id="sciences_et_technologies" name="categories[]" type="checkbox" value="Sciences et Technologies">
                              <label class="form-check-label" for="sciences_et_technologies">Sciences et Technologies</label>
                            </div>
                            <div class="form-check" style="margin-right:15px">
                              <input class="form-check-input" id="art" name="categories[]" type="checkbox" value="Art">
                              <label class="form-check-label" for="art">Art</label>
                            </div>
                            <div class="form-check" style="margin-right:15px">
                              <input class="form-check-input" id="lettres_et_langues" name="categories[]" type="checkbox" value="Lettres et Langues">
                              <label class="form-check-label" for="lettres_et_langues">Lettres et Langues</label>
                            </div>
                            <div class="form-check" style="margin-right:15px">
                              <input class="form-check-input" id="sciences_humaines_et_sociales" name="categories[]" type="checkbox" value="Sciences Humaines et Sociales">
                              <label class="form-check-label" for="sciences_humaines_et_sociales">Sciences Humaines et Sociales</label>
                            </div>
                            <div class="form-check" style="margin-right:15px">
                              <input class="form-check-input" id="droit_et_sciences_politiques" name="categories[]" type="checkbox" value="Droit et Sciences Politiques">
                              <label class="form-check-label" for="droit_et_sciences_politiques">Droit et Sciences Politiques</label>
                            </div>
                            <div class="form-check" style="margin-right:15px">
                              <input class="form-check-input" id="economie_et_gestion" name="categories[]" type="checkbox" value="Economie et Gestion">
                              <label class="form-check-label" for="economie_et_gestion">Economie et Gestion</label>
                            </div>
                            <div class="form-check" style="margin-right:15px">
                              <input class="form-check-input" id="sante" name="categories[]" type="checkbox" value="Santé">
                              <label class="form-check-label" for="sante">Santé</label>
                            </div>
                            <div class="form-check" style="margin-right:15px">
                              <input class="form-check-input" id="sport" name="categories[]" type="checkbox" value="Sport">
                              <label class="form-check-label" for="sport">Sport</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-12 col-sm-12" style="margin-top:18px">
                        <div class="card-wrapper border rounded-3 checkbox-checked">
                          <h6 class="sub-title">Recommandations pour les filières </h6>
                          <div style="display:flex">
                            <div class="form-check" style="margin-right:15px">
                              <input class="form-check-input" id="gc" name="sectors[]" type="checkbox" value="GC">
                              <label class="form-check-label" for="gc">Génie Civil </label>
                            </div>
                            <div class="form-check" style="margin-right:15px">
                              <input class="form-check-input" id="gcp" name="sectors[]" type="checkbox" value="GCP">
                              <label class="form-check-label" for="gcp">Génie Chimique-Procédés </label>
                            </div>
                            <div class="form-check" style="margin-right:15px">
                              <input class="form-check-input" id="ge" name="sectors[]" type="checkbox" value="GE">
                              <label class="form-check-label" for="ge">Génie Electrique </label>
                            </div>
                            <div class="form-check" style="margin-right:15px">
                              <input class="form-check-input" id="git" name="sectors[]" type="checkbox" value="GIT">
                              <label class="form-check-label" for="git">Génie Informatique et Télécommunications </label>
                            </div>
                            <div class="form-check" style="margin-right:15px">
                              <input class="form-check-input" id="gme" name="sectors[]" type="checkbox" value="GME">
                              <label class="form-check-label" for="gme">Génie Mécanique et Energétique </label>
                            </div>
                          </div>
                          <div style="display:flex">
                            <div class="form-check" style="margin-right:15px">
                              <input class="form-check-input" id="gbh" name="sectors[]" type="checkbox" value="GBH">
                              <label class="form-check-label" for="gbh">Génie de Biologie Humaine</label>
                            </div>
                            <div class="form-check" style="margin-right:15px">
                              <input class="form-check-input" id="gen" name="sectors[]" type="checkbox" value="GEn">
                              <label class="form-check-label" for="gen">Génie de l'Environnement</label>
                            </div>
                            <div class="form-check" style="margin-right:15px">
                              <input class="form-check-input" id="gimr" name="sectors[]" type="checkbox" value="GIMR">
                              <label class="form-check-label" for="gimr">Génie d'Imagerie Médicale et de Radiologie</label>
                            </div>
                            <div class="form-check" style="margin-right:15px">
                              <input class="form-check-input" id="psa" name="sectors[]" type="checkbox" value="PSA">
                              <label class="form-check-label" for="psa">Production et Santé Animale</label>
                            </div>
                          </div>
                          <div style="display:flex">
                            <div class="form-check" style="margin-right:15px">
                              <input class="form-check-input" id="ma" name="sectors[]" type="checkbox" value="MA">
                              <label class="form-check-label" for="ma">Machinisme Agricole</label>
                            </div>
                            <div class="form-check" style="margin-right:15px">
                              <input class="form-check-input" id="mbh" name="sectors[]" type="checkbox" value="MBH">
                              <label class="form-check-label" for="mbh">Maintenance Biomédicale et Hospitalière</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Audit de sécurité de système d’information d’ Entreprise: sécurité informatique: sécurité informatique ethical hacking:sécurité informatique et … ultime du débutant pour apprendre les bases d Broché – 21 mars 2020"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="file">Uploader le fichier</label>
                            <input class="form-control btn-pill px-4" id="file" type="file" name="file" style="background-color:rgba(183, 200, 210, 0.3);">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="text-end"><button class="btn btn-success me-3" type="submit">Ajouter</button><button class="btn btn-danger" href="#">Annuler</button></div>
                        </div>
                      </div>
                    </form>
                    <!-- <form id="uploadForm" action="test_admin.php" method="post" enctype="multipart/form-data">
                        <input type="file" id="fileInput" name="file" style="display:none;">
                        <div id="dropZone">Drag and drop files here</div>
                        <input type="submit" value="Upload">
                    </form> -->

                    <!-- <script>
                        alert("1");
                        const dropZone = document.getElementById('dropZone');
                        const fileInput = document.getElementById('fileInput');
                        const form = document.getElementById('uploadForm');

                        dropZone.addEventListener('dragover', (e) => {
                            e.preventDefault();
                        });

                        dropZone.addEventListener('drop', (e) => {
                            e.preventDefault();
                            fileInput.files = e.dataTransfer.files;
                        });

                        form.addEventListener('submit', (e) => {
                            if (fileInput.files.length === 0) {
                                e.preventDefault();
                                alert('No file selected!');
                            }
                        });
                    </script> -->

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright d-flex flex-wrap align-items-center justify-content-between">
                <p class="mb-0 f-w-600">Copyright 2024 © Digital Library</p>
                <p class="mb-0 f-w-600">AGBODJA Foumi & BATOKO Chahidath
                  <!-- <svg class="footer-icon">
                    <use href="../assets/svg/icon-sprite.svg#footer-heart"> </use>
                  </svg> -->
                </p>
              </div>
            </div>
          </div>
        </footer>
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

    <script src="../assets/js/select2/tagify.js"></script>
    <script src="../assets/js/select2/tagify.polyfills.min.js"></script>
    <script src="../assets/js/select2/intltelinput.min.js"></script>
    <script src="../assets/js/select2/telephone-input.js"> </script>
    <script src="../assets/js/select2/custom-inputsearch.js"></script>
    <script src="../assets/js/select2/select3-custom.js"></script>
    <script src="../assets/js/height-equal.js"></script>
    
    <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="../assets/js/dropzone/dropzone.js"></script>
    <!-- <script src="../assets/js/dropzone/dropzone-script.js"></script> -->
    <script src="../assets/js/typeahead/handlebars.js"></script>
    <script src="../assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="../assets/js/typeahead/typeahead.custom.js"></script>
    <script src="../assets/js/typeahead-search/handlebars.js"></script>
    <script src="../assets/js/typeahead-search/typeahead-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
  </body>
</html>