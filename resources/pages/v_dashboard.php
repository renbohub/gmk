<?php include 'resources/layout/app_start.php'; ?>
<script src="assets/plugins/hightchart/code/highcharts.js"></script>
<script src="assets/plugins/hightchart/code/highcharts-more.js"></script>
<script src="assets/plugins/hightchart/code/modules/exporting.js"></script>
<script src="assets/plugins/hightchart/code/modules/export-data.js"></script>
<script src="assets/plugins/hightchart/code/modules/accessibility.js"></script>
<style>
    .gauge-size{
	 	width: 95%;
	 	height: 180px;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-white bg-opacity-25 rounded">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLight">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarLight">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0 text-end">
                <?php
                $id = $_GET['id'];
                ?>
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

        <div class="container-fluid pt-0">
            <div class="row">
            <div class="col-6">
                    <h2 class="text-start">Monitoring Utility Machine</h2>
                </div>
                <div class="col-6">
                    <h5 class="text-end" id="last_update">0</h5>
                </div>
               
                <div class="col-12 col-md-12 col-lg-5 col-xl-4">
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
                        <div class="card-body">
                            <!-- BEGIN title -->
                            <div class="d-flex fw-bold small mb-3">

                                <a href="#" data-toggle="card-expand"
                                    class="text-white text-opacity-50 text-decoration-none"><i
                                        class="bi bi-fullscreen"></i></a>
                            </div>
                            <!-- END title -->
                            <!-- BEGIN stat-lg -->
                            <div class="row align-items-center mb-2">
                                <div class="col-4">
                                    <span class="flex-grow-1">Temp-C</span>
                                    <h3 class="mb-0" id="temp_c"></h3>
                                </div>
                                <div class="col-4">
                                    <span class="flex-grow-1">Temp-F</span>
                                    <h3 class="mb-0" id="temp_f"></h3>
                                </div>
                                <div class="col-4">
                                    <span class="flex-grow-1">Humidity</span>
                                    <h3 class="mb-0" id="humidity"></h3>
                                </div>

                                <div class='col-12'>
                                    <div id='chart'></div>
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
                                    <b><i class="fas fa-bars pe-3"></i>Power Usage</b>
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
                            <div class="d-flex fw-bold small mb-3">

                                <a href="#" data-toggle="card-expand"
                                    class="text-white text-opacity-50 text-decoration-none"><i
                                        class="bi bi-fullscreen"></i></a>
                            </div>
                            <!-- END title -->
                            <!-- BEGIN stat-lg -->
                            <div class="row align-items-center mb-2">
                                <div class="col-4">
                                    <span class="flex-grow-1">V-A</span>
                                    <h3 class="mb-0" id="v_a"></h3>
                                </div>
                                <div class="col-4">
                                    <span class="flex-grow-1">V-B</span>
                                    <h3 class="mb-0" id="v_b"></h3>
                                </div>
                                <div class="col-4">
                                    <span class="flex-grow-1">V-C</span>
                                    <h3 class="mb-0" id="v_c"></h3>
                                </div>
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
                                    <b><i class="fas fa-bars pe-3"></i>Vibration </b>
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
                            <div class="d-flex fw-bold small mb-3">

                                <a href="#" data-toggle="card-expand"
                                    class="text-white text-opacity-50 text-decoration-none"><i
                                        class="bi bi-fullscreen"></i></a>
                            </div>
                            <!-- END title -->
                            <!-- BEGIN stat-lg -->
                            <div class="row align-items-center mb-2">
                                <div class="col-3">
                                    <span class="flex-grow-1">X-RMS</span>
                                    <h3 class="mb-0" id="x_rms"></h3>
                                </div>
                                <div class="col-3">
                                    <span class="flex-grow-1">X-PEAK</span>
                                    <h3 class="mb-0" id="x_peak"></h3>
                                </div>
                                <div class="col-3">
                                    <span class="flex-grow-1">Z-RMS</span>
                                    <h3 class="mb-0" id="z_rms"></h3>
                                </div>
                                <div class="col-3">
                                    <span class="flex-grow-1">Z-PEAK</span>
                                    <h3 class="mb-0" id="z_peak"></h3>
                                </div>
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
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-2">
                            <div class="card mb-3">
                            <!-- BEGIN card-body -->
                                <div class="card-header bg-success text-dark">
                                    <div class="row">
                                        <div class="col-8">
                                            <b><i class="fas fa-bars pe-3"></i>Pressure - 1</b>
                                        </div>
                                        <div class="col-4 text-end">
                                            <a href="#" data-toggle="card-expand" class="text-dark text-opacity-50 text-decoration-none">
                                                <b>
                                                <i
                                            class="bi bi-fullscreen"></i>
                                                </b></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- BEGIN title -->
                                    <div  id="gaugedata_1" class="gauge-size"></div>

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
                        <div class="col-xl-2">
                        <div class="card mb-3">
                        <div class="card-header bg-success text-dark">
                                    <div class="row">
                                        <div class="col-8">
                                            <b><i class="fas fa-bars pe-3"></i>Pressure - 1</b>
                                        </div>
                                        <div class="col-4 text-end">
                                            <a href="#" data-toggle="card-expand" class="text-dark text-opacity-50 text-decoration-none">
                                                <b>
                                                <i
                                            class="bi bi-fullscreen"></i>
                                                </b></a>
                                        </div>
                                    </div>
                                </div>
                        <!-- BEGIN card-body -->
                        <div class="card-body">
                            <!-- BEGIN title -->
                            <div  id="gaugedata_2" class="gauge-size"></div>

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
                        <div class="col-xl-2">
                        <div class="card mb-3">
                        <div class="card-header bg-success text-dark">
                                    <div class="row">
                                        <div class="col-8">
                                            <b><i class="fas fa-bars pe-3"></i>Pressure - 1</b>
                                        </div>
                                        <div class="col-4 text-end">
                                            <a href="#" data-toggle="card-expand" class="text-dark text-opacity-50 text-decoration-none">
                                                <b>
                                                <i
                                            class="bi bi-fullscreen"></i>
                                                </b></a>
                                        </div>
                                    </div>
                                </div>
                        <!-- BEGIN card-body -->
                        <div class="card-body">
                            <!-- BEGIN title -->
                            <div  id="gaugedata_3" class="gauge-size"></div>

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
                        <div class="col-xl-2">
                            <div class="card mb-3">
                            <div class="card-header bg-success text-dark">
                                        <div class="row">
                                            <div class="col-8">
                                                <b><i class="fas fa-bars pe-3"></i>Pressure - 1</b>
                                            </div>
                                            <div class="col-4 text-end">
                                                <a href="#" data-toggle="card-expand" class="text-dark text-opacity-50 text-decoration-none">
                                                    <b>
                                                    <i
                                                class="bi bi-fullscreen"></i>
                                                    </b></a>
                                            </div>
                                        </div>
                                    </div>
                            <!-- BEGIN card-body -->
                            <div class="card-body">
                                <!-- BEGIN title -->
                                <div  id="gaugedata_4" class="gauge-size"></div>

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
                        <div class="col-xl-2">
                            <div class="card mb-3">
                            <div class="card-header bg-success text-dark">
                                        <div class="row">
                                            <div class="col-8">
                                                <b><i class="fas fa-bars pe-3"></i>Oxygent</b>
                                            </div>
                                            <div class="col-4 text-end">
                                                <a href="#" data-toggle="card-expand" class="text-dark text-opacity-50 text-decoration-none">
                                                    <b>
                                                    <i
                                                class="bi bi-fullscreen"></i>
                                                    </b></a>
                                            </div>
                                        </div>
                                    </div>
                            <!-- BEGIN card-body -->
                            <div class="card-body">
                                <!-- BEGIN title -->
                                <div  id="gaugedata_5" class="gauge-size"></div>

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
                        <div class="col-xl-2">
                            <div class="card mb-3">
                            <div class="card-header bg-success text-dark">
                                        <div class="row">
                                            <div class="col-8">
                                                <b><i class="fas fa-bars pe-3"></i>CO</b>
                                            </div>
                                            <div class="col-4 text-end">
                                                <a href="#" data-toggle="card-expand" class="text-dark text-opacity-50 text-decoration-none">
                                                    <b>
                                                    <i
                                                class="bi bi-fullscreen"></i>
                                                    </b></a>
                                            </div>
                                        </div>
                                    </div>
                            <!-- BEGIN card-body -->
                            <div class="card-body">
                                <!-- BEGIN title -->
                                <div  id="gaugedata_6" class="gauge-size"></div>

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

                <div class="col-6 col-md-6 col-lg-3 col-xl-2">
                    <div class="card mb-3">
                        <!-- BEGIN card-body -->
                        
                        <div class="card-body">
                            <!-- BEGIN title -->
                            <div class="d-flex fw-bold small mb-3">
                                <span class="flex-grow-1">Pressure -1 </span>
                                <a href="#" data-toggle="card-expand"
                                    class="text-white text-opacity-50 text-decoration-none"><i
                                        class="bi bi-fullscreen"></i></a>
                            </div>
                            <!-- END title -->
                            <!-- BEGIN stat-lg -->
                            <div class="row align-items-center mb-2">
                                <div class="col-7">
                                    <h3 class="mb-0" id="p_1"></h3>
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
                <div class="col-6 col-md-6 col-lg-3 col-xl-2">
                    <div class="card mb-3">
                        <!-- BEGIN card-body -->
                        <div class="card-body">
                            <!-- BEGIN title -->
                            <div class="d-flex fw-bold small mb-3">
                                <span class="flex-grow-1">Pressure - 2</span>
                                <a href="#" data-toggle="card-expand"
                                    class="text-white text-opacity-50 text-decoration-none"><i
                                        class="bi bi-fullscreen"></i></a>
                            </div>
                            <!-- END title -->
                            <!-- BEGIN stat-lg -->
                            <div class="row align-items-center mb-2">
                                <div class="col-7">
                                    <h3 class="mb-0" id="p_2"></h3>
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
                <div class="col-6 col-md-6 col-lg-3 col-xl-2">
                    <div class="card mb-3">
                        <!-- BEGIN card-body -->
                        <div class="card-body">
                            <!-- BEGIN title -->
                            <div class="d-flex fw-bold small mb-3">
                                <span class="flex-grow-1">Pressure - 3</span>
                                <a href="#" data-toggle="card-expand"
                                    class="text-white text-opacity-50 text-decoration-none"><i
                                        class="bi bi-fullscreen"></i></a>
                            </div>
                            <!-- END title -->
                            <!-- BEGIN stat-lg -->
                            <div class="row align-items-center mb-2">
                                <div class="col-7">
                                    <h3 class="mb-0" id="p_3"></h3>
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
                <div class="col-12 col-md-12 col-lg-3 col-xl-2">
                    <div class="card mb-3">
                        <!-- BEGIN card-body -->
                        <div class="card-body">
                            <!-- BEGIN title -->
                            <div class="d-flex fw-bold small mb-3">
                                <span class="flex-grow-1">Pressure - 4</span>
                                <a href="#" data-toggle="card-expand"
                                    class="text-white text-opacity-50 text-decoration-none"><i
                                        class="bi bi-fullscreen"></i></a>
                            </div>
                            <!-- END title -->
                            <!-- BEGIN stat-lg -->
                            <div class="row align-items-center mb-2">
                                <div class="col-7">
                                    <h3 class="mb-0" id="p_4"></h3>
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
                <div class="col-6 col-md-6 col-lg-3 col-xl-2">
                    <div class="card mb-3">
                        <!-- BEGIN card-body -->
                        <div class="card-body">
                            <!-- BEGIN title -->
                            <div class="d-flex fw-bold small mb-3">
                                <span class="flex-grow-1">Oxygent</span>
                                <a href="#" data-toggle="card-expand"
                                    class="text-white text-opacity-50 text-decoration-none"><i
                                        class="bi bi-fullscreen"></i></a>
                            </div>
                            <!-- END title -->
                            <!-- BEGIN stat-lg -->
                            <div class="row align-items-center mb-2">
                                <div class="col-7">
                                    <h3 class="mb-0" id="o1"></h3>
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
                <div class="col-6 col-md-6 col-lg-3 col-xl-2">
                    <div class="card mb-3">
                        <!-- BEGIN card-body -->
                        <div class="card-body">
                            <!-- BEGIN title -->
                            <div class="d-flex fw-bold small mb-3">
                                <span class="flex-grow-1">CO2</span>
                                <a href="#" data-toggle="card-expand"
                                    class="text-white text-opacity-50 text-decoration-none"><i
                                        class="bi bi-fullscreen"></i></a>
                            </div>
                            <!-- END title -->
                            <!-- BEGIN stat-lg -->
                            <div class="row align-items-center mb-2">
                                <div class="col-7">
                                    <h3 class="mb-0" id="co2"></h3>
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
    <script src="assets/js/mqtt.js"></script>
    <script>
         var wait = 0
    function getFeed() {
        $.ajax({
            url: 'api/api_utility.php',
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
                if (wait >= 5){
                    window.location.href = 'index.php?page=office';
                }
                all = data;
                a = all.number
                
                const originalDateTime = new Date("" + a[0].datetime + "");

                // Add 5 hours
                const newDateTime = new Date(originalDateTime.getTime() + 0 * 60 * 60 * 1000);

                // Format as "dd-mm-yyyy hh:mm:ss"
                const formattedDateTime =
                    `${String(newDateTime.getDate()).padStart(2, '0')}-${String(newDateTime.getMonth() + 1).padStart(2, '0')}-${newDateTime.getFullYear()} ` +
                    `${String(newDateTime.getHours()).padStart(2, '0')}:${String(newDateTime.getMinutes()).padStart(2, '0')}:${String(newDateTime.getSeconds()).padStart(2, '0')}`;
                jQuery('#last_update').html('last update: ' + formattedDateTime + ' WIB');
                jQuery('#project_name').html(a[0].project_name);
                
                jQuery('#temp_f').html(parseFloat(a[0].temp_f).toFixed(2) + ' F');
                jQuery('#temp_c').html(parseFloat(a[0].temp_c).toFixed(2) + ' C');
                jQuery('#humidity').html(parseFloat(a[0].humidity).toFixed(2) + ' %');
                jQuery('#v_a').html(parseFloat(a[0].va).toFixed(2) + ' V');
                jQuery('#v_b').html(parseFloat(a[0].vb).toFixed(2) + ' V');
                jQuery('#v_c').html(parseFloat(a[0].vc).toFixed(2) + ' V');
                
                jQuery('#z_rms').html(parseFloat(a[0].z_rms).toFixed(0) + ' in/sec');
                jQuery('#z_peak').html(parseFloat(a[0].z_peak).toFixed(0) + ' ');
                jQuery('#x_rms').html(parseFloat(a[0].x_rms).toFixed(0) + ' in/sec');
                jQuery('#x_peak').html(parseFloat(a[0].x_peak).toFixed(0) + ' ');
                jQuery('#p_1').html(parseFloat(a[0].press_1).toFixed(2) + ' psi');
                jQuery('#p_2').html(parseFloat(a[0].press_2).toFixed(2) + ' psi');
                jQuery('#p_3').html(parseFloat(a[0].press_3).toFixed(2) + ' psi');
                jQuery('#p_4').html(parseFloat(a[0].press_4).toFixed(2));
                jQuery('#o1').html(parseFloat(a[0].o).toFixed(2));
                jQuery('#co2').html(parseFloat(a[0].co).toFixed(2));
                jQuery('#c_tot').html(parseFloat(a[0].pf_tot).toFixed(2));
                jQuery('#freq').html(parseFloat(a[0].freq).toFixed(2) + ' hZ');
                jQuery('#e').html(parseFloat(a[0].kwt).toFixed(2) + ' kWH');
                jQuery('#e2').html(parseFloat(a[0].kwt).toFixed(2) + ' kWH');
                jQuery('#s').html(parseFloat(a[0].vat).toFixed(2) +' kVA');
                ag = all.graphic
                b = [];
                bst = [];
                btr = [];
                b1 = [];
                brn = [];
                bsn = [];
                btn = [];
                btt = [];
                bir = [];
                bis = [];
                bit = [];
                biy = [];

                for (let i = ag.length - 1; i > 0; i--) {
                    c = parseFloat(ag[i].temp_c).toFixed(2);
                    cst = parseFloat(ag[i].temp_f).toFixed(2);
                    ctr = parseFloat(ag[i].humidity).toFixed(2);
                    crn = parseFloat(ag[i].va).toFixed(2);
                    csn = parseFloat(ag[i].vb).toFixed(2);
                    ctn = parseFloat(ag[i].vc).toFixed(2);
                    ctt = parseFloat(ag[i].va).toFixed(2);
                    cir = parseFloat(ag[i].x_rms).toFixed(2);
                    cis = parseFloat(ag[i].x_peak).toFixed(2);
                    cit = parseFloat(ag[i].z_rms).toFixed(2);
                    yyy = parseFloat(ag[i].z_peak).toFixed(2);

                    const originalDate = new Date(ag[i].datetime);
                    const newDate = new Date(originalDate);

                    // Adding 5 hours
                    newDate.setHours(newDate.getHours() + 7);

                    d = newDate.toISOString();

                    dt = d.split('T')[1];
                    dz = dt.split('.')[0];

                    f = {
                        'x': dz,
                        'y': c
                    }
                    f1 = {
                        'x': dz,
                        'y': cst
                    }
                    f2 = {
                        'x': dz,
                        'y': ctr
                    }

                    fc = {
                        'x': dz,
                        'y': crn
                    }
                    fc1 = {
                        'x': dz,
                        'y': csn
                    }
                    fc2 = {
                        'x': dz,
                        'y': ctn
                    }
                    fc3 = {
                        'x': dz,
                        'y': ctt
                    }

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

                    b.push(f);
                    bst.push(f1);
                    btr.push(f2);

                    brn.push(fc);
                    bsn.push(fc1);
                    btn.push(fc2);
                    btt.push(fc3);

                    bir.push(fi);
                    bis.push(fi1);
                    bit.push(fi2);
                    biy.push(fi3);

                }
                console.log(b);
                chart.updateSeries([{
                    name: 'V-RS',
                    data: b
                }, {
                    name: 'V-ST',
                    data: bst
                }, {
                    name: 'V-TR',
                    data: btr
                }]);

                chart1.updateSeries([{
                    name: 'P-R',
                    data: brn
                }, {
                    name: 'P-S',
                    data: bsn
                }, {
                    name: 'P-T',
                    data: btn
                }, {
                    name: 'P-Tot',
                    data: btt
                }]);

                chart1.updateOptions({
                    yaxis: {
                        labels: {
                            style: {
                                colors: '#fff'
                            }
                        },

                    }
                });
                chart2.updateSeries([{
                    name: 'I-R',
                    data: bir
                }, {
                    name: 'I-S',
                    data: bis
                }, {
                    name: 'I-T',
                    data: bit
                }, {
                    name: 'I-T',
                    data: biy
                }]);

                chart2.updateOptions({
                    yaxis: {
                        labels: {
                            style: {
                                colors: '#fff'
                            }
                        },

                    }
                })
            }
        });
    };

    setInterval(getFeed, 3000);


    var options = {
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


    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
    var chart1 = new ApexCharts(document.querySelector("#chart1"), options);
    chart1.render();
    var chart2 = new ApexCharts(document.querySelector("#chart2"), options);
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
    
    <script>
        var opt = {
            chart: {
                type: 'gauge',
                alignTicks: false,
                backgroundColor: 'rgba(0,0,0,0)',
                plotBackgroundColor: 'rgba(0,0,0,0)',
                plotBackgroundImage: null,
                plotBorderWidth: 0,
                plotShadow: false
            },
            title: {
                text: ''
            },
            credits: {
                enabled: false
            },
            pane : {
                startAngle: -115,
                endAngle: 115,
                size: '90%',
                // background: [{
                //     backgroundColor: {
                //     linearGradient: { x1: 0, x2: 0, y1: 0, y2: 1 },
                //     stops: [
                //         [0, '#03cffc'],
                //         [1, '#6bfabc']
                //     ]
                // },
                //     borderWidth: 0,
                //     outerRadius: '108%',
                //     innerRadius: '101%'
                // }]
             },
            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: true,
                useHTML: true,
                pointFormat: '<center> {point.y} psi</center>',
                valueDecimals: 1
            },

                    // the value axis
            yAxis: {
                min: 0,
                max: 100,
                minorTickInterval: 'auto',
                minorTickWidth: 1,
                minorTickLength: 6,
                minorTickPosition: 'inside',
                minorTickColor: 'grey',
                tickPixelInterval: '50',
                tickWidth: 2,
                tickPosition: 'inside',
                tickLength: 8,
                tickColor: 'grey',
                labels: {
                    step: 1,
                    rotation: 'auto',
                    style: {
                        fontSize: '8',
                        fontFamily: 'arial',
                        color: 'black'
                    }
                },
                title: {
                    text: 'Psi',
                    style: {
                        fontSize: '10',
                        fontFamily: 'arial',
                         color: 'black'
                    },
                    y: 90
                },
                plotBands: [{
                    from: 0,
                    to: 50,
                    color: '#55BF3B',
                    thickness:3,
                    outerRadius: 28 // green
                    }, {
                    from: 50,
                    to: 80,
                    color: '#DDDF0D',
                    thickness:3,
                    outerRadius: 28 // yellow
                    }, {
                    from: 80,
                    to: 100,
                    color: '#DF5353',
                    thickness:3,
                    outerRadius: 28 // red
                    }
                ],
            },
            plotOptions: {
                series: {
                    dial:{
                        rearLength: '20%',
                        baseWidth: 4,
                        backgroundColor: 'red'
                    },
                    pivot: {
                    backgroundColor: 'grey'
                    },
                    dataLabels: {
                        enabled: true,
                        format: "{point.y:.1f}",
                        align:'center',
                        backgroundColor: 'white',
                        y: 26,
                        style: {
                            fontSize: '10',
                            fontFamily: 'arial',
                            color: 'black',
                            plotShadow: true
                        }
                    }
                }
            },
            series: [{
                name: 'Pressure',
                data: [80]
            }],
        }
        var opt1 = {
            chart: {
                type: 'gauge',
                alignTicks: false,
                backgroundColor: 'rgba(0,0,0,0)',
                plotBackgroundColor: 'rgba(0,0,0,0)',
                plotBackgroundImage: null,
                plotBorderWidth: 0,
                plotShadow: false
            },
            title: {
                text: ''
            },
            credits: {
                enabled: false
            },
            pane : {
                startAngle: -115,
                endAngle: 115,
                size: '90%',
                // background: [{
                //     backgroundColor: {
                //     linearGradient: { x1: 0, x2: 0, y1: 0, y2: 1 },
                //     stops: [
                //         [0, '#03cffc'],
                //         [1, '#6bfabc']
                //     ]
                // },
                //     borderWidth: 0,
                //     outerRadius: '108%',
                //     innerRadius: '101%'
                // }]
             },
            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: true,
                useHTML: true,
                pointFormat: '<center> {point.y} psi</center>',
                valueDecimals: 1
            },

                    // the value axis
            yAxis: {
                min: 0,
                max: 100,
                minorTickInterval: 'auto',
                minorTickWidth: 1,
                minorTickLength: 6,
                minorTickPosition: 'inside',
                minorTickColor: 'grey',
                tickPixelInterval: '50',
                tickWidth: 2,
                tickPosition: 'inside',
                tickLength: 8,
                tickColor: 'grey',
                labels: {
                    step: 1,
                    rotation: 'auto',
                    style: {
                        fontSize: '8',
                        fontFamily: 'arial',
                        color: 'black'
                    }
                },
                title: {
                    text: '%',
                    style: {
                        fontSize: '10',
                        fontFamily: 'arial',
                         color: 'black'
                    },
                    y: 90
                },
                plotBands: [{
                    from: 0,
                    to: 50,
                    color: '#55BF3B',
                    thickness:3,
                    outerRadius: 28 // green
                    }, {
                    from: 50,
                    to: 80,
                    color: '#DDDF0D',
                    thickness:3,
                    outerRadius: 28 // yellow
                    }, {
                    from: 80,
                    to: 100,
                    color: '#DF5353',
                    thickness:3,
                    outerRadius: 28 // red
                    }
                ],
            },
            plotOptions: {
                series: {
                    dial:{
                        rearLength: '20%',
                        baseWidth: 4,
                        backgroundColor: 'red'
                    },
                    pivot: {
                    backgroundColor: 'grey'
                    },
                    dataLabels: {
                        enabled: true,
                        format: "{point.y:.1f}",
                        align:'center',
                        backgroundColor: 'white',
                        y: 26,
                        style: {
                            fontSize: '10',
                            fontFamily: 'arial',
                            color: 'black',
                            plotShadow: true
                        }
                    }
                }
            },
            series: [{
                name: 'o',
                data: [80]
            }],
        }
        var chartg_1 =  Highcharts.chart('gaugedata_1', opt);
        var chartg_2 =  Highcharts.chart('gaugedata_2', opt);
        var chartg_3 =  Highcharts.chart('gaugedata_3', opt);
        var chartg_4 =  Highcharts.chart('gaugedata_4', opt);
        var chartg_5 =  Highcharts.chart('gaugedata_5', opt1);
        var chartg_6 =  Highcharts.chart('gaugedata_6', opt1);

        function updateChartSeries() {
            $.ajax({
                url: 'api/api_utility.php',  // Replace with your actual data endpoint
                method: 'GET',
                dataType: 'json',
                success: function (response) {
                    // Assuming the response is a single value (e.g., {"value": 75})
                    console.log(response);
                    var newValue = response.number[0].press_1;
                    var a1 = parseInt(newValue);
                    var newValue1 = response.number[0].press_2;
                    var a2 = parseInt(newValue1);
                    var newValue2 = response.number[0].press_3;
                    var a3 = parseInt(newValue2);
                    var newValue3 = response.number[0].press_4;
                    var a4 = parseInt(newValue3);

                    chartg_1.series[0].setData([a1], true, false);
                    chartg_2.series[0].setData([a2], true, false);
                    chartg_3.series[0].setData([a3], true, false);
                    chartg_4.series[0].setData([a4], true, false);
                    
                },
                error: function (error) {
                    console.error('Error fetching data:', error);
                }
            });
        }
        setInterval(updateChartSeries, 1000);
        
        
    </script>
    <?php include 'resources/layout/app_end.php'; ?>