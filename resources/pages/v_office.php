<?php include 'resources/layout/app_start.php'; ?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<style>
    .gauge-size{
	 	width: 95%;
	 	height: 180px;
    }
    .field img {
  position: absolute;
  width: 73%;
  padding-left: 30px;
  
}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-white bg-opacity-25 rounded pt-5">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLight">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarLight">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0 text-end">
                
                <li class="nav-item active"><a class="nav-link"
                        href="index.php?page=dashboard&&id=<?php echo $id?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?page=report&&id=<?php echo $id?>">Report</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div id="content" class="app-content">
    <div class="row">
    <div class="col-6">
            <h3 class="text-start">Smart Office</h3>
        </div>
        <div class="col-6">
            <h5 class="text-end" id="last_update">0</h5>
        </div>
        <div class="container-fluid pt-0">
            <div class="row">
               
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-12 col-xl-4">
                            <div class="card mb-3">
                                <!-- BEGIN card-body -->
                                <div class="card-header bg-success text-dark">
                                    <div class="row">
                                        <div class="col-8">
                                            <b><i class="fas fa-bars pe-3"></i>Temperature Machine</b>
                                        </div>
                                        <div class="col-4 text-end">
                                            <a href="#" data-toggle="card-expand" class="text-dark text-opacity-50 text-decoration-none">
                                                <b>
                                                    <i class="bi bi-fullscreen"></i>
                                                </b>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pb-4">
                                    <!-- BEGIN title -->
                                    
                                    <div class="field">
                                        <img id="main" src="http://www.demo.lestariautomation.com/assets/img/bas/main.png">
                                        <img id="lobi" src="http://www.demo.lestariautomation.com/assets/img/bas/lobi-on.png">
                                        <img id="jalan" src="http://www.demo.lestariautomation.com/assets/img/bas/jalan-off.png">
                                        <img id="engineer" src="http://www.demo.lestariautomation.com/assets/img/bas/engineer-off.png">
                                        <img id="assembly" src="http://www.demo.lestariautomation.com/assets/img/bas/assembly-off.png">
                                        <img id="kantor" src="http://www.demo.lestariautomation.com/assets/img/bas/kantor-off.png">
                                        <img id="akunting" src="http://www.demo.lestariautomation.com/assets/img/bas/akunting-off.png">
                                        <img id="meeting" src="http://www.demo.lestariautomation.com/assets/img/bas/meeting-off.png">
                                    </div>
                                    <img id="main" src="http://www.demo.lestariautomation.com/assets/img/bas/main.png" style="width: 73%; padding-left: 30px; z-index: -99">


                                    <!-- END stat-sm -->
                                </div>
                                
                                <!-- END card-body -->

                                <!-- BEGIN card-arrow -->
                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>
                                <!-- END card-arrow -->
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-xl-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mb-3 bg-light border-theme bg-opacity-25 mb-3">
                            <!-- BEGIN card-body -->
                                        <div class="card-header bg-success text-dark">
                                            <div class="row">
                                                <div class="col-8">
                                                    <b><i class="fas fa-bars pe-3"></i>1st Floor Monitoring</b>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <a href="#" data-toggle="card-expand" class="text-dark text-opacity-50 text-decoration-none">
                                                        <b>
                                                            <i class="bi bi-fullscreen"></i>
                                                        </b>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body ">
                                            <!-- BEGIN title -->
                                            <div class="d-flex fw-bold small mb-3">
                                                <span class="flex-grow-1"></span>
                                                <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"></a>
                                            </div>
                                            <!-- END title -->
                                            <!-- BEGIN stat-lg -->
                                            <div class="row align-items-center mb-2">
                                                <div class="text-center">
                                                    <h2 class="mb-0" id="l1_kwh">0 kWH</h2>
                                                </div>
                                            </div>

                                            <!-- END stat-sm -->
                                        </div>
                                        <!-- END card-body -->

                                        <!-- BEGIN card-arrow -->
                                        <div class="card-arrow">
                                                <div class="card-arrow-top-left"></div>
                                                <div class="card-arrow-top-right"></div>
                                                <div class="card-arrow-bottom-left"></div>
                                                <div class="card-arrow-bottom-right"></div>
                                        </div>
                                        <!-- END card-arrow -->
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card mb-3">
                                                <!-- BEGIN card-body -->
                                                <div class="card-body">
                                                    <!-- BEGIN title -->
                                                    <div class="d-flex fw-bold small mb-3">
                                                        <span class="flex-grow-1">Voltage</span>
                                                        <a href="#" data-toggle="card-expand"
                                                            class="text-white text-opacity-50 text-decoration-none"><i
                                                                class="bi bi-fullscreen"></i></a>
                                                    </div>
                                                    <!-- END title -->
                                                    <!-- BEGIN stat-lg -->
                                                    <div class="row align-items-center mb-2">
                                                        <div class="col-12">
                                                            <h3 class="mb-0" id="l1_v">0 Volt</h3>
                                                        </div>
                                                    </div>

                                                    <!-- END stat-sm -->
                                                </div>
                                                <!-- END card-body -->

                                                <!-- BEGIN card-arrow -->
                                                <div class="card-arrow">
                                                    <div class="card-arrow-top-left"></div>
                                                    <div class="card-arrow-top-right"></div>
                                                    <div class="card-arrow-bottom-left"></div>
                                                    <div class="card-arrow-bottom-right"></div>
                                                </div>
                                                <!-- END card-arrow -->
                                            </div> 
                                        </div>
                                        <div class="col-4">
                                            <div class="card mb-3">
                                                <!-- BEGIN card-body -->
                                                <div class="card-body">
                                                    <!-- BEGIN title -->
                                                    <div class="d-flex fw-bold small mb-3">
                                                        <span class="flex-grow-1">Current</span>
                                                        <a href="#" data-toggle="card-expand"
                                                            class="text-white text-opacity-50 text-decoration-none"><i
                                                                class="bi bi-fullscreen"></i></a>
                                                    </div>
                                                    <!-- END title -->
                                                    <!-- BEGIN stat-lg -->
                                                    <div class="row align-items-center mb-2">
                                                        <div class="col-12">
                                                            <h3 class="mb-0" id="l1_i">0 A</h3>
                                                        </div>
                                                    </div>

                                                    <!-- END stat-sm -->
                                                </div>
                                                <!-- END card-body -->

                                                <!-- BEGIN card-arrow -->
                                                <div class="card-arrow">
                                                    <div class="card-arrow-top-left"></div>
                                                    <div class="card-arrow-top-right"></div>
                                                    <div class="card-arrow-bottom-left"></div>
                                                    <div class="card-arrow-bottom-right"></div>
                                                </div>
                                                <!-- END card-arrow -->
                                            </div> 
                                        </div>
                                        <div class="col-4">
                                            <div class="card mb-3">
                                                <!-- BEGIN card-body -->
                                                <div class="card-body">
                                                    <!-- BEGIN title -->
                                                    <div class="d-flex fw-bold small mb-3">
                                                        <span class="flex-grow-1">Power</span>
                                                        <a href="#" data-toggle="card-expand"
                                                            class="text-white text-opacity-50 text-decoration-none"><i
                                                                class="bi bi-fullscreen"></i></a>
                                                    </div>
                                                    <!-- END title -->
                                                    <!-- BEGIN stat-lg -->
                                                    <div class="row align-items-center mb-2">
                                                        <div class="col-12">
                                                            <h3 class="mb-0" id="l1_kw">0 w</h3>
                                                        </div>
                                                    </div>

                                                    <!-- END stat-sm -->
                                                </div>
                                                <!-- END card-body -->

                                                <!-- BEGIN card-arrow -->
                                                <div class="card-arrow">
                                                    <div class="card-arrow-top-left"></div>
                                                    <div class="card-arrow-top-right"></div>
                                                    <div class="card-arrow-bottom-left"></div>
                                                    <div class="card-arrow-bottom-right"></div>
                                                </div>
                                                <!-- END card-arrow -->
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card mb-3">
                                                <!-- BEGIN card-body -->
                                                <div class="card-body">
                                                    <!-- BEGIN title -->
                                                    <div class="d-flex fw-bold small mb-3">
                                                        <span class="flex-grow-1">temperature</span>
                                                        <a href="#" data-toggle="card-expand"
                                                            class="text-white text-opacity-50 text-decoration-none"><i
                                                                class="bi bi-fullscreen"></i></a>
                                                    </div>
                                                    <!-- END title -->
                                                    <!-- BEGIN stat-lg -->
                                                    <div class="row align-items-center mb-2">
                                                        <div class="col-12">
                                                            <h3 class="mb-0" id="l1_temp_c">0 C</h3>
                                                        </div>
                                                    </div>

                                                    <!-- END stat-sm -->
                                                </div>
                                                <!-- END card-body -->

                                                <!-- BEGIN card-arrow -->
                                                <div class="card-arrow">
                                                    <div class="card-arrow-top-left"></div>
                                                    <div class="card-arrow-top-right"></div>
                                                    <div class="card-arrow-bottom-left"></div>
                                                    <div class="card-arrow-bottom-right"></div>
                                                </div>
                                                <!-- END card-arrow -->
                                            </div> 
                                        </div>
                                        <div class="col-6">
                                            <div class="card mb-3">
                                                <!-- BEGIN card-body -->
                                                <div class="card-body">
                                                    <!-- BEGIN title -->
                                                    <div class="d-flex fw-bold small mb-3">
                                                        <span class="flex-grow-1">Humidity</span>
                                                        <a href="#" data-toggle="card-expand"
                                                            class="text-white text-opacity-50 text-decoration-none"><i
                                                                class="bi bi-fullscreen"></i></a>
                                                    </div>
                                                    <!-- END title -->
                                                    <!-- BEGIN stat-lg -->
                                                    <div class="row align-items-center mb-2">
                                                        <div class="col-12">
                                                            <h3 class="mb-0" id="l1_hum">0 %</h3>
                                                        </div>
                                                    </div>

                                                    <!-- END stat-sm -->
                                                </div>
                                                <!-- END card-body -->

                                                <!-- BEGIN card-arrow -->
                                                <div class="card-arrow">
                                                    <div class="card-arrow-top-left"></div>
                                                    <div class="card-arrow-top-right"></div>
                                                    <div class="card-arrow-bottom-left"></div>
                                                    <div class="card-arrow-bottom-right"></div>
                                                </div>
                                                <!-- END card-arrow -->
                                            </div> 
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-xl-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mb-3 bg-light border-theme bg-opacity-25 mb-3">
                            <!-- BEGIN card-body -->
                                        <div class="card-header bg-success text-dark">
                                            <div class="row">
                                                <div class="col-8">
                                                    <b><i class="fas fa-bars pe-3"></i>2nd Floor Monitoring</b>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <a href="#" data-toggle="card-expand" class="text-dark text-opacity-50 text-decoration-none">
                                                        <b>
                                                            <i class="bi bi-fullscreen"></i>
                                                        </b>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body ">
                                            <!-- BEGIN title -->
                                            <div class="d-flex fw-bold small mb-3">
                                                <span class="flex-grow-1"></span>
                                                <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"></a>
                                            </div>
                                            <!-- END title -->
                                            <!-- BEGIN stat-lg -->
                                            <div class="row align-items-center mb-2">
                                                <div class="text-center">
                                                    <h2 class="mb-0" id="l2_kwh">0 kWH</h2>
                                                </div>
                                            </div>

                                            <!-- END stat-sm -->
                                        </div>
                                        <!-- END card-body -->

                                        <!-- BEGIN card-arrow -->
                                        <div class="card-arrow">
                                                <div class="card-arrow-top-left"></div>
                                                <div class="card-arrow-top-right"></div>
                                                <div class="card-arrow-bottom-left"></div>
                                                <div class="card-arrow-bottom-right"></div>
                                        </div>
                                        <!-- END card-arrow -->
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card mb-3">
                                                <!-- BEGIN card-body -->
                                                <div class="card-body">
                                                    <!-- BEGIN title -->
                                                    <div class="d-flex fw-bold small mb-3">
                                                        <span class="flex-grow-1">Voltage</span>
                                                        <a href="#" data-toggle="card-expand"
                                                            class="text-white text-opacity-50 text-decoration-none"><i
                                                                class="bi bi-fullscreen"></i></a>
                                                    </div>
                                                    <!-- END title -->
                                                    <!-- BEGIN stat-lg -->
                                                    <div class="row align-items-center mb-2">
                                                        <div class="col-12">
                                                            <h3 class="mb-0" id="l2_v">0 Volt</h3>
                                                        </div>
                                                    </div>

                                                    <!-- END stat-sm -->
                                                </div>
                                                <!-- END card-body -->

                                                <!-- BEGIN card-arrow -->
                                                <div class="card-arrow">
                                                    <div class="card-arrow-top-left"></div>
                                                    <div class="card-arrow-top-right"></div>
                                                    <div class="card-arrow-bottom-left"></div>
                                                    <div class="card-arrow-bottom-right"></div>
                                                </div>
                                                <!-- END card-arrow -->
                                            </div> 
                                        </div>
                                        <div class="col-4">
                                            <div class="card mb-3">
                                                <!-- BEGIN card-body -->
                                                <div class="card-body">
                                                    <!-- BEGIN title -->
                                                    <div class="d-flex fw-bold small mb-3">
                                                        <span class="flex-grow-1">Current</span>
                                                        <a href="#" data-toggle="card-expand"
                                                            class="text-white text-opacity-50 text-decoration-none"><i
                                                                class="bi bi-fullscreen"></i></a>
                                                    </div>
                                                    <!-- END title -->
                                                    <!-- BEGIN stat-lg -->
                                                    <div class="row align-items-center mb-2">
                                                        <div class="col-12">
                                                            <h3 class="mb-0" id="l2_i">0 A</h3>
                                                        </div>
                                                    </div>

                                                    <!-- END stat-sm -->
                                                </div>
                                                <!-- END card-body -->

                                                <!-- BEGIN card-arrow -->
                                                <div class="card-arrow">
                                                    <div class="card-arrow-top-left"></div>
                                                    <div class="card-arrow-top-right"></div>
                                                    <div class="card-arrow-bottom-left"></div>
                                                    <div class="card-arrow-bottom-right"></div>
                                                </div>
                                                <!-- END card-arrow -->
                                            </div> 
                                        </div>
                                        <div class="col-4">
                                            <div class="card mb-3">
                                                <!-- BEGIN card-body -->
                                                <div class="card-body">
                                                    <!-- BEGIN title -->
                                                    <div class="d-flex fw-bold small mb-3">
                                                        <span class="flex-grow-1">Power</span>
                                                        <a href="#" data-toggle="card-expand"
                                                            class="text-white text-opacity-50 text-decoration-none"><i
                                                                class="bi bi-fullscreen"></i></a>
                                                    </div>
                                                    <!-- END title -->
                                                    <!-- BEGIN stat-lg -->
                                                    <div class="row align-items-center mb-2">
                                                        <div class="col-12">
                                                            <h3 class="mb-0" id="l2_kw">0 w</h3>
                                                        </div>
                                                    </div>

                                                    <!-- END stat-sm -->
                                                </div>
                                                <!-- END card-body -->

                                                <!-- BEGIN card-arrow -->
                                                <div class="card-arrow">
                                                    <div class="card-arrow-top-left"></div>
                                                    <div class="card-arrow-top-right"></div>
                                                    <div class="card-arrow-bottom-left"></div>
                                                    <div class="card-arrow-bottom-right"></div>
                                                </div>
                                                <!-- END card-arrow -->
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card mb-3">
                                                <!-- BEGIN card-body -->
                                                <div class="card-body">
                                                    <!-- BEGIN title -->
                                                    <div class="d-flex fw-bold small mb-3">
                                                        <span class="flex-grow-1">temperature</span>
                                                        <a href="#" data-toggle="card-expand"
                                                            class="text-white text-opacity-50 text-decoration-none"><i
                                                                class="bi bi-fullscreen"></i></a>
                                                    </div>
                                                    <!-- END title -->
                                                    <!-- BEGIN stat-lg -->
                                                    <div class="row align-items-center mb-2">
                                                        <div class="col-12">
                                                            <h3 class="mb-0" id="l2_temp_c">0 C</h3>
                                                        </div>
                                                    </div>

                                                    <!-- END stat-sm -->
                                                </div>
                                                <!-- END card-body -->

                                                <!-- BEGIN card-arrow -->
                                                <div class="card-arrow">
                                                    <div class="card-arrow-top-left"></div>
                                                    <div class="card-arrow-top-right"></div>
                                                    <div class="card-arrow-bottom-left"></div>
                                                    <div class="card-arrow-bottom-right"></div>
                                                </div>
                                                <!-- END card-arrow -->
                                            </div> 
                                        </div>
                                        <div class="col-6">
                                            <div class="card mb-3">
                                                <!-- BEGIN card-body -->
                                                <div class="card-body">
                                                    <!-- BEGIN title -->
                                                    <div class="d-flex fw-bold small mb-3">
                                                        <span class="flex-grow-1">Humidity</span>
                                                        <a href="#" data-toggle="card-expand"
                                                            class="text-white text-opacity-50 text-decoration-none"><i
                                                                class="bi bi-fullscreen"></i></a>
                                                    </div>
                                                    <!-- END title -->
                                                    <!-- BEGIN stat-lg -->
                                                    <div class="row align-items-center mb-2">
                                                        <div class="col-12">
                                                            <h3 class="mb-0" id="l2_hum">0 %</h3>
                                                        </div>
                                                    </div>

                                                    <!-- END stat-sm -->
                                                </div>
                                                <!-- END card-body -->

                                                <!-- BEGIN card-arrow -->
                                                <div class="card-arrow">
                                                    <div class="card-arrow-top-left"></div>
                                                    <div class="card-arrow-top-right"></div>
                                                    <div class="card-arrow-bottom-left"></div>
                                                    <div class="card-arrow-bottom-right"></div>
                                                </div>
                                                <!-- END card-arrow -->
                                            </div> 
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-5 col-xl-4">
                                    <div class="card mb-3 bg-light border-theme bg-opacity-25 mb-3">
                            <!-- BEGIN card-body -->
                                        <div class="card-header bg-success text-dark">
                                            <div class="row">
                                                <div class="col-8">
                                                    <b><i class="fas fa-bars pe-3"></i>Today Estimated Price</b>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <a href="#" data-toggle="card-expand" class="text-dark text-opacity-50 text-decoration-none">
                                                        <b>
                                                            <i class="bi bi-fullscreen"></i>
                                                        </b>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body ">
                                            <!-- BEGIN title -->
                                            <div class="d-flex fw-bold small mb-3">
                                                <span class="flex-grow-1"></span>
                                                <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"></a>
                                            </div>
                                            <!-- END title -->
                                            <!-- BEGIN stat-lg -->
                                            <div class="row align-items-center mb-2">
                                                <div class="text-center">
                                                    <h2 class="mb-0" id="price_today">Rp. 0,-</h2>
                                                </div>
                                            </div>

                                            <!-- END stat-sm -->
                                        </div>
                                        <!-- END card-body -->

                                        <!-- BEGIN card-arrow -->
                                        <div class="card-arrow">
                                                <div class="card-arrow-top-left"></div>
                                                <div class="card-arrow-top-right"></div>
                                                <div class="card-arrow-bottom-left"></div>
                                                <div class="card-arrow-bottom-right"></div>
                                        </div>
                                        <!-- END card-arrow -->
                                    </div>

                                    <div class="card mb-3 bg-light border-theme bg-opacity-25 mb-3">
                            <!-- BEGIN card-body -->
                                        <div class="card-header bg-success text-dark">
                                            <div class="row">
                                                <div class="col-8">
                                                    <b><i class="fas fa-bars pe-3"></i>Yesterday Price</b>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <a href="#" data-toggle="card-expand" class="text-dark text-opacity-50 text-decoration-none">
                                                        <b>
                                                            <i class="bi bi-fullscreen"></i>
                                                        </b>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body ">
                                            <!-- BEGIN title -->
                                            <div class="d-flex fw-bold small mb-3">
                                                <span class="flex-grow-1"></span>
                                                <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"></a>
                                            </div>
                                            <!-- END title -->
                                            <!-- BEGIN stat-lg -->
                                            <div class="row align-items-center mb-2">
                                                <div class="text-center">
                                                    <h2 class="mb-0" id="price_yesterday">Rp. 0,-</h2>
                                                </div>
                                            </div>

                                            <!-- END stat-sm -->
                                        </div>
                                        <!-- END card-body -->

                                        <!-- BEGIN card-arrow -->
                                        <div class="card-arrow">
                                                <div class="card-arrow-top-left"></div>
                                                <div class="card-arrow-top-right"></div>
                                                <div class="card-arrow-bottom-left"></div>
                                                <div class="card-arrow-bottom-right"></div>
                                        </div>
                                        <!-- END card-arrow -->
                                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-5 col-xl-4">
                    <div class="card mb-3">
                        <!-- BEGIN card-body -->
                        <div class="card-header bg-success text-dark">
                            <div class="row">
                                <div class="col-8">
                                    <b><i class="fas fa-bars pe-3"></i>History 1st Floor</b>
                                </div>
                                <div class="col-4 text-end">
                                    <a href="#" data-toggle="card-expand" class="text-dark text-opacity-50 text-decoration-none">
                                        <b>
                                            <i class="bi bi-fullscreen"></i>
                                        </b>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- BEGIN title -->
                            
                            <!-- END title -->
                            <!-- BEGIN stat-lg -->
                            <div class="row align-items-center mb-2">
                                
                                <div class='col-12'>
                                    <div id='chart1'></div>
                                </div>

                            </div>

                            <!-- END stat-sm -->
                        </div>
                        <!-- END card-body -->

                        <!-- BEGIN card-arrow -->
                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>
                        <!-- END card-arrow -->
                    </div>
                </div>
                
                <div class="col-12 col-md-12 col-lg-5 col-xl-4">
                    <div class="card mb-3">
                        <!-- BEGIN card-body -->
                        <div class="card-header bg-success text-dark">
                            <div class="row">
                                <div class="col-8">
                                    <b><i class="fas fa-bars pe-3"></i>History 2nd Floor </b>
                                </div>
                                <div class="col-4 text-end">
                                    <a href="#" data-toggle="card-expand" class="text-dark text-opacity-50 text-decoration-none">
                                        <b>
                                            <i class="bi bi-fullscreen"></i>
                                        </b>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- BEGIN title -->
                           
                            <!-- END title -->
                            <!-- BEGIN stat-lg -->
                            <div class="row align-items-center mb-2">
                                
                                <div class='col-12'>
                                    <div id='chart2'></div>
                                </div>

                            </div>

                            <!-- END stat-sm -->
                        </div>
                        <!-- END card-body -->

                        <!-- BEGIN card-arrow -->
                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>
                        <!-- END card-arrow -->
                    </div>
                </div>
               
                </div>


            </div>
        </div>
    </div>
    <script src="assets/js/mqtt.js"></script>
  
    <script>
    var wait = 0
    function getFeed() {
        $.ajax({
            url: 'api/api_office.php',
            type: 'POST',
            success: function(data) {
                var checkbox = document.getElementById("cb");
               
                var checkboxValue = checkbox.checked;
                if (checkbox.checked) {
                    wait++       
                } else {
                    // If not checked, do nothing or perform another action
                    console.log("Checkbox is not checked. Page not changed.");
                }
                if (wait >= 15){
                    window.location.href = 'index.php?page=oee';
                }
                all = data;
                a = all.number
                

                ///
                var loby = 0;
                var jalan = 0;
                var assembly = 0;
                var engineer = 0;
                var kantor = 0;
                var akunting = 0;
                var meeting = 0;

                    
                    loby=a[0].loby;
                    jalan=a[0].jalan;
                    engineer=a[0].engineer;
                    assembly=a[0].assembly;
                    kantor=a[0].kantor;
                    akunting=a[0].akunting;
                    meeting=a[0].meeting;
                    // RULE LOBY
                      if(loby==0){
                        document.getElementById('lobi').src = "http://www.demo.lestariautomation.com/assets/img/bas/lobi-off.png";
                      }
                      else if(loby==1){
                        document.getElementById("lobi").src = "http://www.demo.lestariautomation.com/assets/img/bas/lobi-on.png";
                      }
                    // END LOBY

                    // RULE JALAN
                      if(jalan==0){
                        document.getElementById('jalan').src = "http://www.demo.lestariautomation.com/assets/img/bas/jalan-off.png";
                      }
                      else if(jalan==1){
                        document.getElementById("jalan").src = "http://www.demo.lestariautomation.com/assets/img/bas/jalan-on.png";
                      }
                    // END JALAN

                    // RULE ENGINEER
                      if(engineer==0){
                        document.getElementById('engineer').src = "http://www.demo.lestariautomation.com/assets/img/bas/engineer-off.png";
                      }
                      else if(engineer==1){
                        document.getElementById("engineer").src = "http://www.demo.lestariautomation.com/assets/img/bas/engineer-on.png";
                      }
                    // END ENGINEER

                    // RULE ASSEMBLY
                      if(assembly==0){
                        document.getElementById('assembly').src = "http://www.demo.lestariautomation.com/assets/img/bas/assembly-off.png";
                      }
                      else if(assembly==1){
                        document.getElementById("assembly").src = "http://www.demo.lestariautomation.com/assets/img/bas/assembly-on.png";
                      }
                    // END ASSEMBLY

                    // RULE AKUNTING
                      if(akunting==0){
                        document.getElementById('akunting').src = "http://www.demo.lestariautomation.com/assets/img/bas/akunting-off.png";
                      }
                      else if(akunting==1){
                        document.getElementById("akunting").src = "http://www.demo.lestariautomation.com/assets/img/bas/akunting-on.png";
                      }
                    // END LOBY

                    // KANTOR RULE
                      if(kantor==0){
                        document.getElementById('kantor').src = "http://www.demo.lestariautomation.com/assets/img/bas/kantor-off.png";
                      }
                      else if(kantor==1){
                        document.getElementById("kantor").src = "http://www.demo.lestariautomation.com/assets/img/bas/kantor-on.png";
                      }
                    // END KANTOR 


                    // KANTOR MEETING
                      if(meeting==0){
                        document.getElementById('meeting').src = "http://www.demo.lestariautomation.com/assets/img/bas/meeting-off.png";
                      }
                      else if(meeting==1){
                        document.getElementById("meeting").src = "http://www.demo.lestariautomation.com/assets/img/bas/meeting-on.png";
                      }
                    // END MEETING     

                      console.log(a);
                jQuery('#last_update').html('last update: ' + a[0].date+ ' WIB');
                jQuery('#price_today').html(new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(a[0].RP_today) + ''); // <h2 class="mb-0" id="price_today">Rp. 0,-</h2>
                jQuery('#price_yesterday').html(new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(a[0].RP_yesterday) + '');
                jQuery('#kwh_today').html(parseFloat(a[0].kWh_today).toFixed(2) + ' kWH');
                jQuery('#kwh_yesterday').html(parseFloat(a[0].kWh_yesterday).toFixed(2) + ' kWH');

                jQuery('#l1_kwh').html(parseFloat(a[0].L1_kWh).toFixed(1) + ' kWH');
                jQuery('#l1_v').html(parseFloat(a[0].L1_V).toFixed(1) + ' V');
                jQuery('#l1_i').html(parseFloat(a[0].L1_I).toFixed(1) + ' A');
                jQuery('#l1_kw').html(parseFloat(a[0].L1_kW).toFixed(1) + ' kW');
                jQuery('#l1_temp_c').html(parseFloat(a[0].L1_temp/100).toFixed(2) + ' C');
                jQuery('#l1_hum').html(parseFloat(a[0].L1_hum/100).toFixed(2) + ' %');

                jQuery('#l2_kwh').html(parseFloat(a[0].L2_kWh).toFixed(1) + ' kWH');
                jQuery('#l2_v').html(parseFloat(a[0].L2_V).toFixed(1) + ' V');
                jQuery('#l2_i').html(parseFloat(a[0].L2_I).toFixed(1) + ' A');
                jQuery('#l2_kw').html(parseFloat(a[0].L2_kW).toFixed(1) + ' kW');
                jQuery('#l2_temp_c').html(parseFloat(a[0].L2_temp/100).toFixed(2) + ' C');
                jQuery('#l2_hum').html(parseFloat(a[0].L2_hum/100).toFixed(2) + ' %');
                
                // chart1.updateSeries([a[0].a]);
                // chart2.updateSeries([a[0].p]);
                // chart3.updateSeries([a[0].q]);
                // chart4.updateSeries([a[0].o]);
                
                ag = all.graphic
                // console.log(ag);
                bava = [];
                bperf = [];
                bqua = [];
                boee = [];

                for (let i = ag.length - 1; i > 0; i--) {
                    
                    cir = parseFloat(ag[i].v).toFixed(2);
                    cis = parseFloat(ag[i].i).toFixed(2);
                    cit = parseFloat(ag[i].kw).toFixed(2);
                    yyy = parseFloat(ag[i].f).toFixed(2);

                    const originalDate = new Date(ag[i].datetime);
                    const newDate = new Date(originalDate);

                    // Adding 5 hours
                    newDate.setHours(newDate.getHours() + 7);

                    d = newDate.toISOString();

                    dt = d.split('T')[1];
                    dz = dt.split('.')[0];


                    fi = {
                        'x': dz,
                        'y': cir
                    }
                    fi1 = {
                        'x': dz,
                        'y': cis
                    }
                    fi2 = {
                        'x': dz,
                        'y': cit
                    }
                    fi3 = {
                        'x': dz,
                        'y': yyy
                    }

                  

                    bava.push(fi);
                    bperf.push(fi1);
                    bqua.push(fi2);
                    boee.push(fi3);

                }
                
                chart1.updateSeries([{
                    name: 'V',
                    data: bava
                }, {
                    name: 'I',
                    data: bqua
                }, {
                    name: 'kW',
                    data: bperf
                }, {
                    name: 'f',
                    data: boee
                }]);

                ag2 = all.graphic2
                // console.log(ag);
                bava2 = [];
                bperf2 = [];
                bqua2 = [];
                boee2 = [];

                for (let i2 = ag2.length - 1; i2 > 0; i2--) {
                    
                    cir2 = parseFloat(ag2[i2].v).toFixed(2);
                    cis2 = parseFloat(ag2[i2].i).toFixed(2);
                    cit2 = parseFloat(ag2[i2].kw).toFixed(2);
                    yyy2 = parseFloat(ag2[i2].f).toFixed(2);

                    const originalDate2 = new Date(ag2[i2].datetime);
                    const newDate2 = new Date(originalDate2);

                    // Adding 5 hours
                    newDate2.setHours(newDate2.getHours() + 7);

                    d2 = newDate2.toISOString();

                    dt2 = d2.split('T')[1];
                    dz2 = dt2.split('.')[0];


                    fi2 = {
                        'x': dz2,
                        'y': cir2
                    }
                    fi12 = {
                        'x': dz2,
                        'y': cis2
                    }
                    fi22= {
                        'x': dz2,
                        'y': cit2
                    }
                    fi32 = {
                        'x': dz2,
                        'y': yyy2
                    }

                  

                    bava2.push(fi2);
                    bperf2.push(fi12);
                    bqua2.push(fi22);
                    boee2.push(fi32);

                }
                
                chart2.updateSeries([{
                    name: 'V',
                    data: bava2
                }, {
                    name: 'I',
                    data: bqua2
                }, {
                    name: 'kW',
                    data: bperf2
                }, {
                    name: 'f',
                    data: boee2
                }]);

                
                
               
            }
        });
    };

    setInterval(getFeed, 1000);

    var options = {
          series: [0],
          chart: {
          height: 300,
          type: 'radialBar',
        },
        plotOptions: {
          radialBar: {
            hollow: {
              size: '60%',
            },
            dataLabels: {
                show: true,
                name: {
                    offsetY: -10,
                    show: false,
                    color: 'white',
                    fontSize: '12px'
                },
                value: {
                    formatter: function(val) {
                    return parseFloat(val).toFixed(2) + '%';
                    },
                    color: 'white',
                    fontSize: '36px',
                    show: true,
                }
            }
          },
         
        },
        
        labels: ['AVA'],
        };

    
    // var chart3 = new ApexCharts(document.querySelector("#chartqua"), options);
    // chart3.render();
    // var chart4 = new ApexCharts(document.querySelector("#chartoee"), options);
    // chart4.render();

    var options1 = {
        series: [],
        chart: {
            height: 250,
            type: 'area'
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'straight'
        },
        grid: {
            show: true,
            borderColor: '#90A4AE',
            strokeDashArray: 0,
            position: 'back',
            xaxis: {
                lines: {
                    show: true
                }
            }
        },
        legend: {
            labels: {
                colors: '#ffffff', // Set legend text color to white
            },
        },
        xaxis: {

            labels: {
                style: {
                    colors: '#fff'
                }
            }
        },
        yaxis: {
            labels: {
                style: {
                    colors: '#fff'
                }
            }
        }
    };
    var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
    chart1.render();
    var chart2 = new ApexCharts(document.querySelector("#chart2"), options1);
    chart2.render();


   
    
    
</script>
    <script>
    function refreshTime() {
        const timeDisplay = document.getElementById("time");
        const dateString = new Date().toLocaleString();
        const formattedString = dateString.replace(", ", " - ");
        timeDisplay.textContent = formattedString;
    }
    setInterval(refreshTime, 1000);
    </script>
    
    <?php include 'resources/layout/app_end.php'; ?>