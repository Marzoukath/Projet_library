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

        <div class="page-body">
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
                        <!-- Students datatable -->
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
                                                <td><?php echo htmlspecialchars($student['sector']); ?></td>
                                                <td><?php echo htmlspecialchars($student['newsletter']); ?></td>
                                                <td><?php echo htmlspecialchars($student['cree']); ?></td>
                                                <td><?php echo htmlspecialchars($student['mise']); ?></td>
                                                <td>
                                                    <ul class="action">
                                                        <li class="edit"><a data-bs-toggle="modal" data-bs-target="#edit_modal<?php echo $student['matricule']?>"><i class="icon-pencil-alt"></i></a></li>
                                                        <li class="delete"><a data-bs-toggle="modal" data-bs-target="#delete_modal<?php echo $student['matricule']?>"><i class="icon-trash"></i></a></li>
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
                        <!-- Teachers datatable -->
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
                                                <td><?php echo htmlspecialchars($teacher['speciality']); ?></td>
                                                <td><?php echo htmlspecialchars($teacher['grade']); ?></td>
                                                <td><?php echo htmlspecialchars($teacher['newsletter']); ?></td>
                                                <td><?php echo htmlspecialchars($teacher['cree']); ?></td>
                                                <td><?php echo htmlspecialchars($teacher['mise']); ?></td>
                                                <td>
                                                    <ul class="action">
                                                        <li class="edit"><a data-bs-toggle="modal" data-bs-target="#edit_modal<?php echo $teacher['matricule']?>"><i class="icon-pencil-alt"></i></a></li>
                                                        <li class="delete"><a data-bs-toggle="modal" data-bs-target="#delete_modal<?php echo $teacher['matricule']?>"><i class="icon-trash"></i></a></li>
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
                        <!-- Admin datatable -->
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
        </div>

        <?php 
          // Students profile form
          if (!empty($students)):
            foreach ($students as $student): ?>
              <div class="card-body">
                <div class="modal fade" id="edit_modal<?php echo $student['matricule']?>" tabindex="-1" role="dialog" aria-labelledby="edit_modal<?php echo $student['matricule']?>" aria-hidden="true">
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
                          </div>
                          <hr>
                          <form class="row g-3" action="../../controller/admin/update_student_account.php" method="post">
                            <input type="hidden" name="student_id" value="<?php echo $student['id'] ?>">
                            <div class="mb-3">
                                <label class="form-label">Nom complet</label>
                                <input class="form-control" name= "fullname" type="text" value="<?php echo $student['fullname'];?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Matricule</label>
                                <input class="form-control"  name="matricule" type="text" value="<?php echo $student['matricule'];?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Adresse e-mail</label>
                                <input class="form-control" name="email" type="email" value="<?php echo $student['email'];?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Numéro de téléphone</label>
                                <input class="form-control" name="mobile" type="number" value="<?php echo $student['mobile'];?>" required>
                            </div>
                            <div class="col-md-12">
                              <label>Filière</label>
                              <select class="form-select" name="sector" required>
                                <option value="GC" <?= $student['sector'] == 'GC' ? 'selected' : ''; ?>>Génie Civil</option>
                                <option value="GCP" <?= $student['sector'] == 'GCP' ? 'selected' : ''; ?>>Génie Chimique et Procédés</option>
                                <option value="GE" <?= $student['sector'] == 'GE' ? 'selected' : ''; ?>>Génie Electrique</option>
                                <option value="GIT" <?= $student['sector'] == 'GIT' ? 'selected' : ''; ?>>Génie Informatique et Télécommunications</option>
                                <option value="GME" <?= $student['sector'] == 'GME' ? 'selected' : ''; ?>>Génie Mécanique et Energétique</option>
                                <option value="GBH" <?= $student['sector'] == 'GBH' ? 'selected' : ''; ?>>Génie de Biologie Humaine</option>
                                <option value="GEn" <?= $student['sector'] == 'GEn' ? 'selected' : ''; ?>>Génie de l'Environnement</option>
                                <option value="GIMR" <?= $student['sector'] == 'GIMR' ? 'selected' : ''; ?>>Génie d'Imagerie Médicale et Radiologie</option>
                                <option value="PSA" <?= $student['sector'] == 'PSA' ? 'selected' : ''; ?>>Production et Santé Animale</option>
                                <option value="MA" <?= $student['sector'] == 'MA' ? 'selected' : ''; ?>>Machinisme Agricole</option>
                                <option value="MBH" <?= $student['sector'] == 'MBH' ? 'selected' : ''; ?>>Maintenance Biomédicale et Hospitalière</option>
                              </select>
                            </div>
                            <div class="col-md-12">
                              <label>Statut du compte</label>
                              <select class="form-select" name="status" required>
                                <option value="actif" <?= $student['status'] == 'actif' ? 'selected' : ''; ?>>Actif</option>
                                <option value="inactif" <?= $student['status'] == 'inactif' ? 'selected' : ''; ?>>Inactif</option>
                              </select>
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

              <!-- Student deletion form -->
              <div class="card-body">
                <div class="modal fade" id="delete_modal<?php echo $student['matricule']?>" tabindex="-1" role="dialog" aria-labelledby="delete_modal<?php echo $student['matricule']?>" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-body"> 
                        <div class="modal-toggle-wrapper">  
                          <ul class="modal-img">
                            <li> <img src="../assets/images/gif/danger.gif" alt="error"></li>
                          </ul>
                          <h4 class="text-center pb-2">Êtes vous sûr(e) de vouloir supprimer ce compte ?</h4>
                          <form class="row g-3" action="../../controller/admin/delete_student_account.php" method="post">
                            <div class="col-md-12">
                              <input class="form-control" id="modal_fulllname" type="text" value="<?php echo $student['fullname']?>" style="margin-bottom:15px;" disabled>
                              <input class="form-control" id="modal_student_matricule" type="text" value="<?php echo $student['matricule']?>" disabled>
                              <input class="form-control" id="modal_student_id" name="student_matricule" type="text" value="<?php echo $student['matricule']?>" style="display:none;">
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

        <?php 
            endforeach;
          endif; ?>

        <?php 
          // Teachers profile form
          if (!empty($teachers)):
            foreach ($teachers as $teacher): ?>
              <div class="card-body">
                <div class="modal fade" id="edit_modal<?php echo $teacher['matricule']?>" tabindex="-1" role="dialog" aria-labelledby="edit_modal<?php echo $teacher['matricule']?>" aria-hidden="true">
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
                          </div>
                          <hr>
                          <form class="row g-3" action="../../controller/admin/update_teacher_account.php" method="post">
                            <input type="hidden" name="teacher_id" value="<?php echo $teacher['id'] ?>">
                            <div class="mb-3">
                                <label class="form-label">Nom complet</label>
                                <input class="form-control" name= "fullname" type="text" value="<?php echo $teacher['fullname'];?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Matricule</label>
                                <input class="form-control"  name="matricule" type="text" value="<?php echo $teacher['matricule'];?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Adresse e-mail</label>
                                <input class="form-control" name="email" type="email" value="<?php echo $teacher['email'];?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Numéro de téléphone</label>
                                <input class="form-control" name="mobile" type="number" value="<?php echo $teacher['mobile'];?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Grade</label>
                                <input class="form-control" name="grade" type="text" value="<?php echo $teacher['grade'];?>" required>
                            </div>
                            <div class="col-md-12">
                              <label>Domaine</label>
                              <select class="form-select" name="domain" required>
                                <option value="Sciences et Technologies" <?= $teacher['domain'] == 'Sciences et Technologies' ? 'selected' : ''; ?>>Sciences et Technologies</option>
                                <option value="Art" <?= $teacher['domain'] == 'Art' ? 'selected' : ''; ?>>Art</option>
                                <option value="Lettres et Langues" <?= $teacher['domain'] == 'Lettres et Langues' ? 'selected' : ''; ?>>Lettres et Langues</option>
                                <option value="Sciences Humaines et Sociales" <?= $teacher['domain'] == 'Sciences Humaines et Sociales' ? 'selected' : ''; ?>>Sciences Humaines et Sociales</option>
                                <option value="Droits et Sciences Politiques" <?= $teacher['domain'] == 'Droits et Sciences Politiques' ? 'selected' : ''; ?>>Droits et Sciences Politiques</option>
                                <option value="Economie et Gestion" <?= $teacher['domain'] == 'Economie et Gestion' ? 'selected' : ''; ?>>Economie et Gestion</option>
                                <option value="Santé" <?= $teacher['domain'] == 'Santé' ? 'selected' : ''; ?>>Santé</option>
                                <option value="Sport" <?= $teacher['domain'] == 'Sport' ? 'selected' : ''; ?>>Sport</option>
                              </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Spécialité</label>
                                <input class="form-control"  name="speciality" type="text" value="<?php echo $teacher['speciality'];?>" required>
                            </div>
                            <div class="col-md-12">
                              <label>Statut du compte</label>
                              <select class="form-select" name="status" required>
                                <option value="actif" <?= $teacher['status'] == 'actif' ? 'selected' : ''; ?>>Actif</option>
                                <option value="inactif" <?= $teacher['status'] == 'inactif' ? 'selected' : ''; ?>>Inactif</option>
                              </select>
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

              <!-- Teacher deletion form -->
              <div class="card-body">
                <div class="modal fade" id="delete_modal<?php echo $teacher['matricule']?>" tabindex="-1" role="dialog" aria-labelledby="delete_modal<?php echo $teacher['matricule']?>" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-body"> 
                        <div class="modal-toggle-wrapper">  
                          <ul class="modal-img">
                            <li> <img src="../assets/images/gif/danger.gif" alt="error"></li>
                          </ul>
                          <h4 class="text-center pb-2">Êtes vous sûr(e) de vouloir supprimer ce compte ?</h4>
                          <form class="row g-3" action="../../controller/admin/delete_teacher_account.php" method="post">
                            <div class="col-md-12">
                              <input class="form-control" id="modal_fulllname" type="text" value="<?php echo $teacher['fullname']?>" style="margin-bottom:15px;" disabled>
                              <input class="form-control" id="modal_teacher_matricule" type="text" value="<?php echo $teacher['matricule']?>" disabled>
                              <input class="form-control" id="modal_teacher_id" name="teacher_matricule" type="text" value="<?php echo $teacher['matricule']?>" style="display:none;">
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

        <?php 
            endforeach;
          endif; ?>

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