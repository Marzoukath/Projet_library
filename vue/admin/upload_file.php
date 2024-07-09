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
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-picker.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/dropzone.css">
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
          <div class="logo-wrapper"><a href="../page_accueil.html"><img class="img-fluid for-light" src="../assets/images/logo/logo_dl.png" alt=""/><img class="img-fluid for-dark" src="../assets/images/logo/logo_dl.png" alt=""/></a></div>
        </div>
        <div class="col-4 col-xl-4 page-title">
          <h4 class="f-w-700">Gestion des fichiers</h4>
          <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
              <li class="breadcrumb-item"><a href="../page_accueil.html"> <i data-feather="home"> </i></a></li>
              <li class="breadcrumb-item f-w-400">Dashboard</li>
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
              <div class="logo-wrapper"><a href="../page_accueil.html"><img class="img-fluid" src="../assets/images/logo/logo_dl.png" alt=""></a></div>
            </div>
            
            <?php include('profile.php');?>

          </div>
        </div>
        <!-- Page Header Ends                              -->
      </div>
      <!-- Page Body Start-->
      <div class="page-body-wrapper default-menu default-menu">
        <!-- Page Sidebar Start-->
        <?php include('sidebar_menu.php');?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <form class="form theme-form" id="uploadForm" action="../../controller/admin/insert_file.php" method="post" enctype="multipart/form-data">
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
                            <input class="form-control" type="text" name="authors" placeholder="AB ERIC">
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
                              <option value="anglais">Anglais</option>
                              <option value="français" selected>Français</option>
                              <option value="autres">Autres</option>
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
                      <div class="col-xl-12 col-sm-12" style="display:flex;">
                        <div class="col-xl-6 col-sm-6">
                          <div class="card-wrapper border rounded-3 checkbox-checked" style="height:119px; margin-right:15px; margin-top:15px;">
                            <h6 class="sub-title">Années de formation</h6>
                            <div style="display:flex;">
                              <div class="form-check" style="margin-right:15px">
                                <input class="form-check-input" id="first_year" name="years[]" type="checkbox" value=1>
                                <label class="form-check-label" for="first_year">1re année</label>
                              </div>
                              <div class="form-check" style="margin-right:15px">
                                <input class="form-check-input" id="second_year" name="years[]" type="checkbox" value=2>
                                <label class="form-check-label" for="second_year">2e année</label>
                              </div>
                              <div class="form-check" style="margin-right:15px">
                                <input class="form-check-input" id="third_year" name="years[]" type="checkbox" value=3>
                                <label class="form-check-label" for="third_year">3e année</label>
                              </div>
                              <div class="form-check" style="margin-right:15px">
                                <input class="form-check-input" id="fourth_year" name="years[]" type="checkbox" value=4>
                                <label class="form-check-label" for="fourth_year">4e année</label>
                              </div>
                              <div class="form-check" style="margin-right:15px">
                                <input class="form-check-input" id="fifth_year" name="years[]" type="checkbox" value=5>
                                <label class="form-check-label" for="fifth_year">5e année</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                          <div class="card-wrapper border rounded-3 checkbox-checked" style="height:119px; margin-bottom:15px; margin-top:15px;">
                            <h6 class="sub-title">Semestres</h6>
                            <div style="display:flex;">
                              <div class="form-check" style="margin-right:15px">
                                <input class="form-check-input" id="first_semester" name="semesters[]" type="checkbox" value=1>
                                <label class="form-check-label" for="first_semester">Semestre 1</label>
                              </div>
                              <div class="form-check" style="margin-right:15px">
                                <input class="form-check-input" id="third_semester" name="semesters[]" type="checkbox" value=3>
                                <label class="form-check-label" for="third_semester">Semestre 3</label>
                              </div>
                              <div class="form-check" style="margin-right:15px">
                                <input class="form-check-input" id="fifth_semester" name="semesters[]" type="checkbox" value=5>
                                <label class="form-check-label" for="fifth_semester">Semestre 5</label>
                              </div>
                              <div class="form-check" style="margin-right:15px">
                                <input class="form-check-input" id="seventh_semester" name="semesters[]" type="checkbox" value=7>
                                <label class="form-check-label" for="seventh_semester">Semestre 7</label>
                              </div>
                              <div class="form-check" style="margin-right:15px">
                                <input class="form-check-input" id="nineth_semester" name="semesters[]" type="checkbox" value=9>
                                <label class="form-check-label" for="nineth_semester">Semestre 9</label>
                              </div>
                            </div>
                            <div style="display:flex;">
                              <div class="form-check" style="margin-right:15px">
                                <input class="form-check-input" id="second_semester" name="semesters[]" type="checkbox" value=2>
                                <label class="form-check-label" for="second_semester">Semestre 2</label>
                              </div>
                              <div class="form-check" style="margin-right:15px">
                                <input class="form-check-input" id="fourth_semester" name="semesters[]" type="checkbox" value=4>
                                <label class="form-check-label" for="fourth_semester">Semestre 4</label>
                              </div>
                              <div class="form-check" style="margin-right:15px">
                                <input class="form-check-input" id="sixth_semester" name="semesters[]" type="checkbox" value=6>
                                <label class="form-check-label" for="sixth_semester">Semestre 6</label>
                              </div>
                              <div class="form-check" style="margin-right:15px">
                                <input class="form-check-input" id="eighth_semester" name="semesters[]" type="checkbox" value=8>
                                <label class="form-check-label" for="eighth_semester">Semestre 8</label>
                              </div>
                              <div class="form-check" style="margin-right:15px">
                                <input class="form-check-input" id="tenth_semester" name="semesters[]" type="checkbox" value=10>
                                <label class="form-check-label" for="tenth_semester">Semestre 10</label>
                              </div>
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