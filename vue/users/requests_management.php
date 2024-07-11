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
    <title>Dashboard - Gestion des Requêtes</title>
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
          <h4 class="f-w-700">Gestion des requêtes</h4>
          <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
              <li class="breadcrumb-item"><a href="../page_accueil.html"> <i data-feather="home"> </i></a></li>
              <li class="breadcrumb-item f-w-400">Dashboard</li>
              <li class="breadcrumb-item f-w-400 active">Gestion des requêtes</li>
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
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header pb-0 card-no-border">
                  <h4 class="mb-3">Liste des requêtes</h4><span>Liste complète de toutes les requêtes de mise à disposition de fichiers.</span>
                </div>
                <div class="card-body">
                  <div class="table-responsive theme-scrollbar">
                    <table class="display" id="data-source-1">
                      <thead>
                        <tr>
                            <th>Date de la demande</th>
                            <th>Date de traitement</th>
                            <th>Description</th>
                            <th>Effectuée par</th>
                            <th>Traitée par</th>
                            <th>Statut</th>
                            <th>Observation</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if (!empty($requests)): ?>
                        <?php foreach ($requests as $request): ?>
                          <tr>
                            <td><?php echo $request['created_at']; ?></td>
                            <td><?php echo $request['updated_at']; ?></td>
                            <td><?php echo $request['description']; ?></td>
                            <td><?php echo $request['asked_by']; ?></td>
                            <td><?php echo $request['processed_by']; ?></td>
                            <?php if ($request['status'] == 'enregistrée'): ?>
                              <td> <span class="badge rounded-pill badge-primary" style="color:white"><?php echo $request['status']; ?></span></td>
                            <?php elseif ($request['status'] == 'en cours'): ?>
                              <td> <span class="badge rounded-pill badge-warning" style="color:white"><?php echo $request['status']; ?></span></td>
                              <?php else: ?>
                                <td> <span class="badge rounded-pill badge-success" style="color:white"><?php echo $request['status']; ?></span></td>
                            <?php endif ?>
                            <td><?php echo $request['observation']; ?></td>
                            <td>
                              <ul class="action">
                                <!-- <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#edit_modal">Vertically centered</button> -->
                                <li class="edit"> <a data-bs-toggle="modal" data-bs-target="#edit_modal<?php echo $request['id']?>"><i class="icon-eye"></i></a></li>
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
                            <th>Date de la demande</th>
                            <th>Date de traitement</th>
                            <th>Description</th>
                            <th>Effectuée par</th>
                            <th>Traitée par</th>
                            <th>Statut</th>
                            <th>Observation</th>
                            <th>Action</th>
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

        
        <?php 
          if (!empty($requests)):
            foreach ($requests as $request): ?>
                <div class="card-body">
                    <div class="modal fade" id="edit_modal<?php echo $request['id']?>" tabindex="-1" role="dialog" aria-labelledby="edit_modal<?php echo $request['id']?>" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body"> 
                                    <div class="modal-toggle-wrapper">
                                        <h4 class="text-center pb-2">Fiche de traitement de la requête de mise à disposition</h4>
                                        <div class="row gallery my-gallery" id="aniimated-thumbnials2" style="display:flex; justify-content:center; align-items:center; margin:10px;">
                                            <figure class="col-md-3 col-6 img-hover hover-3"><a href="../assets/images/logo/icon_dl.png" itemprop="contentUrl" data-size="1600x950">
                                                <div><img src="../assets/images/logo/icon_dl.png" itemprop="thumbnail" alt="Image description"></div></a>
                                            <figcaption itemprop="caption description"></figcaption>
                                            </figure>
                                        </div>
                                        <hr>
                                        <form class="row g-3" action="../../controller/admin/manage_request.php" method="post">
                                            <input type="hidden" name="request_id" value="<?php echo $request['id'] ?>">
                                            <div class="col-md-12">
                                                <label class="form-label" for="asked_by">Matricule du demandeur</label>
                                                <input class="form-control" id="asked_by" name="asked_by" type="text" value="<?php echo $request['asked_by']?>" disabled>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label" for="when_asked">Date de la demande</label>
                                                <input class="form-control" id="when_asked" name="when_asked" type="text" value="<?php echo $request['created_at'] ?>" disabled>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label" for="description">Description</label>
                                                <input class="form-control" id="description" name="description" type="text" value="<?php echo $request['description']?>" disabled>
                                            </div>
                                            <hr>
                                            <div class="col-md-12">
                                                <label class="form-label" for="observation">Observation de l'administrateur</label>
                                                <input class="form-control" id="observation" name="observation" type="text" value="<?php echo $request['observation'] ?>" disabled>
                                            </div>
                                            <div class="col-md-12">
                                                <label>Status</label>
                                                <select class="form-select" name="status" disabled>
                                                    <option value="enregistrée" <?= $request['status'] == 'enregistrée' ? 'selected' : ''; ?>>Enregistrée</option>
                                                    <option value="en cours" <?= $request['status'] == 'en cours' ? 'selected' : ''; ?>>En cours</option>
                                                    <option value="traitée" <?= $request['status'] == 'traitée' ? 'selected' : ''; ?>>Traitée</option>
                                                </select>
                                            </div>
                                            <hr>
                                            <!-- <div style="display:flex;">
                                                <button class="btn btn-primary d-flex m-auto" type="submit" data-bs-dismiss="modal">Enregistrer</button>
                                                <button class="btn btn-secondary d-flex m-auto" type="button" data-bs-dismiss="modal">Fermer</button>
                                            </div> -->
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