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
                  <div class="card-header">
                    <form class="theme-form">
                      <div class="input-group m-0 flex-nowrap">
                        <input class="form-control-plaintext" type="search" placeholder="Pixelstrap .."><span class="btn btn-primary input-group-text">Search</span>
                      </div>
                    </form>
                  </div>
                  <div class="card-body">
                    <div class="text-center">
                      <ul class="nav nav-tabs search-list" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="all-link" data-bs-toggle="tab" href="#all-links" role="tab" aria-selected="true"><i class="icon-target"></i>All</a></li>
                        <li class="nav-item"><a class="nav-link" id="image-link" data-bs-toggle="tab" href="#image-links" role="tab" aria-selected="false"><i class="icon-image"></i>Images</a></li>
                        <li class="nav-item"><a class="nav-link" id="video-link" data-bs-toggle="tab" href="#video-links" role="tab" aria-selected="false"><i class="icon-video-clapper"></i>Videos</a></li>
                        <li class="nav-item"><a class="nav-link" id="audios-link" data-bs-toggle="tab" href="#audios-links" role="tab" aria-selected="false"><i class="icon-map-alt"></i>Audios</a></li>
                        <li class="nav-item bg-light-success"><a class="nav-link txt-success" id="setting-link" data-bs-toggle="tab" href="#setting-links" role="tab" aria-selected="false">Settings</a></li>
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
                                                <th>Note</th>
                                                <th>Statut</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($files)): ?>
                                                <?php foreach ($files as $donnees): ?>
                                                    <tr>
                                                    <td><?php echo htmlspecialchars($donnees['title']); ?></td>
                                                    <td><?php echo htmlspecialchars($donnees['authors']); ?></td>
                                                    <td><?php echo htmlspecialchars($donnees['language']); ?></td>
                                                    <td><?php echo htmlspecialchars($donnees['type']); ?></td>
                                                    <td><?php echo htmlspecialchars($donnees['proposed_by']); ?></td>
                                                    <td><?php echo htmlspecialchars($donnees['validated_by']); ?></td>
                                                    <td><?php echo $donnees['number_of_downloads']== 0 ? 0 : $donnees['number_of_likes']*100/$donnees['number_of_downloads']?></td>
                                                    <td> <span class="badge rounded-pill badge-success"><?php echo $donnees['status']; ?></span></td>
                                                    <td>
                                                        <ul class="action">
                                                        <li class="edit"> <a data-bs-toggle="modal" data-bs-target="#edit_modal<?php echo $donnees['id']?>"><i class="icon-pencil-alt"></i></a></li>
                                                            <li><a href="../../controller/admin/download_file.php?file_id=<?php echo $donnees['id']?>" target="_blank" style="text-align:center; margin:0px;"><i class="icon-download"></i></a></li>
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
                      <div class="tab-pane fade" id="image-links" role="tabpanel" aria-labelledby="image-link">
                        <div>
                          <h6 class="mb-2">About 12,120 results (0.50 seconds)</h6>
                          <div class="my-gallery row gallery-with-description" id="aniimated-thumbnials" itemscope="">
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/01.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/lightgallry/01.jpg" itemprop="thumbnail" alt="Image description">
                                <div class="caption">
                                  <h4>Portfolio Title</h4>
                                  <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                </div></a>
                              <figcaption itemprop="caption description">
                                <h4>Portfolio Title</h4>
                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                              </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/02.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/lightgallry/02.jpg" itemprop="thumbnail" alt="Image description">
                                <div class="caption">
                                  <h4>Portfolio Title</h4>
                                  <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                </div></a>
                              <figcaption itemprop="caption description">
                                <h4>Portfolio Title</h4>
                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                              </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/03.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/lightgallry/03.jpg" itemprop="thumbnail" alt="Image description">
                                <div class="caption">
                                  <h4>Portfolio Title</h4>
                                  <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                </div></a>
                              <figcaption itemprop="caption description">
                                <h4>Portfolio Title</h4>
                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                              </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/04.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/lightgallry/04.jpg" itemprop="thumbnail" alt="Image description">
                                <div class="caption">
                                  <h4>Portfolio Title</h4>
                                  <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                </div></a>
                              <figcaption itemprop="caption description">
                                <h4>Portfolio Title</h4>
                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                              </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/05.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/lightgallry/05.jpg" itemprop="thumbnail" alt="Image description">
                                <div class="caption">
                                  <h4>Portfolio Title</h4>
                                  <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                </div></a>
                              <figcaption itemprop="caption description">
                                <h4>Portfolio Title</h4>
                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                              </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/011.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/lightgallry/011.jpg" itemprop="thumbnail" alt="Image description">
                                <div class="caption">
                                  <h4>Portfolio Title</h4>
                                  <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                </div></a>
                              <figcaption itemprop="caption description">
                                <h4>Portfolio Title</h4>
                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                              </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/010.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/lightgallry/010.jpg" itemprop="thumbnail" alt="Image description">
                                <div class="caption">
                                  <h4>Portfolio Title</h4>
                                  <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                </div></a>
                              <figcaption itemprop="caption description">
                                <h4>Portfolio Title</h4>
                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                              </figcaption>
                            </figure>
                            <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/08.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/lightgallry/08.jpg" itemprop="thumbnail" alt="Image description">
                                <div class="caption">
                                  <h4>Portfolio Title</h4>
                                  <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                </div></a>
                              <figcaption itemprop="caption description">
                                <h4>Portfolio Title</h4>
                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                              </figcaption>
                            </figure>
                          </div>
                          <!-- Root element of PhotoSwipe. Must have class pswp.-->
                          <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                            <!--
                            Background of PhotoSwipe.
                            It's a separate element, as animating opacity is faster than rgba().
                            -->
                            <div class="pswp__bg"></div>
                            <!-- Slides wrapper with overflow:hidden.-->
                            <div class="pswp__scroll-wrap">
                              <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory.-->
                              <!-- don't modify these 3 pswp__item elements, data is added later on.-->
                              <div class="pswp__container">
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                              </div>
                              <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed.-->
                              <div class="pswp__ui pswp__ui--hidden">
                                <div class="pswp__top-bar">
                                  <!-- Controls are self-explanatory. Order can be changed.-->
                                  <div class="pswp__counter"></div>
                                  <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                  <button class="pswp__button pswp__button--share" title="Share"></button>
                                  <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                  <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                  <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR-->
                                  <!-- element will get class pswp__preloader--active when preloader is running-->
                                  <div class="pswp__preloader">
                                    <div class="pswp__preloader__icn">
                                      <div class="pswp__preloader__cut">
                                        <div class="pswp__preloader__donut"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                  <div class="pswp__share-tooltip"></div>
                                </div>
                                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                                <div class="pswp__caption">
                                  <div class="pswp__caption__center"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="m-t-30">
                          <nav aria-label="...">
                            <ul class="pagination pagination-primary">
                              <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item active"><a class="page-link" href="#">2 <span class="sr-only">(current)</span></a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                          </nav>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="video-links" role="tabpanel" aria-labelledby="video-link">
                        <div class="row">
                          <div class="col-xxl-6">
                            <h4 class="mb-2">About 6,000 results (0.60 seconds)</h4>
                            <div class="d-flex info-block">
                              <iframe class="me-3" width="200" height="100" src="https://www.youtube.com/embed/CJnfAXlBRTE"></iframe>
                              <div class="flex-grow-1"><a href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h5>
                                <div class="star-ratings">
                                  <ul class="search-info">
                                    <li>3 stars</li>
                                    <li>590 votes</li>
                                    <li>Theme</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex info-block">
                              <iframe class="me-3" width="200" height="100" src="https://www.youtube.com/embed/wpmHZspl4EM"></iframe>
                              <div class="flex-grow-1"><a href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                <h5>Lorem Ipsum is simply dummy text of the printing.</h5>
                                <div class="star-ratings">
                                  <ul class="search-info">
                                    <li>3 stars</li>
                                    <li>590 votes</li>
                                    <li>Theme</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex info-block">
                              <iframe class="me-3" width="200" height="100" src="https://www.youtube.com/embed/-L4gEk7cOfk"></iframe>
                              <div class="flex-grow-1"><a href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                <h5>Morbi eget quam et purus commodo dapibus.</h5>
                                <div class="star-ratings">
                                  <ul class="search-info">
                                    <li>3 stars</li>
                                    <li>590 votes</li>
                                    <li>Theme</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xxl-6">
                            <h4>About 6,000 results (0.60 seconds)</h4>
                            <div class="d-flex info-block">
                              <iframe class="me-3" width="200" height="100" src="https://www.youtube.com/embed/CJnfAXlBRTE"></iframe>
                              <div class="flex-grow-1"><a href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h5>
                                <div class="star-ratings">
                                  <ul class="search-info">
                                    <li>3 stars</li>
                                    <li>590 votes</li>
                                    <li>Theme</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex info-block">
                              <iframe class="me-3" width="200" height="100" src="https://www.youtube.com/embed/-L4gEk7cOfk"></iframe>
                              <div class="flex-grow-1"><a href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                <h5>Morbi eget quam et purus commodo dapibus.</h5>
                                <div class="star-ratings">
                                  <ul class="search-info">
                                    <li>3 stars</li>
                                    <li>590 votes</li>
                                    <li>Theme</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex info-block">
                              <iframe class="me-3" width="200" height="100" src="https://www.youtube.com/embed/wpmHZspl4EM"></iframe>
                              <div class="flex-grow-1"><a href="">https://themeforest.net/user/pixelstrap/portfolio</a>
                                <h5>Lorem Ipsum is simply dummy text of the printing.</h5>
                                <div class="star-ratings">
                                  <ul class="search-info">
                                    <li>3 stars</li>
                                    <li>590 votes</li>
                                    <li>Theme</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-12 m-t-30">   
                            <div>
                              <nav aria-label="...">
                                <ul class="pagination pagination-primary">
                                  <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item active"><a class="page-link" href="#">2 <span class="sr-only">(current)</span></a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
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
                                  </svg></th><th style="width:30%;">Note</th></tr>
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