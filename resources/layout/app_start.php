<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8" />
    <title>GMK Draft</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- ================== BEGIN core-css ================== -->
    <link href="assets/css/vendor.min.css" rel="stylesheet" />
    <link href="assets/css/app.min.css" rel="stylesheet" />
    <!-- ================== END core-css ================== -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
</head>

<body>
    <!-- BEGIN #app -->
    <div id="app" class="app app-content-full-width" >
        <!-- BEGIN #header -->
        <div id="header" class="app-header">
            <!-- BEGIN desktop-toggler -->

            <!-- END mobile-toggler -->

            <!-- BEGIN brand -->
            <div class="brand">
                <a href="index.php" class="brand-logo">
                    <span class="brand-img">
                        <span class="brand-img-text text-theme"><b>S</b></span>

                    </span>
                    <span class="brand-img">
                        <span class="brand-img-text text-theme"><b>M</b></span>
                        
                    </span>
                    <span class="brand-img">
                        <span class="brand-img-text text-theme"><b>T</b></span>
                        
                    </span>
                    
                </a>
            </div>
            <!-- END brand -->

            <!-- BEGIN menu -->
            <div class="menu">
                <div class="menu-item ">
                    <div id="time"></div>
                </div>
                <div class="menu-item dropdown dropdown-mobile-full">
                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                        <div class="menu-img online">
                            <img src="assets/img/user/profile.jpg" alt="Profile" height="60" />
                        </div>
                        <div class="menu-text d-sm-block d-none">
                            <!-- <?php echo $_SESSION['data']['username']; ?>  -->
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">

                        <a class="dropdown-item d-flex align-items-center" href="index.php?page=setting">SETTINGS <i
                                class="bi bi-gear ms-auto text-theme fs-16px my-n1"></i></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex align-items-center"
                            href="controller/logout_controller.php">LOGOUT <i
                                class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i></a>
                    </div>
                </div>
            </div>
            <!-- END menu -->

            <!-- BEGIN menu-search -->
            <form class="menu-search" method="POST" name="header_search_form">
                <div class="menu-search-container">
                    <div class="menu-search-icon"><i class="bi bi-search"></i></div>
                    <div class="menu-search-input">
                        <input type="text" class="form-control form-control-lg" placeholder="Search menu..." />
                    </div>
                    <div class="menu-search-icon">
                        <a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app"><i
                                class="bi bi-x-lg"></i></a>
                    </div>
                </div>
            </form>
            <!-- END menu-search -->
        </div>
        <!-- END #header -->

        <!-- BEGIN #content -->

        <!-- END #content -->

        <!-- BEGIN btn-scroll-top -->
        <div class="bg-dark bg-opacity-70 text-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <ul class="nav justify-content-start">
                  <li class="nav-item">
                     <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.PNG" width="30" height="30" alt="" class="d-inline-block align-middle">
                        
                    </a>                  
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">GANDUMAS KENCANA - DAS CONTROL VALVE STORAGE SYSTEM</a>
                  </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="nav justify-content-end">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?page=main">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?page=line">Line Monitor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?page=alarm">Alarm Log</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?page=report">Reporting</a>
                  </li>
                </ul>
            </div>
        </div>
    </div>
</div>