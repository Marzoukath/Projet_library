<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mofi admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Mofi admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Mofi - Premium Admin Template</title>
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
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
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
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-8">Fichiers</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack">    </i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-project"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-project"></use>
                      </svg><span style="color: black;">Gestion des fichiers</span></a>
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
                          <th>Name</th>
                          <th>Position</th>
                          <th>Salary</th>
                          <th>Office</th>
                          <th>CV</th>
                          <th>Status</th>
                          <th>E-mail</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>$320,800</td>
                          <td>Edinburgh</td>
                          <td class="action">                                  <a class="pdf" href="sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"></i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>t.nixon@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>$170,750</td>
                          <td>Tokyo</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                          <td>g.winters@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>$86,000</td>
                          <td>San Francisco</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                          <td>a.cox@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>$433,060</td>
                          <td>Edinburgh</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                          <td>c.kelly@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>$162,700</td>
                          <td>Tokyo</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>a.satou@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Brielle Williamson</td>
                          <td>Integration Specialist</td>
                          <td>$372,000</td>
                          <td>New York</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                          <td>b.williamson@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Herrod Chandler</td>
                          <td>Sales Assistant</td>
                          <td>$137,500</td>
                          <td>San Francisco</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                          <td>h.chandler@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Rhona Davidson</td>
                          <td>Integration Specialist</td>
                          <td>$327,900</td>
                          <td>Tokyo</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>r.davidson@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Colleen Hurst</td>
                          <td>Javascript Developer</td>
                          <td>$205,500</td>
                          <td>San Francisco</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                          <td>c.hurst@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Sonya Frost</td>
                          <td>Software Engineer</td>
                          <td>$103,600</td>
                          <td>Edinburgh</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                          <td>s.frost@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Jena Gaines</td>
                          <td>Office Manager</td>
                          <td>$90,560</td>
                          <td>London</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>j.gaines@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Quinn Flynn</td>
                          <td>Support Lead</td>
                          <td>$342,000</td>
                          <td>Edinburgh</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                          <td>q.flynn@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Charde Marshall</td>
                          <td>Regional Director</td>
                          <td>$470,600</td>
                          <td>San Francisco</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                          <td>c.marshall@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Haley Kennedy</td>
                          <td>Senior Marketing Designer</td>
                          <td>$313,500</td>
                          <td>London</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>h.kennedy@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Tatyana Fitzpatrick</td>
                          <td>Regional Director</td>
                          <td>$385,750</td>
                          <td>London</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                          <td>t.fitzpatrick@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Michael Silva</td>
                          <td>Marketing Designer</td>
                          <td>$198,500</td>
                          <td>London</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                          <td>m.silva@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Paul Byrd</td>
                          <td>Chief Financial Officer (CFO)</td>
                          <td>$725,000</td>
                          <td>New York</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                          <td>p.byrd@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Gloria Little</td>
                          <td>Systems Administrator</td>
                          <td>$237,500</td>
                          <td>New York</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>g.little@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Bradley Greer</td>
                          <td>Software Engineer</td>
                          <td>$132,000</td>
                          <td>London</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                          <td>b.greer@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Dai Rios</td>
                          <td>Personnel Lead</td>
                          <td>$217,500</td>
                          <td>Edinburgh</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                          <td>d.rios@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Jenette Caldwell</td>
                          <td>Development Lead</td>
                          <td>$345,000</td>
                          <td>New York</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>j.caldwell@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Yuri Berry</td>
                          <td>Chief Marketing Officer (CMO)</td>
                          <td>$675,000</td>
                          <td>New York</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                          <td>y.berry@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Caesar Vance</td>
                          <td>Pre-Sales Support</td>
                          <td>$106,450</td>
                          <td>New York</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                          <td>c.vance@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Doris Wilder</td>
                          <td>Sales Assistant</td>
                          <td>$85,600</td>
                          <td>Sidney</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>d.wilder@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>$1,200,000</td>
                          <td>London</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                          <td>a.ramos@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Gavin Joyce</td>
                          <td>Developer</td>
                          <td>$92,575</td>
                          <td>Edinburgh</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                          <td>g.joyce@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Jennifer Chang</td>
                          <td>Regional Director</td>
                          <td>$357,650</td>
                          <td>Singapore</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>j.chang@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Brenden Wagner</td>
                          <td>Software Engineer</td>
                          <td>$206,850</td>
                          <td>San Francisco</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>b.wagner@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Fiona Green</td>
                          <td>Chief Operating Officer (COO)</td>
                          <td>$850,000</td>
                          <td>San Francisco</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                          <td>f.green@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Shou Itou</td>
                          <td>Regional Marketing</td>
                          <td>$163,000</td>
                          <td>Tokyo</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                          <td>s.itou@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Michelle House</td>
                          <td>Integration Specialist</td>
                          <td>$95,400</td>
                          <td>Sidney</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>m.house@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Suki Burks</td>
                          <td>Developer</td>
                          <td>$114,500</td>
                          <td>London</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                          <td>s.burks@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Prescott Bartlett</td>
                          <td>Technical Author</td>
                          <td>$145,000</td>
                          <td>London</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                          <td>p.bartlett@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Gavin Cortez</td>
                          <td>Team Leader</td>
                          <td>$235,500</td>
                          <td>San Francisco</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>g.cortez@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Martena Mccray</td>
                          <td>Post-Sales support</td>
                          <td>$324,050</td>
                          <td>Edinburgh</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>m.mccray@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Unity Butler</td>
                          <td>Marketing Designer</td>
                          <td>$85,675</td>
                          <td>San Francisco</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                          <td>u.butler@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Howard Hatfield</td>
                          <td>Office Manager</td>
                          <td>$164,500</td>
                          <td>San Francisco</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                          <td>h.hatfield@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Hope Fuentes</td>
                          <td>Secretary</td>
                          <td>$109,850</td>
                          <td>San Francisco</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>h.fuentes@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Vivian Harrell</td>
                          <td>Financial Controller</td>
                          <td>$452,500</td>
                          <td>San Francisco</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                          <td>v.harrell@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Timothy Mooney</td>
                          <td>Office Manager</td>
                          <td>$136,200</td>
                          <td>London</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                          <td>t.mooney@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Jackson Bradshaw</td>
                          <td>Director</td>
                          <td>$645,750</td>
                          <td>New York</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>j.bradshaw@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Olivia Liang</td>
                          <td>Support Engineer</td>
                          <td>$234,500</td>
                          <td>Singapore</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                          <td>o.liang@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Bruno Nash</td>
                          <td>Software Engineer</td>
                          <td>$163,500</td>
                          <td>London</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                          <td>b.nash@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Sakura Yamamoto</td>
                          <td>Support Engineer</td>
                          <td>$139,575</td>
                          <td>Tokyo</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                          <td>s.yamamoto@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Thor Walton</td>
                          <td>Developer</td>
                          <td>$98,540</td>
                          <td>New York</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                          <td>t.walton@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Finn Camacho</td>
                          <td>Support Engineer</td>
                          <td>$87,500</td>
                          <td>San Francisco</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>f.camacho@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Serge Baldwin</td>
                          <td>Data Coordinator</td>
                          <td>$138,575</td>
                          <td>Singapore</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                          <td>s.baldwin@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Zenaida Frank</td>
                          <td>Software Engineer</td>
                          <td>$125,250</td>
                          <td>New York</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                          <td>z.frank@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Zorita Serrano</td>
                          <td>Software Engineer</td>
                          <td>$115,000</td>
                          <td>San Francisco</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>z.serrano@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Jennifer Acosta</td>
                          <td>Junior Javascript Developer</td>
                          <td>$75,650</td>
                          <td>Edinburgh</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                          <td>j.acosta@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Cara Stevens</td>
                          <td>Sales Assistant</td>
                          <td>$145,600</td>
                          <td>New York</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                          <td>c.stevens@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Hermione Butler</td>
                          <td>Regional Director</td>
                          <td>$356,250</td>
                          <td>London</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>h.butler@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Lael Greer</td>
                          <td>Systems Administrator</td>
                          <td>$103,500</td>
                          <td>London</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                          <td>l.greer@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Jonas Alexander</td>
                          <td>Developer</td>
                          <td>$86,500</td>
                          <td>San Francisco</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                          <td>j.alexander@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Shad Decker</td>
                          <td>Regional Director</td>
                          <td>$183,000</td>
                          <td>Edinburgh</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>s.decker@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Michael Bruce</td>
                          <td>Javascript Developer</td>
                          <td>$183,000</td>
                          <td>Singapore</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>m.bruce@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>$112,000</td>
                          <td>New York</td>
                          <td class="action">                                  <a class="pdf" href="../assets/pdf/sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"> </i></a></td>
                          <td> <span class="badge rounded-pill badge-success">hired</span></td>
                          <td>d.snider@datatables.net</td>
                          <td> 
                            <ul class="action"> 
                              <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                              <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Salary</th>
                          <th>Office</th>
                          <th>CV</th>
                          <th>Status</th>
                          <th>E-mail</th>
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
    <script src="../assets/js/typeahead/handlebars.js"></script>
    <script src="../assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="../assets/js/typeahead/typeahead.custom.js"></script>
    <script src="../assets/js/typeahead-search/handlebars.js"></script>
    <script src="../assets/js/typeahead-search/typeahead-custom.js"></script>
    <!-- Plugins JS Ends-->
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
  </body>
</html>