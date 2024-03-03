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
            <h3 class="text-start">Monitoring Environment</h3>
        </div>
        <div class="col-6">
            <h5 class="text-end" id="last_update">0</h5>
        </div>
        <div class="col-12">
                <div class="row">
                    <div class="col-3">
                            <!-- background & border -->
                        <div class="card bg-light border-theme bg-opacity-25 mb-3">
                            <div class="card-header border-theme bg-theme fw-bold small text-dark">Machine</div>
                                <div class="card-body" style="height: 80vh">
                                <div class="raw">
                                        <div class="col-12">
                                            da
                                        </div>
                                        <div class="col-4">
                                            d
                                        </div>
                                        <div class="col-4">
                                            s
                                        </div>
                                </div>
                            </div>                         
                            </div>
                        </div>
                    <div class="col-9">
                        <!-- background & border -->
                        <div class="card bg-light border-theme bg-opacity-25 mb-3">
                            <div class="card-header border-theme bg-theme fw-bold small text-dark">Machine</div>
                            <div class="card-body text-center">
                                <div id="map" style="height: 80vh;"></div>
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
        
        
        
        
    </div>
</div>
<script>

</script>
<script src="assets/js/mqtt.js"></script>
<script>
        // Initialize the map
        var map = L.map('map').setView([-6.1477, 106.8400], 15);

        // Add the base map layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Add a marker for Jakarta International Expo
        L.marker([-6.1477, 106.8400]).addTo(map)
            .bindPopup('Jakarta International Expo<br>Located here!')
            .openPopup();
   
    
    function getFeed() {
        $.ajax({
            url: 'api/api_environment.php',
            type: 'POST',
            success: function(data) {

                all = data;
                a = all.number
                


                jQuery('#last_update').html('last update: ' + a[0].datetime + ' WIB');
                jQuery('#condition').html(a[0].condition);
                
                chart1.updateSeries([a[0].a]);
                chart2.updateSeries([a[0].p]);
                chart3.updateSeries([a[0].q]);
                chart4.updateSeries([a[0].o]);
                
                // ag = all.graphic
                // console.log(ag);
                // bava = [];
                // bperf = [];
                // bqua = [];
                // boee = [];

                // for (let i = ag.length - 1; i > 0; i--) {
                    
                //     cir = parseFloat(ag[i].a).toFixed(2);
                //     cis = parseFloat(ag[i].p).toFixed(2);
                //     cit = parseFloat(ag[i].q).toFixed(2);
                //     yyy = parseFloat(ag[i].o).toFixed(2);

                //     const originalDate = new Date(ag[i].datetime);
                //     const newDate = new Date(originalDate);

                //     // Adding 5 hours
                //     newDate.setHours(newDate.getHours() + 7);

                //     d = newDate.toISOString();

                //     dt = d.split('T')[1];
                //     dz = dt.split('.')[0];


                //     fi = {
                //         'x': dz,
                //         'y': cir
                //     }
                //     fi1 = {
                //         'x': dz,
                //         'y': cis
                //     }
                //     fi2 = {
                //         'x': dz,
                //         'y': cit
                //     }
                //     fi3 = {
                //         'x': dz,
                //         'y': yyy
                //     }

                  

                //     bava.push(fi);
                //     bperf.push(fi1);
                //     bqua.push(fi2);
                //     boee.push(fi3);

                // }
                
                // chartoee.updateSeries([{
                //     name: 'AVA',
                //     data: bava
                // }, {
                //     name: 'QUA',
                //     data: bqua
                // }, {
                //     name: 'PERF',
                //     data: bperf
                // }, {
                //     name: 'OEE',
                //     data: boee
                // }]);

                
                
               
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

    // var chart1 = new ApexCharts(document.querySelector("#chartava"), options);
    // chart1.render();
    // var chart2 = new ApexCharts(document.querySelector("#chartperf"), options);
    // chart2.render();
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


    // var chartoee = new ApexCharts(document.querySelector("#baroee"), options1);
    // chartoee.render();
    
    </script>

<?php include 'resources/layout/app_end.php'; ?>