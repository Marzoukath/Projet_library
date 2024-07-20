<?php
  session_start();
  include('../../controller/admin/fetch_data.php');
  if (isset($_GET['abort'])) { unset($_SESSION['filtered_files']); }
  if (isset($_SESSION['filtered_files'])) { $files = $_SESSION['filtered_files']; }
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
        <!-- Page Header Ends -->
      </div>
      <!-- Page Body Start-->
      <div class="page-body-wrapper default-menu default-menu">
        
        <?php include('sidebar_menu.php');?>

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- Container-fluid starts-->
          <div class="container-fluid search-page">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header col-xl-12 col-sm-12">
                    <form class="theme-form" action="../../controller/files_filtering.php" method="post">
                      <div class="input-group m-0 flex-nowrap">
                      <select name="sector"class="form-control-plaintext">
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
                      <select name="semester"class="form-control-plaintext">
                        <option value="">Sélectionner un semestre</option>
                        <option value="1">Semestre 1</option>
                        <option value="2">Semestre 2</option>
                        <option value="3">Semestre 3</option>
                        <option value="4">Semestre 4</option>
                        <option value="5">Semestre 5</option>
                        <option value="6">Semestre 6</option>
                        <option value="7">Semestre 7</option>
                        <option value="8">Semestre 8</option>
                        <option value="9">Semestre 9</option>
                        <option value="10">Semestre 10</option>
                      </select>
                      <button style="margin-left:10px" type="submit" class="btn btn-primary input-group-text" key: >Rechercher</button>
                      <a type='button' style="margin-left:10px" class="btn btn-secondary input-group-text" href="?abort=1" >Tous les fichiers</a>
                      </div>
                    </form>
                  </div>
                  <div class="card-body">
                    <div class="text-center">
                      <ul class="nav nav-tabs search-list" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="all-link" data-bs-toggle="tab" href="#all-links" role="tab" aria-selected="true"><i class="icon-target"></i>Tous</a></li>
                        <li class="nav-item"><a class="nav-link" id="book-link" data-bs-toggle="tab" href="#book-links" role="tab" aria-selected="false"><i class="icon-book"></i>eBooks</a></li>
                        <li class="nav-item"><a class="nav-link" id="image-link" data-bs-toggle="tab" href="#image-links" role="tab" aria-selected="false"><i class="icon-image"></i>Images</a></li>
                        <li class="nav-item"><a class="nav-link" id="video-link" data-bs-toggle="tab" href="#video-links" role="tab" aria-selected="false"><i class="icon-video-clapper"></i>Vidéos</a></li>
                        <li class="nav-item"><a class="nav-link" id="audio-link" data-bs-toggle="tab" href="#audio-links" role="tab" aria-selected="false"><i class="icon-headphone"></i>Audios</a></li>
                        <li class="nav-item bg-light-success"><a class="nav-link txt-success" id="favori-link" data-bs-toggle="tab" href="#favori-links" role="tab" aria-selected="false">Favoris</a></li>
                        <li class="nav-item bg-light-secondary"><a class="nav-link txt-secondary" id="tools-links" data-bs-toggle="tab" href="#tools-links" role="tab" aria-selected="false">Tools</a></li>
                      </ul>
                    </div>
                    <div class="tab-content" id="top-tabContent">
                      <div class="search-links tab-pane fade show active" id="all-links" role="tabpanel" aria-labelledby="all-link">
                        <div class="row">
                          <div class="pt-3">
                              <div class="table-responsive theme-scrollbar">
                                  <table class="display" id="data-source-files" style="width:100%">
                                      <thead>
                                      <tr>
                                          <th>Titre</th>
                                          <th>Auteur(s)</th>
                                          <th>Langue</th>
                                          <th>Type</th>
                                          <th>Proposé par</th>
                                          <th>Validé par</th>
                                          <th>Favoris</th>
                                          <th>Statut</th>
                                          <th>Actions</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                          <?php if (!empty($files)): ?>
                                          <?php foreach ($files as $file): ?>
                                              <tr>
                                              <td><?php echo htmlspecialchars($file['title']); ?></td>
                                              <td><?php echo htmlspecialchars($file['authors']); ?></td>
                                              <td><?php echo htmlspecialchars($file['language']); ?></td>
                                              <td><?php echo htmlspecialchars($file['type']); ?></td>
                                              <td><?php echo htmlspecialchars($file['proposed_by']); ?></td>
                                              <td><?php echo htmlspecialchars($file['validated_by']); ?></td>
                                              <td><?php echo $file['number_of_downloads']== 0 ? 0 : $file['number_of_likes']*100/$file['number_of_downloads']?></td>
                                              <td> <span class="badge rounded-pill badge-success"><?php echo $file['status']; ?></span></td>
                                              <td>
                                                  <ul class="action">
                                                  <li class="edit"><a data-bs-toggle="modal" data-bs-target="#edit_modal<?php echo $file['id']?>"><i class="icon-pencil-alt"></i></a></li>
                                                  <li><a href="../../controller/admin/download_file.php?file_id=<?php echo $file['id']?>" target="_blank" style="text-align:center; margin:0px;"><i class="icon-download"></i></a></li>
                                                  <li class="delete"><a data-bs-toggle="modal" data-bs-target="#delete_modal<?php echo $file['id']?>"><i class="icon-trash"></i></a></li>
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
                                          <th>Titre</th>
                                          <th>Auteur(s)</th>
                                          <th>Langue</th>
                                          <th>Type</th>
                                          <th>Proposé par</th>
                                          <th>Validé par</th>
                                          <th>Favoris</th>
                                          <th>Statut</th>
                                          <th>Actions</th>
                                      </tr>
                                      </tfoot>
                                  </table>
                              </div>
                          </div>
                        </div>
                      </div>
                      <!-- eBooks -->
                      <div class="tab-pane fade" id="book-links" role="tabpanel" aria-labelledby="book-link">
                        <div>
                          <div class="my-gallery row gallery-with-description" id="aniimated-thumbnials" itemscope="">
                            <?php 
                              if (!empty($files)):
                                foreach ($files as $book): 
                                  if ($book['type'] != 'audio' && $book['type'] != 'video' && $book['type'] != 'image'): 
                            ?>
                                    <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/logo/icon_dl.png" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/logo/icon_dl.png" itemprop="thumbnail" alt="Image description">
                                        <div class="caption">
                                          <h4><?php echo $book['title']; ?></h4>
                                          <p><?php echo $book['authors']; ?></p>
                                          <p><?php echo $book['path']; ?></p>
                                        </div></a>
                                      <figcaption itemprop="caption description">
                                        <p><?php echo $book['description']; ?></p>

                                        <ul class="search-info">
                                          <li><?php echo $book['number_of_likes']?> <i class="fa fa-heart" aria-hidden="true"></i></li>
                                          <li><?php echo $book['number_of_downloads']?> <i class="fa fa-download" aria-hidden="true"></i></li>
                                          <li><?php echo $book['language']?></li>
                                        </ul>
                                      </figcaption>
                                    </figure>
                            <?php
                                  endif;
                                endforeach;
                              endif;
                            ?>
                            
                          </div>
                        </div>
                        <div class="m-t-30">
                          <nav aria-label="...">
                            <ul class="pagination pagination-primary">
                              <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                              <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                              <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                          </nav>
                        </div>
                      </div>
                      <!-- Images -->
                      <div class="tab-pane fade" id="image-links" role="tabpanel" aria-labelledby="image-link">
                        <div>
                          <div class="my-gallery row gallery-with-description" id="aniimated-thumbnials" itemscope="">
                            <?php 
                              if (!empty($files)):
                                foreach ($files as $image): 
                                  if ($image['type'] == 'image'): 
                            ?>
                                    <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../../storage_list/uploads/<?php echo $image['path']; ?>" itemprop="contentUrl" data-size="1600x950"><img src="../../storage_list/uploads/<?php echo $image['path']; ?>" itemprop="thumbnail" alt="Image description">
                                        <div class="caption">
                                          <h4><?php echo $image['title']; ?></h4>
                                          <p><?php echo $image['authors']; ?></p>
                                          <p><?php echo $image['path']; ?></p>
                                        </div></a>
                                      <figcaption itemprop="caption description">
                                        <h4><?php echo $image['title']; ?></h4>
                                        <p><?php echo $image['description']; ?></p>

                                        <ul class="search-info">
                                          <li><?php echo $image['number_of_likes']?> <i class="fa fa-heart" aria-hidden="true"></i></li>
                                          <li><?php echo $image['number_of_downloads']?> <i class="fa fa-download" aria-hidden="true"></i></li>
                                          <li><?php echo $image['language']?></li>
                                        </ul>
                                      </figcaption>
                                    </figure>
                            <?php
                                  endif;
                                endforeach;
                              endif;
                            ?>
                            
                          </div>
                        </div>
                        <div class="m-t-30">
                          <nav aria-label="...">
                            <ul class="pagination pagination-primary">
                              <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                              <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                              <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                          </nav>
                        </div>
                      </div>
                      <!-- Videos -->
                      <div class="tab-pane fade" id="video-links" role="tabpanel" aria-labelledby="video-link">
                        <div class="row">
                          <div class="col-xxl-12">
                            <!-- <h4 class="mb-2">About 6,000 results (0.60 seconds)</h4> -->
                            <?php 
                              if (!empty($files)):
                                foreach ($files as $video): 
                                  if ($video['type'] == 'video'): 
                            ?>
                                  <div class="d-flex info-block col-xxl-12">
                                    <!-- <iframe class="me-3" width="200" height="100" src=""></iframe> -->
                                    <video class="me-3" width="200" height="100" controls src="../../storage_list/uploads/<?php echo $video['path']; ?>"></video>
                                    <div class="flex-grow-1"><a href=""><?php echo $video['url']?></a>
                                    <h5 style="color:black;"><?php echo $video['authors']?></h5>
                                    <h5 style="color:black;"><?php echo $video['title']?></h5>
                                      <h5><?php echo $video['description']?></h5>
                                      <div class="star-ratings">
                                        <ul class="search-info">
                                          <li><?php echo $video['number_of_likes']?> <i class="fa fa-heart" aria-hidden="true"></i></li>
                                          <li><?php echo $video['number_of_downloads']?> <i class="fa fa-download" aria-hidden="true"></i></li>
                                          <li><?php echo $video['language']?></li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                            <?php
                                  endif; 
                                endforeach;
                              endif; 
                            ?>
                          </div>
                          <div class="col-xl-12 m-t-30">   
                            <div>
                              <nav aria-label="...">
                                <ul class="pagination pagination-primary">
                                  <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                                  <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                              </nav>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Audios -->
                      <div class="tab-pane fade" id="audio-links" role="tabpanel" aria-labelledby="audio-link">
                        <div class="my-gallery row gallery-with-description" id="aniimated-thumbnials" itemscope="">
                          <?php 
                            if (!empty($files)):
                              foreach ($files as $audio): 
                                if ($audio['type'] == 'audio'): 
                          ?>
                                  <div class="d-flex info-block col-xxl-12">
                                  <audio class="me-3" controls src="../../storage_list/uploads/<?php echo $audio['path']; ?>"></audio>
                                  <div class="flex-grow-1"><a href=""><?php echo $audio['url']?></a>
                                  <h5 style="color:black;"><?php echo $audio['authors']?></h5>
                                  <h5 style="color:black;"><?php echo $audio['title']?></h5>
                                    <h5><?php echo $audio['description']?></h5>
                                    <div class="star-ratings">
                                      <ul class="search-info">
                                        <li><?php echo $audio['number_of_likes']?> <i class="fa fa-heart" aria-hidden="true"></i></li>
                                        <li><?php echo $audio['number_of_downloads']?> <i class="fa fa-download" aria-hidden="true"></i></li>
                                        <li><?php echo $audio['language']?></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                          <?php
                                endif;
                              endforeach;
                            endif;
                          ?>
                          
                        </div>
                        <div class="col-xl-12 m-t-30">   
                          <div>
                            <nav aria-label="...">
                              <ul class="pagination pagination-primary">
                                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                              </ul>
                            </nav>
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
                          <h4 class="text-center pb-2">Détails du fichier</h4>
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
                                  </svg></th><th style="width:30%;">Favoris</th></tr>
                              </tbody>
                            </table>
                          </div>
                          <hr>
                          <div>
                            <table style="text-align:center; width:100%;">
                              <tr><th>Proposé par:</th><th>Statut</th><th>Validé par:</th></tr>
                              <tr>
                                <th style="width:30%; text-decoration: unset;"><?php echo $file['proposed_by']?></th>
                                <th style="width:40%;"><span class="badge rounded-pill badge-success"><?php echo $file['status']?></span></th>
                                <th style="width:30%;"><?php echo $file['validated_by']?></th>
                              </tr>
                            </table>
                          </div>
                          <hr>
                          <!-- <form class="row g-3" action="../../controller/admin/update_file.php" method="post"> -->
                            <input type="hidden" name="file_id" value="<?php echo $file['id'] ?>">
                            <div class="col-md-12">
                              <label class="form-label" for="updated_title">Titre</label>
                              <input class="form-control" id="updated_title" name="title" type="text" value="<?php echo $file['title']?>" disabled>
                            </div>
                            <div class="col-md-12">
                              <label class="form-label" for="updated_author">Auteur(s)</label>
                              <input class="form-control" id="updated_author" name="author" type="text" value="<?php echo $file['authors']?>" disabled>
                            </div>
                            <div class="col-md-12">
                              <label>Type</label>
                              <select class="form-select" name="type" disabled>
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
                              <select class="form-select" name="status" disabled>
                                <option value="avalaible" <?= $file['status'] == 'disponible' ? 'selected' : ''; ?>>Disponible</option>
                                <option value="unavailable" <?= $file['status'] == 'non disponible' ? 'selected' : ''; ?>>Non disponible</option>
                              </select>
                            </div>
                            <div class="col-md-12">
                              <label class="form-label" for="updated_description">Description</label>
                              <input class="form-control" id="updated_description" name="description" type="text" value="<?php echo $file['description']?>" disabled>
                            </div>
                            <div class="col-md-12">
                              <label class="form-label" for="updated_url">URL</label>
                              <input class="form-control" id="updated_url" name="url" type="text" value="<?php echo $file['url']?>" disabled>
                            </div>
                            <!-- <div style="display:flex;">
                              <button class="btn btn-primary d-flex m-auto" type="submit" data-bs-dismiss="modal">Modifier</button>
                              <button class="btn btn-secondary d-flex m-auto" type="button" data-bs-dismiss="modal">Fermer</button>
                            </div> -->
                          <!-- </form> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="modal fade" id="delete_modal<?php echo $file['id']?>" tabindex="-1" role="dialog" aria-labelledby="delete_modal<?php echo $file['id']?>" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-body"> 
                        <div class="modal-toggle-wrapper">  
                          <ul class="modal-img">
                            <li> <img src="../assets/images/gif/danger.gif" alt="error"></li>
                          </ul>
                          <h4 class="text-center pb-2">Êtes vous sûr(e) de vouloir supprimer ce fichier ?</h4>
                          <form class="row g-3" action="../../controller/admin/delete_file.php" method="post">
                            <div class="col-md-12">
                              <input class="form-control" id="modal_title<?php echo $file['id']?>" type="text" value="<?php echo $file['title']?>" style="margin-bottom:15px;" disabled>
                              <input class="form-control" id="modal_author<?php echo $file['id']?>" type="text" value="<?php echo $file['authors']?>" disabled>
                              <input class="form-control" id="modal_file_id<?php echo $file['id']?>" name="file_id" type="text" value="<?php echo $file['id']?>" style="display:none;">
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
    <script>
        $(document).ready(function() {
            $('#data-source-files').DataTable();
            $('#data-source-favoris').DataTable();
            $('#data-source-admins').DataTable();
        });
    </script>
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
  </body>
</html>