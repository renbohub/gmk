<?php include 'resources/layout/app_start.php'; ?>
<style>
.over-flow{
    width: 100%!important;
    overflow-x: auto;
    display: flex;
}
.isi{
    min-width: 1200px;
    max-width: 1900px;
}
.main-img{
    z-index: -99;
}
.field{
  position: relative;
  padding-left: 22%;
}
.text-item{
  position: relative;
}
.wd-100{
    position: absolute;

}
.wd-text{
    position: absolute;
    width: 100%;
    padding-top: 25%;
    color: black;
}
</style>

<div id="content" class="app-content pt-2 px-3">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-theme bg-opacity-50"> Line 1 Monitoring</div>
                <div class="card-body px-0 py-0">
                    <div class="row">
                        <div class="col-12 col-lg-4 col-md-12 pe-lg-0">
                            <div class="card">
                                <div class="card-header bg-theme bg-opacity-25"> Graphic Volume</div>
                                <div class="card-body bg-white bg-opacity-0">
                                <div id="chart"></div>
                                </div>
                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>
                            </div>
                        </div>
                       
                        <br>
                        <div class="col-12 col-lg-4 col-md-12 pe-lg-0">
                            <div class="card">
                                <div class="card-header bg-theme bg-opacity-25"> Graphic Volume</div>
                                <div class="card-body bg-light bg-opacity-0">
                                <div id="chart1"></div>
                                </div>
                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-12 col-lg-4 col-md-12 pe-lg-0">
                            <div class="card">
                                <div class="card-header bg-theme bg-opacity-25"> Graphic Volume</div>
                                <div class="card-body bg-light bg-opacity-0">
                                <div id="chart2"></div>
                                </div>
                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-12 col-lg-4 col-md-12 pe-lg-0">
                            <div class="card">
                                <div class="card-header bg-theme bg-opacity-25"> Graphic Volume</div>
                                <div class="card-body bg-light bg-opacity-0">
                                <div id="chart3"></div>
                                </div>
                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-12 col-lg-4 col-md-12 pe-lg-0">
                            <div class="card">
                                <div class="card-header bg-theme bg-opacity-25"> Graphic Volume</div>
                                <div class="card-body bg-light bg-opacity-0">
                                <div id="chart4"></div>
                                </div>
                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-12 col-lg-4 col-md-12 pe-lg-0">
                            <div class="card">
                                <div class="card-header bg-theme bg-opacity-25"> Graphic Volume</div>
                                <div class="card-body bg-light bg-opacity-0">
                                <div id="chart1"></div>
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

<script src="assets/js/mqtt.js"></script>
<script>

    var options = {
          series: [{ name: "Tank 1", data: [53, 37, 68, 25, 84, 41, 72, 63, 29] }],
          chart: {
          height: 350,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'straight'
        },
        title: {
          text: '',
          align: 'left'
        },
        grid: {
          row: {
            colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        xaxis: {
          
          labels: {
            style: {
              colors: '#fff',
            }
          },

        },
        yaxis: {
            labels: {
                style: {
                    colors: ['#fff']
                }
            }
        },
        legend: {
            labels: {
                colors: '#fff'
            }
        }
        };
        
        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        var chart1 = new ApexCharts(document.querySelector("#chart1"), options);
        chart1.render();

        var chart2 = new ApexCharts(document.querySelector("#chart2"), options);
        chart2.render();

        var chart3 = new ApexCharts(document.querySelector("#chart3"), options);
        chart3.render();

        var chart4 = new ApexCharts(document.querySelector("#chart4"), options);
        chart4.render();

        function getFeed() {
            $.ajax({
                url: 'api/api_utility.php',
                type: 'POST',
                success: function(respone) {
                    data = respone.graphic;
                    t3 = [];
                    t4 = [];
                    t5 = [];
                    t6 = [];
                    
                    console.log(data);
                    for (let i = 0 ; i < data.length; i++) {
                    
                        tank3 = data[i].tanki_3;
                        tank4 = data[i].tanki_4;
                        tank5 = data[i].tanki_5;
                        tank6 = data[i].tanki_6;
                        tank7 = data[i].tanki_7;
                        tank8 = data[i].tanki_8;
                        tank10 = data[i].tanki_10;
                        tank17 = data[i].tanki_17;
                        tank21 = data[i].tanki_21;
                        tank22 = data[i].tanki_22;

                        

                        const originalDate = new Date(data[i].last_update);
                        const newDate = new Date(originalDate);

                        // Adding 5 hours
                        newDate.setHours(newDate.getHours() + 7);

                        d = newDate.toISOString();

                        dt = d.split('T')[1];
                        dz = dt.split('.')[0];


                        f3 = {
                            'x': dz,
                            'y': tank3
                        }
                        f4 = {
                            'x': dz,
                            'y': tank4
                        }
                    

                    

                        t3.push(f3);
                        t4.push(f4);
                    

                    }
                console.log(t4);
                
                chart.updateSeries([{
                    name: 'Tanki 3',
                    data: t3
                }]);
                
                }
            });
        };
        setInterval(getFeed, 1000);

        
</script>





<?php include 'resources/layout/app_end.php'; ?>