<?php include 'resources/layout/app_start.php'; ?>
<style>
#map {
    height: 400px;
    width: 100%;
    opacity: 0.6;
}
</style>
<div id="content" class="app-content">
    <div class="row pt-2">
        <div class="col-6">
            <h3 class="text-start">Monitoring OEE</h3>
        </div>
        <div class="col-6">
            <h5 class="text-end" id="last_update">0</h5>
        </div>
        <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <!-- background & border -->
                        <div class="card bg-light border-theme bg-opacity-25 mb-3">
                        <div class="card-header border-theme bg-theme fw-bold small text-dark">Machine</div>
                        <div class="card-body text-center">
                            <img src="assets/images/mac.png" alt="" width="60%">
                        </div>
                        <div class="card-arrow">
                                <div class="card-arrow-top-left"></div>
                                <div class="card-arrow-top-right"></div>
                                <div class="card-arrow-bottom-left"></div>
                                <div class="card-arrow-bottom-right"></div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col">
                        <!-- background & border -->
                        <div class="card bg-light border-theme bg-opacity-25 mb-3">
                        <div class="card-header border-theme bg-theme fw-bold small text-dark">Availability</div>
                        <div class="card-body">
                        <div class="" id="chartava"></div>  
                        </div>
                        <div class="card-arrow">
                                <div class="card-arrow-top-left"></div>
                                <div class="card-arrow-top-right"></div>
                                <div class="card-arrow-bottom-left"></div>
                                <div class="card-arrow-bottom-right"></div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col">
                        <!-- background & border -->
                        <div class="card bg-light border-theme bg-opacity-25 mb-3">
                        <div class="card-header border-theme bg-theme fw-bold small text-dark">Performance</div>
                        <div class="card-body">
                        <div class="" id="chartperf"></div>  
                        </div>
                        <div class="card-arrow">
                                <div class="card-arrow-top-left"></div>
                                <div class="card-arrow-top-right"></div>
                                <div class="card-arrow-bottom-left"></div>
                                <div class="card-arrow-bottom-right"></div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col">
                        <!-- background & border -->
                        <div class="card bg-light border-theme bg-opacity-25 mb-3">
                        <div class="card-header border-theme bg-theme fw-bold small text-dark">Quality</div>
                        <div class="card-body">
                            
                            <div class="" id="chartqua"></div>   
                        </div>
                        <div class="card-arrow">
                                <div class="card-arrow-top-left"></div>
                                <div class="card-arrow-top-right"></div>
                                <div class="card-arrow-bottom-left"></div>
                                <div class="card-arrow-bottom-right"></div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col">
                        <!-- background & border -->
                        <div class="card bg-light border-theme bg-opacity-25 mb-3">
                        <div class="card-header border-theme bg-theme fw-bold small text-dark">OEE</div>
                        <div class="card-body">
                        <div class="" id="chartoee"></div>  
                        </div>
                        <div class="card-arrow">
                                <div class="card-arrow-top-left"></div>
                                <div class="card-arrow-top-right"></div>
                                <div class="card-arrow-bottom-left"></div>
                                <div class="card-arrow-bottom-right"></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        <div class="col-12">
            <div class="row">
                <div class="col-xl-2 col-md-6 col-sm-12">
                    <div class="card mb-3">
						<!-- BEGIN card-body -->
                        <div class="card-header bg-success text-dark">
                            <div class="row">
                                <div class="col-9">
                                    <b><i class="fas fa-bars pe-3"></i>Total OK</b>
                                </div>
                                <div class="col-3 text-end">
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
							<div class="row align-items-center mb-2 pt-3">
								<div class="col-7">
									<h3 class="mb-0"><div class="" id="total_ok">0 pcs</div></h3>
								</div>
								<div class="col-5">
									<div class="mt-n3 mb-n2" data-render="apexchart" data-type="donut" data-title="Visitors" data-height="45"></div>
								</div>
							</div>
							<!-- END stat-lg -->
							<!-- BEGIN stat-sm -->
							
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
                <div class="col-xl-2 col-md-6 col-sm-12">
                    <div class="card mb-3">
						<!-- BEGIN card-body -->
                        <div class="card-header bg-success text-dark">
                            <div class="row">
                                <div class="col-9">
                                    <b><i class="fas fa-bars pe-3"></i>Total NG</b>
                                </div>
                                <div class="col-3 text-end">
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
							<div class="row align-items-center mb-2 pt-3">
								<div class="col-7">
									<h3 class="mb-0"><div class="" id="total_ng">0 pcs</div></h3>
								</div>
								<div class="col-5">
									<div class="mt-n3 mb-n2" data-render="apexchart" data-type="donut" data-title="Visitors" data-height="45"></div>
								</div>
							</div>
							<!-- END stat-lg -->
							<!-- BEGIN stat-sm -->
							
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
                <div class="col-xl-2 col-md-6 col-sm-12">
                    <div class="card mb-3">
						<!-- BEGIN card-body -->
                        <div class="card-header bg-success text-dark">
                            <div class="row">
                                <div class="col-9">
                                    <b><i class="fas fa-bars pe-3"></i>Target</b>
                                </div>
                                <div class="col-3 text-end">
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
							<div class="row align-items-center mb-2 pt-3">
								<div class="col-7">
									<h3 class="mb-0"><div class="" id="target">0 pcs</div></h3>
								</div>
								<div class="col-5">
									<div class="mt-n3 mb-n2" data-render="apexchart" data-type="donut" data-title="Visitors" data-height="45"></div>
								</div>
							</div>
							<!-- END stat-lg -->
							<!-- BEGIN stat-sm -->
							
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
                <div class="col-xl-2 col-md-6 col-sm-12">
                    <div class="card mb-3">
						<!-- BEGIN card-body -->
                        <div class="card-header bg-success text-dark">
                            <div class="row">
                                <div class="col-9">
                                    <b><i class="fas fa-bars pe-3"></i>Cycle Time</b>
                                </div>
                                <div class="col-3 text-end">
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
							<div class="row align-items-center mb-2 pt-3">
								<div class="col-7">
									<h3 class="mb-0"><div class="" id="ct">0 sec</div></h3>
								</div>
								<div class="col-5">
									<div class="mt-n3 mb-n2" data-render="apexchart" data-type="donut" data-title="Visitors" data-height="45"></div>
								</div>
							</div>
							<!-- END stat-lg -->
							<!-- BEGIN stat-sm -->
							
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
                <div class="col-xl-2 col-md-6 col-sm-12">
                    <div class="card mb-3">
						<!-- BEGIN card-body -->
                        <div class="card-header bg-success text-dark">
                            <div class="row">
                                <div class="col-9">
                                    <b><i class="fas fa-bars pe-3"></i>Runtime</b>
                                </div>
                                <div class="col-3 text-end">
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
							<div class="row align-items-center mb-2 pt-3">
								<div class="col-7">
									<h3 class="mb-0"><div class="" id="runtime">0 sec</div></h3>
								</div>
								<div class="col-5">
									<div class="mt-n3 mb-n2" data-render="apexchart" data-type="donut" data-title="Visitors" data-height="45"></div>
								</div>
							</div>
							<!-- END stat-lg -->
							<!-- BEGIN stat-sm -->
							
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
                <div class="col-xl-2 col-md-6 col-sm-12">
                    <div class="card mb-3">
						<!-- BEGIN card-body -->
                        <div class="card-header bg-success text-dark">
                            <div class="row">
                                <div class="col-9">
                                    <b><i class="fas fa-bars pe-3"></i>Downtime</b>
                                </div>
                                <div class="col-3 text-end">
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
							<div class="row align-items-center mb-2 pt-3">
								<div class="col-7">
									<h3 class="mb-0"><div class="" id="downtime">0 sec</div></h3>
								</div>
								<div class="col-5">
									<div class="mt-n3 mb-n2" data-render="apexchart" data-type="donut" data-title="Visitors" data-height="45"></div>
								</div>
							</div>
							<!-- END stat-lg -->
							<!-- BEGIN stat-sm -->
							
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
        
        <div class="col-xl-6 col-lg-6">
            <!-- BEGIN card -->
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3" id="map">
                        <!-- BEGIN card-body -->
                        <div class="card-header bg-success text-dark">
                             OEE history
                        </div>
                        <div class="card-body">
                            <!-- BEGIN title -->
                            <div class="" id="baroee"></div>
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
        <div class="col-xl-6 col-lg-6">
            <div class="row">
                <div class="col-12" >
                    <div class="card mb-3" id="map">
                        <!-- BEGIN card-body -->
                        <div class="card-header bg-success text-dark" >
                             Data Logging
                        </div>
                        
                        <div class="card-body">
                            <!-- BEGIN title -->
                           
                            <!-- END stat-lg -->
                            <!-- BEGIN stat-sm -->
                            <table class="table">
                                <thead class="table-light">
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Ok</th>
                                    <th>Ng</th>
                                    <th>Target</th>
                                    <th>CT</th>
                                    <th>Runtime</th>
                                    <th>Downtime</th>        
                                </thead>
                                <tbody>

                                
                                <?php
                                    include 'env/auth.php';
                                    $data_graphic = mysqli_query($conn,"select * from log_oee_30 order by log_oee_id desc limit 8 ");
                                    $id = 1;
                                    foreach ($data_graphic as $row1){
                                        echo '<tr>';
                                        echo '<td>'.$id++.'</td>';
                                        echo '<td>'.$row1['datetime'].'</td>';
                                        echo '<td>'.$row1['ok'].'</td>';
                                        echo '<td>'.$row1['ng'].'</td>';
                                        echo '<td>'.$row1['target'].'</td>';
                                        echo '<td>'.$row1['cycle_time'].'</td>';
                                        echo '<td>'.$row1['runtime'].'</td>';
                                        echo '<td>'.$row1['downtime'].'</td>';
                                        echo '<td>';
                                    }
                                
                                ?>
                                </tbody>
                            </table>
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

            <!-- END card -->
        </div>
        
    </div>
</div>
<script>

</script>
<script src="assets/js/mqtt.js"></script>
<script>
    var wait = 0;
    function getFeed() {
        
        $.ajax({
            url: 'api/api_oee.php',
            type: 'POST',
            success: function(data) {

                all = data;
                a = all.number
                var checkbox = document.getElementById("cb");
               
                var checkboxValue = checkbox.checked;
                if (checkbox.checked) {
                    wait++       
                } else {
                    // If not checked, do nothing or perform another action
                    console.log("Checkbox is not checked. Page not changed.");
                }
                if (wait >= 15){
                    window.location.href = 'index.php?page=main';
                }


                jQuery('#last_update').html('last update: ' + a[0].datetime + ' WIB');
                jQuery('#ava').html(parseFloat(a[0].a).toFixed(2) + ' %');
                jQuery('#perf').html(parseFloat(a[0].p).toFixed(2) + ' %');
                jQuery('#qua').html(parseFloat(a[0].q).toFixed(2) + ' %');
                jQuery('#oee').html(parseFloat(a[0].o).toFixed(2) + ' %');

                jQuery('#total_ok').html(parseFloat(a[0].ok).toFixed(0) + ' pcs');
                jQuery('#total_ng').html(parseFloat(a[0].ng).toFixed(0) + ' pcs');
                jQuery('#target').html(parseFloat(a[0].target).toFixed(0) + ' pcs');

                jQuery('#ct').html(parseFloat(a[0].cycle_time).toFixed(0) + ' sec');

                jQuery('#runtime').html(parseFloat(a[0].runtime).toFixed(0) + ' sec');
                jQuery('#downtime').html(parseFloat(a[0].downtime).toFixed(0) + 'sec');
                chart1.updateSeries([a[0].a]);
                chart2.updateSeries([a[0].p]);
                chart3.updateSeries([a[0].q]);
                chart4.updateSeries([a[0].o]);
                
                ag = all.graphic
                console.log(ag);
                bava = [];
                bperf = [];
                bqua = [];
                boee = [];

                for (let i = ag.length - 1; i > 0; i--) {
                    
                    cir = parseFloat(ag[i].a).toFixed(2);
                    cis = parseFloat(ag[i].p).toFixed(2);
                    cit = parseFloat(ag[i].q).toFixed(2);
                    yyy = parseFloat(ag[i].o).toFixed(2);

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
                
                chartoee.updateSeries([{
                    name: 'AVA',
                    data: bava
                }, {
                    name: 'QUA',
                    data: bqua
                }, {
                    name: 'PERF',
                    data: bperf
                }, {
                    name: 'OEE',
                    data: boee
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

    var chart1 = new ApexCharts(document.querySelector("#chartava"), options);
    chart1.render();
    var chart2 = new ApexCharts(document.querySelector("#chartperf"), options);
    chart2.render();
    var chart3 = new ApexCharts(document.querySelector("#chartqua"), options);
    chart3.render();
    var chart4 = new ApexCharts(document.querySelector("#chartoee"), options);
    chart4.render();

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


    var chartoee = new ApexCharts(document.querySelector("#baroee"), options1);
    chartoee.render();
    
    </script>

<?php include 'resources/layout/app_end.php'; ?>