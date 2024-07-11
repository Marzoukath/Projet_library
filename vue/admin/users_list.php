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
                    <h4>Liste des utilisateurs</h4>
                    <p class="mt-1 f-m-light">Classification des types d'utilisateurs.</p>
                  </div>
                  <div class="card-body">
                    <ul class="simple-wrapper nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item"><a class="nav-link txt-primary" id="students-tab" data-bs-toggle="tab" href="#students" role="tab" aria-controls="students" aria-selected="false">Etudiants</a></li>
                      <li class="nav-item"><a class="nav-link active txt-primary" id="lecturers-tabs" data-bs-toggle="tab" href="#lecturers" role="tab" aria-controls="lecturers" aria-selected="false">Enseignants</a></li>
                      <li class="nav-item"><a class="nav-link txt-primary" id="admins-tab" data-bs-toggle="tab" href="#admins" role="tab" aria-controls="admins" aria-selected="true">Administrateurs</a></li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade" id="students" role="tabpanel" aria-labelledby="students-tab">
                            <div class="pt-3">
                                <div class="table-responsive theme-scrollbar">
                                    <table class="display" id="data-source-students" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th>Nom complet</th>
                                            <th>Email</th>
                                            <th>Numéro</th>
                                            <th>Matricule</th>
                                            <th>Filière</th>
                                            <th>Newsletter</th>
                                            <th>Créer le</th>
                                            <th>Mise à jour le</th>
                                            <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($students)): ?>
                                            <?php foreach ($students as $student): ?>
                                                <tr>
                                                <td><?php echo htmlspecialchars($student['fullname']); ?></td>
                                                <td><?php echo htmlspecialchars($student['email']); ?></td>
                                                <td><?php echo htmlspecialchars($student['mobile']); ?></td>
                                                <td><?php echo htmlspecialchars($student['matricule']); ?></td>
                                                <td><?php echo htmlspecialchars($student['filiere']); ?></td>
                                                <td><?php echo htmlspecialchars($student['newsletter']); ?></td>
                                                <td><?php echo htmlspecialchars($student['cree']); ?></td>
                                                <td><?php echo htmlspecialchars($student['mise']); ?></td>
                                                <td>
                                                    <ul class="action">
                                                        <li class="edit"><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter1"><i class="icon-pencil-alt"></i></a></li>
                                                        <li class="delete"><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter2"><i class="icon-trash"></i></a></li>
                                                    </ul>
                                                </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            <?php else: ?>
                                            <tr>
                                                <td colspan="8">No data found</td>
                                            </tr>
                                            <?php endif; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Nom complet</th>
                                            <th>Email</th>
                                            <th>Numéro</th>
                                            <th>Matricule</th>
                                            <th>Filière</th>
                                            <th>Newsletter</th>
                                            <th>Créer le</th>
                                            <th>Mise à jour le</th>
                                            <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="lecturers" role="tabpanel" aria-labelledby="lecturers-tabs">
                            <div class="pt-3 mb-0">
                                <div class="table-responsive theme-scrollbar">
                                    <table class="display" id="data-source-lecturers" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th>Nom complet</th>
                                            <th>Email</th>
                                            <th>Numéro</th>
                                            <th>Matricule</th>
                                            <th>Spécialité</th>
                                            <th>Grade</th>
                                            <th>Newsletter</th>
                                            <th>Créer le</th>
                                            <th>Mise à jour le</th>
                                            <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($teachers)): ?>
                                            <?php foreach ($teachers as $teacher): ?>
                                                <tr>
                                                <td><?php echo htmlspecialchars($teacher['fullname']); ?></td>
                                                <td><?php echo htmlspecialchars($teacher['email']); ?></td>
                                                <td><?php echo htmlspecialchars($teacher['mobile']); ?></td>
                                                <td><?php echo htmlspecialchars($teacher['matricule']); ?></td>
                                                <td><?php echo htmlspecialchars($teacher['specialite']); ?></td>
                                                <td><?php echo htmlspecialchars($teacher['grade']); ?></td>
                                                <td><?php echo htmlspecialchars($teacher['newsletter']); ?></td>
                                                <td><?php echo htmlspecialchars($teacher['cree']); ?></td>
                                                <td><?php echo htmlspecialchars($teacher['mise']); ?></td>
                                                <td>
                                                    <ul class="action">
                                                        <li class="edit"><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter1"><i class="icon-pencil-alt"></i></a></li>
                                                        <li class="delete"><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter2"><i class="icon-trash"></i></a></li>
                                                    </ul>
                                                </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            <?php else: ?>
                                            <tr>
                                                <td colspan="8">No data found</td>
                                            </tr>
                                            <?php endif; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Nom complet</th>
                                            <th>Email</th>
                                            <th>Numéro</th>
                                            <th>Matricule</th>
                                            <th>Spécialité</th>
                                            <th>Grade</th>
                                            <th>Newsletter</th>
                                            <th>Créer le</th>
                                            <th>Mise à jour le</th>
                                            <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="admins" role="tabpanel" aria-labelledby="admins-tab">
                            <div class="pt-3">
                                <div class="table-responsive theme-scrollbar">
                                    <table class="display" id="data-source-admins" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th>Nom complet</th>
                                            <th>Email</th>
                                            <th>Numéro</th>
                                            <th>Matricule</th>
                                            <th>Créer le</th>
                                            <th>Mise à jour le</th>
                                            <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($admins)): ?>
                                            <?php foreach ($admins as $admin): ?>
                                                <tr>
                                                <td><?php echo htmlspecialchars($admin['fullname']); ?></td>
                                                <td><?php echo htmlspecialchars($admin['email']); ?></td>
                                                <td><?php echo htmlspecialchars($admin['mobile']); ?></td>
                                                <td><?php echo htmlspecialchars($admin['matricule']); ?></td>
                                                <td><?php echo htmlspecialchars($admin['cree']); ?></td>
                                                <td><?php echo htmlspecialchars($admin['mise']); ?></td>
                                                <td>
                                                    <ul class="action">
                                                        <li class="edit"><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter1"><i class="icon-pencil-alt"></i></a></li>
                                                        <li class="delete"><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter2"><i class="icon-trash"></i></a></li>
                                                    </ul>
                                                </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            <?php else: ?>
                                            <tr>
                                                <td colspan="8">No data found</td>
                                            </tr>
                                            <?php endif; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Nom complet</th>
                                            <th>Email</th>
                                            <th>Numéro</th>
                                            <th>Matricule</th>
                                            <th>Créer le</th>
                                            <th>Mise à jour le</th>
                                            <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                    </table>
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


        <?php 
          if (!empty($files)):
            foreach ($files as $file): ?>
              <div class="card-body">
                <div class="modal fade" id="edit_modal<?php echo $file['id']?>" tabindex="-1" role="dialog" aria-labelledby="edit_modal<?php echo $file['id']?>" aria-hidden="true">
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
                            <a href="../../controller/admin/download_file.php?file_id=<?php echo $file['id']?>" target="_blank" style="text-align:center; margin:0px;">Télécharger</a>
                          </div>
                          <div>
                            <table style="text-align:center; width:100%;">
                              <thead>
                                <tr><th><?php echo $file['number_of_downloads']?></th><th><?php $file['number_of_downloads']== 0 ? 0 : $file['number_of_likes']*100/$file['number_of_downloads']?></th></tr>
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
                                <td style="width:30%; text-decoration: unset;"><?php echo $file['proposed_by']?></td>
                                  <?php if ($file['status'] == 'disponible'): ?>
                                    <td> <span class="badge rounded-pill badge-primary" style="color:white"><?php echo $file['status']; ?></span></td>
                                  <?php else: ?>
                                    <td> <span class="badge rounded-pill badge-light" style="color:black"><?php echo $file['status']; ?></span></td>
                                  <?php endif ?>
                                <td style="width:30%;"><?php echo $file['validated_by']?></td>
                              </tr>
                            </table>
                          </div>
                          <hr>
                          <form class="row g-3" action="../../controller/admin/update_file.php" method="post">
                            <input type="hidden" name="file_id" value="<?php echo $file['id'] ?>">
                            <div class="col-md-12">
                              <label class="form-label" for="updated_title">Titre</label>
                              <input class="form-control" id="updated_title" name="title" type="text" value="<?php echo $file['title']?>" required>
                            </div>
                            <div class="col-md-12">
                              <label class="form-label" for="updated_author">Auteur(s)</label>
                              <input class="form-control" id="updated_author" name="author" type="text" value="<?php echo $file['authors']?>">
                            </div>
                            <div class="col-md-12">
                              <label>Type</label>
                              <select class="form-select" name="type" required>
                                <option value="audio" <?= $file['type'] == 'audio' ? 'selected' : ''; ?>>Audio</option>
                                <option value="ebook" <?= $file['type'] == 'ebook' ? 'selected' : ''; ?>>eBook</option>
                                <option value="image" <?= $file['type'] == 'image' ? 'selected' : ''; ?>>Image</option>
                                <option value="video" <?= $file['type'] == 'video' ? 'selected' : ''; ?>>Vidéo</option>
                                <option value="memoire" <?= $file['type'] == 'memoire' ? 'selected' : ''; ?>>Mémoire</option>
                                <option value="handbook" <?= $file['type'] == 'handbook' ? 'selected' : ''; ?>>Manuel</option>
                                <option value="periodic" <?= $file['type'] == 'periodic' ? 'selected' : ''; ?>>Périodique</option>
                                <option value="monograph" <?= $file['type'] == 'monograph' ? 'selected' : ''; ?>>Monographie (Livre)</option>
                                <option value="scientific_article" <?= $file['type'] == 'scientific_article' ? 'selected' : ''; ?>>Article scientifique</option>
                              </select>
                            </div>
                            <div class="col-md-12">
                              <label>Statut</label>
                              <select class="form-select" name="status" required>
                                <option value="avalaible" <?= $file['status'] == 'disponible' ? 'selected' : ''; ?>>Disponible</option>
                                <option value="unavailable" <?= $file['status'] == 'non disponible' ? 'selected' : ''; ?>>Non disponible</option>
                              </select>
                            </div>
                            <div class="col-md-12">
                              <label class="form-label" for="updated_description">Description</label>
                              <input class="form-control" id="updated_description" name="description" type="text" value="<?php echo $file['description']?>">
                            </div>
                            <div class="col-md-12">
                              <label class="form-label" for="updated_url">URL</label>
                              <input class="form-control" id="updated_url" name="url" type="text" value="<?php echo $file['url']?>">
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
        <?php 
            endforeach;
          endif ?>
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
    <!-- Plugin used-->
  </body>
</html>