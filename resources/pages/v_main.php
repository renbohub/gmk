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

<div id="content" class="app-content pt-2">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-9 ps-0">
            <div class="card px-0">
                <div class="card-header bg-theme bg-opacity-25">
                    Realtime Status
                </div>
                <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>
                <div class="card-body py-0 ps-1">
                    <div class="over-flow container mb-4">
                        <div class="row py-2 isi text-center">
                            <div class="col-4 px-0"></div>
                            
                            <div class="col-2 px-0">
                                <div class="field text-start">
                                    <img class="wd-100" id="sv21a" src="assets/images/sv21a-off.png" width="55%" alt="" >
                                    <img class="wd-100" id="sv21b" src="assets/images/sv21b-off.png" width="55%" alt="" >
                                    <img class="wd-100" id="sv21c" src="assets/images/sv21c-off.png" width="55%" alt="" >
                                </div>
                                <div class="text-item">
                                    <div class="wd-text">
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Mixing Tank <br> 21</h5>
                                                <center>
                                                    <b><div class="border border-dark border-3 bg-white  pt-0" style="width: 100px;" id="number_21">0001 Kg</div></b>
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/images/tank-main-1.png" alt="" width="55%" class="main-img">
                            </div>
                            
                            <div class="col-2 px-0 text-center"><div class="field text-start">
                                    <img class="wd-100" id="sv22a" src="assets/images/sv22a-off.png" width="55%" alt="" >
                                    <img class="wd-100" id="sv22b" src="assets/images/sv22b-off.png" width="55%" alt="" >
                                    <img class="wd-100" id="sv22c" src="assets/images/sv22c-off.png" width="55%" alt="" >
                                </div>
                                <div class="text-item">
                                    <div class="wd-text">
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Mixing Tank <br> 22</h5>
                                                <center>
                                                    <b><div class="border border-dark border-3 bg-white pt-0" style="width: 100px;" id="number_22">0001 Kg</div></b>
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/images/tank-main-1.png" alt="" width="55%" class="main-img"></div>
                            <div class="col-3 px-0"></div>
                            <div class="col-1 px-0"></div>
                            <!--  -->
                                <div class="col-1 px-0"></div>
                                <div class="col-1 px-0"><img src="assets/images/pipe-c-l.png" alt="" width="100%" class="main-img"></div>
                                <div class="col-1 px-0"><img src="assets/images/pipe-c.png" alt="" width="100%" class="main-img"></div>
                                <div class="col-1 px-0"><img src="assets/images/pipe-c.png" alt="" width="100%" class="main-img"></div>
                                <div class="col-2 px-0 text-center"><img src="assets/images/pipe-3.png" alt="" width="100%" class="main-img"></div>
                                <div class="col-2 px-0 text-center"><img src="assets/images/pipe-2.png" alt="" width="100%" class="main-img"></div>
                                <div class="col-3 px-0"></div>
                                <div class="col-1 px-0"></div>
                            <!--  -->
                        
                            <!--  -->
                            <div class="col-2 px-0 text-center"><img src="assets/images/tank-valve-3.png" alt="" width="55%" class="main-img"></div>
                            <div class="col-2 px-0 text-center">
                                <div class="field text-start">
                                    <img class="wd-100" id="sv6a" src="assets/images/sv6a-off.png" width="55%" alt="" >
                                    <img class="wd-100" id="sv6b" src="assets/images/sv6b-off.png" width="55%" alt="" >
                                    <img class="wd-100" id="sv6c" src="assets/images/sv6c-off.png" width="55%" alt="" >
                                </div>
                                <div class="text-item">
                                    <div class="wd-text">
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Mixing Tank <br> 6</h5>
                                                <center>
                                                <b><div class="border border-dark border-3 bg-white pt-0" style="width: 100px;" id="number_6">0001 Kg</div></b>
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/images/tank-main-1.png" alt="" width="55%" class="main-img">
                            </div>
                            <div class="col-2 px-0 text-center"><div class="field text-start">
                                    <img class="wd-100" id="sv7a" src="assets/images/sv7a-off.png" width="55%" alt="" >
                                    <img class="wd-100" id="sv7b" src="assets/images/sv7b-off.png" width="55%" alt="" >
                                    
                                </div>
                                <div class="text-item">
                                    <div class="wd-text">
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Mixing Tank <br> 7</h5>
                                                <center>
                                                <b><div class="border border-dark border-3 bg-white pt-0" style="width: 100px;" id="number_7">0001 Kg</div></b>
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/images/tank-main-1.png" alt="" width="55%" class="main-img"></div>
                            <div class="col-1 px-0"></div>
                            <div class="col-2 px-0 text-center"><div class="field text-start">
                                    <img class="wd-100" id="sv5a" src="assets/images/sv5a-off.png" width="55%" alt="" >
                                    <img class="wd-100" id="sv5b" src="assets/images/sv5b-off.png" width="55%" alt="" >
                                    <img class="wd-100" id="sv5c" src="assets/images/sv5c-off.png" width="55%" alt="" >
                                </div>
                                <div class="text-item">
                                    <div class="wd-text">
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Mixing Tank <br> 5</h5>
                                                <center>
                                                <b><div class="border border-dark border-3 bg-white  pt-0" style="width: 100px;" id="number_5">0001 Kg</div></b>
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/images/tank-main-1.png" alt="" width="55%" class="main-img"></div>
                            <div class="col-2 px-0 text-center"><div class="field text-start">
                                    <img class="wd-100" id="sv17a" src="assets/images/sv17a-off.png" width="55%" alt="" >
                                    <img class="wd-100" id="sv17b" src="assets/images/sv17b-off.png" width="55%" alt="" >
                                    
                                </div>
                                <div class="text-item">
                                    <div class="wd-text">
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Mixing Tank <br> 17</h5>
                                                <center>
                                                <b><div class="border border-dark border-3 bg-white pt-0" style="width: 100px;" id="number_17">0001 Kg</div></b> 
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/images/tank-main-1.png" alt="" width="55%" class="main-img"></div>
                            <div class="col-1 px-0"></div>
                            <!--  -->
                                <div class="col-1 px-0"></div>
                                <div class="col-1 px-0"><img src="assets/images/pipe-c-t-5.png" alt="" width="100%" class="main-img"></div>
                                <div class="col-2 px-0 text-center"><img src="assets/images/pipe-3.png" alt="" width="100%" class="main-img"></div>
                                <div class="col-2 px-0 text-center"><img src="assets/images/pipe-3.png" alt="" width="100%" class="main-img"></div>
                                <div class="col-1 px-0"><img src="assets/images/pipe-c.png" alt="" width="100%" class="main-img"></div>
                                <div class="col-2 px-0 text-center"><img src="assets/images/pipe-3.png" alt="" width="100%" class="main-img"></div>
                                <div class="col-2 px-0 text-center"><img src="assets/images/pipe-2.png" alt="" width="100%" class="main-img"></div>
                                <div class="col-1 px-0"></div>
                            <!--  -->
                            <div class="col-2 px-0 text-center"><img src="assets/images/tank-in-4.png" alt="" width="100%" class="main-img"></div>
                            <div class="col-2 px-0 text-center">
                                <div class="field text-start">
                                    <img class="wd-100" id="sv4a" src="assets/images/sv4a-off.png" width="55%" alt="" >
                                    <img class="wd-100" id="sv4b" src="assets/images/sv4b-off.png" width="55%" alt="" >
                                    
                                </div>
                                    <div class="text-item">
                                        <div class="wd-text">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5>Mixing Tank <br> 4</h5>
                                                    <center>
                                                    <b><div class="border border-dark border-3 bg-white  pt-0" style="width: 100px;" id="number_4">0001 Kg</div></b>
                                                    </center>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="assets/images/tank-main-1.png" alt="" width="55%" class="main-img">
                            </div>
                            <div class="col-2 px-0 text-center">
                            <div class="field text-start">
                                <a href="#modalEdit" data-bs-toggle="modal" >
                                    <img class="wd-100" id="sv3a" src="assets/images/sv3a-off.png" width="55%" alt="" >
                                    <img class="wd-100" id="sv3b" src="assets/images/sv3b-off.png" width="55%" alt="" >
                                    </a>
                                </div>
                                <div class="text-item">
                                    <div class="wd-text">
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Mixing Tank <br> 3</h5>
                                                <center>
                                                <b><div class="border border-dark border-3 bg-white  pt-0" style="width: 100px;" id="number_3">0001 Kg</div></b>
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/images/tank-main-1.png" alt="" width="55%" class="main-img">
                            </div>
                            
                            <div class="col-2 px-0 text-center">
                            <div class="field text-start">
                                    <img class="wd-100" id="sv10a" src="assets/images/sv10a-off.png" width="55%" alt="" >
                                    <img class="wd-100" id="sv10b" src="assets/images/sv10b-off.png" width="55%" alt="" >
                                </div>
                                <div class="text-item">
                                    <div class="wd-text">
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Mixing Tank <br> 10</h5>
                                                <center>
                                                <b><div class="border border-dark border-3 bg-white  pt-0" style="width: 100px;" id="number_10">0001 Kg</div></b>
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/images/tank-main-1.png" alt="" width="55%" class="main-img">
                            </div>
                            <div class="col-2 px-0 text-center">
                            <div class="field text-start">
                                    <img class="wd-100" id="sv8a" src="assets/images/sv8a-off.png" width="55%" alt="" >
                                    <img class="wd-100" id="sv8b" src="assets/images/sv8b-off.png" width="55%" alt="" >
                                </div>
                                <div class="text-item">
                                    <div class="wd-text">
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Mixing Tank <br> 8</h5>
                                                <center>
                                                <b><div class="border border-dark border-3 bg-white  pt-0" style="width: 100px;" id="number_8">0001 Kg</div></b>
                                                </center>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/images/tank-main-1.png" alt="" width="55%" class="main-img">
                            </div>
                            <div class="col-2 px-0"></div>
                            <!--  -->
                            <div class="col-1 px-0"></div>
                            <div class="col-1 px-0"><img src="assets/images/pipe-c-t-d.png" alt="" width="100%" class="main-img"></div>
                            <div class="col-2 px-0 text-center"><img src="assets/images/pipe-3.png" alt="" width="100%" class="main-img"></div>
                            <div class="col-2 px-0 text-center"><img src="assets/images/pipe-3.png" alt="" width="100%" class="main-img"></div>
                            
                            <div class="col-2 px-0 text-center"><img src="assets/images/pipe-3.png" alt="" width="100%" class="main-img"></div>
                            <div class="col-2 px-0 text-center"><img src="assets/images/pipe-2.png" alt="" width="100%" class="main-img"></div>
                            <div class="col-1 px-0"></div>
                            
                            
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-3">
            <div class="row pt-0">
            <div class="col-12 px-0 py-0">
                    <div class="card">
                        <div class="card-header bg-theme bg-opacity-25">
                            Alarm Log
                        </div>
                        <div class="card-body px-0 py-0" style="height: 405px">
                            <!-- table-striped -->
                            <table class="table table-striped">
                                <thead>
                                    <th>Trigger Time</th>
                                    <th>Massage</th>
                                    <th>Count</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>00-00-00 00:00:00</td>
                                        <td>Error PLC with alarm battery</td>
                                        <td>10</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>

                    </div>
                </div>
                <div class="col-12 px-0 py-0">
                    <div class="card">
                        <div class="card-header bg-theme bg-opacity-25">
                            Daerator Area
                        </div>
                        <div class="card-body px-2 py-0">
                            <div class="row">
                            <table class="table">
                                <tbody>                           
                                    <tr>
                                        <td class="align-middle">
                                            --
                                        </td>
                                        <td>
                                            <div class="text-center border  bg-opacity-40" id="t-sv-in-1">
                                                N/A
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            --
                                        </td>
                                        <td>
                                            <div class="text-center border  bg-opacity-40" id="t-sv-in-2">
                                                N/A
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
                <div class="col px-0 pt-2">
                    <div class="card">
                        <div class="card-header bg-theme bg-opacity-25 py-1 px-1">
                            <table class="table py-0 mb-0 table-borderless px-0">
                                <tbody>
                                <tr>
                                    <td class="align-middle ">
                                        Mixing Tank 21
                                    </td>
                                    <td class="align-middle py-0 text-end" align="right">                           
                                        <input type="text"  class="form-control border-success" placeholder="00 Kg" style="width: 100%;" disabled id="t-v-21">            
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body px-0 py-0 mb-0">
                            <table class="table mb-0">
                                <tbody>       
                                    <tr>
                                        <td class="align-middle">
                                            SV21A
                                        </td>
                                        <td>
                                            <div class="text-center border bg-danger bg-opacity-40" id="t-sv21a">
                                                Closed
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            SV21B
                                        </td>
                                        <td>
                                            <div class="text-center border bg-danger bg-opacity-40" id="t-sv21b">
                                                Closed
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            SV21C
                                        </td>
                                        <td>
                                            <div class="text-center border bg-danger bg-opacity-40" id="t-sv21c">
                                                Closed
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>

                    </div>
                </div>
                <div class="col px-0 pt-2">
                    <div class="card">
                        <div class="card-header bg-theme bg-opacity-25 py-1 px-1">
                            <table class="table py-0 mb-0 table-borderless px-0">
                                <tbody>
                                <tr>
                                    <td class="align-middle ">
                                        Mixing Tank 22
                                    </td>
                                    <td class="align-middle py-0 text-end" align="right">                           
                                        <input type="text"  class="form-control border-success" placeholder="00 Kg" style="width: 100%;" disabled  id="t-v-22">            
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body px-0 py-0 mb-0">
                            <table class="table mb-0">
                                <tbody>       
                                    <tr>
                                        <td class="align-middle">
                                            SV22A
                                        </td>
                                        <td>
                                            <div class="text-center border bg-danger bg-opacity-40" id="t-sv22a">
                                                Closed
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            SV22B
                                        </td>
                                        <td>
                                            <div class="text-center border bg-danger bg-opacity-40" id="t-sv22b">
                                                Closed
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            SV22C
                                        </td>
                                        <td>
                                            <div class="text-center border bg-danger bg-opacity-40" id="t-sv22c">
                                                Closed
                                            </div>
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
    
    <div class="row">
        <div class="col px-0 pt-2">
            <div class="card">
                <div class="card-header bg-theme bg-opacity-25 py-1 px-1">
                    <table class="table py-0 mb-0 table-borderless px-0">
                        <tbody>
                        <tr>
                            <td class="align-middle ">
                                Mixing Tank 6
                            </td>
                            <td class="align-middle py-0 text-end" align="right">                           
                                <input type="text"  class="form-control border-success" placeholder="00 Kg" style="width: 100%;" disabled  id="t-v-6">            
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-body px-0 py-0 mb-0">
                    <table class="table mb-0">
                        <tbody>       
                            <tr>
                                <td class="align-middle">
                                    SV6A
                                </td>
                                <td>
                                    <div class="text-center border bg-danger bg-opacity-40" id="t-sv6a">
                                        Closed
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    SV6B
                                </td>
                                <td>
                                    <div class="text-center border bg-danger bg-opacity-40" id="t-sv6b">
                                        Closed
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    SV6C
                                </td>
                                <td>
                                    <div class="text-center border bg-danger bg-opacity-40" id="t-sv6c">
                                        Closed
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>

            </div>
        </div>
        <div class="col px-0 pt-2">
            <div class="card">
                <div class="card-header bg-theme bg-opacity-25 py-1 px-1">
                    <table class="table py-0 mb-0 table-borderless px-0">
                        <tbody>
                        <tr>
                            <td class="align-middle ">
                                Mixing Tank 7
                            </td>
                            <td class="align-middle py-0 text-end" align="right">                           
                                <input type="text"  class="form-control border-success" placeholder="00 Kg" style="width: 100%;" disabled id="t-v-7">            
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-body px-0 py-0 mb-0">
                    <table class="table mb-0">
                        <tbody>       
                            <tr>
                                <td class="align-middle">
                                    SV7A
                                </td>
                                <td>
                                    <div class="text-center border bg-danger bg-opacity-40" id="t-sv7a">
                                        Closed
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    SV7B
                                </td>
                                <td>
                                    <div class="text-center border bg-danger bg-opacity-40" id="t-sv7b">
                                        Closed
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    -
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>

            </div>
        </div>
        <div class="col px-0 pt-2">
            <div class="card">
                <div class="card-header bg-theme bg-opacity-25 py-1 px-1">
                    <table class="table py-0 mb-0 table-borderless px-0">
                        <tbody>
                        <tr>
                            <td class="align-middle ">
                                Mixing Tank 5
                            </td>
                            <td class="align-middle py-0 text-end" align="right">                           
                                <input type="text"  class="form-control border-success" placeholder="00 Kg" style="width: 100%;" disabled id="t-v-5">            
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-body px-0 py-0 mb-0">
                    <table class="table mb-0">
                        <tbody>       
                            <tr>
                                <td class="align-middle">
                                    SV5A
                                </td>
                                <td>
                                    <div class="text-center border bg-danger bg-opacity-40" id="t-sv5a">
                                        Closed
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    SV5B
                                </td>
                                <td>
                                    <div class="text-center border bg-danger bg-opacity-40" id="t-sv5b">
                                        Closed
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    SV5C
                                </td>
                                <td>
                                    <div class="text-center border bg-danger bg-opacity-40" id="t-sv5c">
                                        Closed
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>

            </div>
        </div>
        <div class="col px-0 pt-2">
            <div class="card">
                <div class="card-header bg-theme bg-opacity-25 py-1 px-1">
                    <table class="table py-0 mb-0 table-borderless px-0">
                        <tbody>
                        <tr>
                            <td class="align-middle ">
                                Mixing Tank 17
                            </td>
                            <td class="align-middle py-0 text-end" align="right">                           
                                <input type="text"  class="form-control border-success" placeholder="00 Kg" style="width: 100%;" disabled id="t-v-17">            
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-body px-0 py-0 mb-0">
                    <table class="table mb-0">
                        <tbody>       
                            <tr>
                                <td class="align-middle">
                                    SV17A
                                </td>
                                <td>
                                    <div class="text-center border bg-danger bg-opacity-40" id="t-sv17a">
                                        Closed
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    SV17B
                                </td>
                                <td>
                                    <div class="text-center border bg-danger bg-opacity-40" id="t-sv17b">
                                        Closed
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    -
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>

            </div>
        </div>
        <div class="col px-0 pt-2">
            <div class="card">
                <div class="card-header bg-theme bg-opacity-25 py-1 px-1">
                    <table class="table py-0 mb-0 table-borderless px-0">
                        <tbody>
                        <tr>
                            <td class="align-middle ">
                                Mixing Tank 4
                            </td>
                            <td class="align-middle py-0 text-end" align="right">                           
                                <input type="text"  class="form-control border-success" placeholder="00 Kg" style="width: 100%;" disabled id="t-v-4">            
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-body px-0 py-0 mb-0">
                    <table class="table mb-0">
                        <tbody>       
                            <tr>
                                <td class="align-middle">
                                    SV4A
                                </td>
                                <td>
                                    <div class="text-center border bg-danger bg-opacity-40" id="t-sv4a">
                                        Closed
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    SV4B
                                </td>
                                <td>
                                    <div class="text-center border bg-danger bg-opacity-40" id="t-sv4b">
                                        Closed
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    -
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>

            </div>
        </div>
        <div class="col px-0 pt-2">
            <div class="card">
                <div class="card-header bg-theme bg-opacity-25 py-1 px-1">
                    <table class="table py-0 mb-0 table-borderless px-0">
                        <tbody>
                        <tr>
                            <td class="align-middle ">
                                Mixing Tank 3
                            </td>
                            <td class="align-middle py-0 text-end" align="right">                           
                                <input type="text"  class="form-control border-success" placeholder="00 Kg" style="width: 100%;" disabled id="t-v-3">            
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-body px-0 py-0 mb-0">
                    <table class="table mb-0">
                        <tbody>       
                            <tr>
                                <td class="align-middle">
                                    SV3A
                                </td>
                                <td>
                                    <div class="text-center border bg-danger bg-opacity-40" id="t-sv3a">
                                        Closed
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    SV3B
                                </td>
                                <td>
                                    <div class="text-center border bg-danger bg-opacity-40" id="t-sv3b">
                                        Closed
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    -
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>

            </div>
        </div>
        <div class="col px-0 pt-2">
            <div class="card">
                <div class="card-header bg-theme bg-opacity-25 py-1 px-1">
                    <table class="table py-0 mb-0 table-borderless px-0">
                        <tbody>
                        <tr>
                            <td class="align-middle ">
                                Mixing Tank 10
                            </td>
                            <td class="align-middle py-0 text-end" align="right">                           
                                <input type="text"  class="form-control border-success" placeholder="00 Kg" style="width: 100%;" disabled id="t-v-10">            
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-body px-0 py-0 mb-0">
                    <table class="table mb-0">
                        <tbody>       
                            <tr>
                                <td class="align-middle">
                                    SV10A
                                </td>
                                <td>
                                    <div class="text-center border bg-danger bg-opacity-40" id="t-sv10a">
                                        Closed
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    SV10B
                                </td>
                                <td>
                                    <div class="text-center border bg-danger bg-opacity-40" id="t-sv10b">
                                        Closed
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    -
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>

            </div>
        </div>
        <div class="col px-0 pt-2">
            <div class="card">
                <div class="card-header bg-theme bg-opacity-25 py-1 px-1">
                    <table class="table py-0 mb-0 table-borderless px-0">
                        <tbody>
                        <tr>
                            <td class="align-middle ">
                                Mixing Tank 8
                            </td>
                            <td class="align-middle py-0 text-end" align="right">                           
                                <input type="text"  class="form-control border-success" placeholder="00 Kg" style="width: 100%;" disabled id="t-v-8">            
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-body px-0 py-0 mb-0">
                    <table class="table mb-0">
                        <tbody>       
                            <tr>
                                <td class="align-middle">
                                    SV8A
                                </td>
                                <td>
                                    <div class="text-center border bg-danger bg-opacity-40" id="t-sv8a">
                                        Closed
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    SV8B
                                </td>
                                <td>
                                    <div class="text-center border bg-danger bg-opacity-40" id="t-sv8b">
                                        Closed
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    -
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
            var web_id1 = "web2" + Math.random() * 100000 + "";
        
            clientparetto = new Paho.MQTT.Client('127.0.0.1', Number('8083'), "" + web_id1 + "");
            clientparetto.onConnectionLost = onConnectionLostparetto;
            clientparetto.onMessageArrived = onMessageArrivedparetto;
            clientparetto.connect({
                onSuccess: onConnectparetto,
                useSSL: false
            });

            
        
        
            function onConnectparetto() {
                console.log("onConnectparetto");
    
        
                // Check if the "id" parameter is present in the URL
                if (1==1) {
                    const topic = "gandumas/v1/realtime/sv";
                    console.log("Subscribing to topic: " + topic);
        
                    // Subscribe to the dynamically generated topic
                    clientparetto.subscribe(topic);
                } else {
                    console.error("URL parameter 'id' is missing.");
                }
            }
            // called when the client loses its connection
            function onConnectionLostparetto(responseObject) {
                if (responseObject.errorCode !== 0) {
                    console.log("onConnectionLost:" + responseObject.errorMessage);
                }
            }
                    
        
            function onMessageArrivedparetto(message) {
                var a =JSON.parse(message.payloadString);
                

                var sv3a = false;
                var sv3b = false;
                var sv3c = false;

                var sv4a = false;
                var sv4b = false;
                var sv4c = false;

                var sv5a = false;
                var sv5b = false;
                var sv5c = false;

                var sv6a = false;
                var sv6b = false;
                var sv6c = false;

                var sv7a = false;
                var sv7b = false;
                var sv7c = false;

                var sv8a = false;
                var sv8b = false;
                var sv8c = false;

                var sv10a = false;
                var sv10b = false;
                var sv10c = false;

                var sv17a = false;
                var sv17b = false;
                var sv17c = false;

                var sv21a = false;
                var sv21b = false;
                var sv21c = false;

                var sv22a = false;
                var sv22b = false;
                var sv22c = false;
                console.log(a);
                
                
                sv3a = a.d.sv3a[0];
                sv3b = a.d.sv3b[0];
                sv3c = a.d.sv3c[0];

                sv4a = a.d.sv4a[0];
                sv4b = a.d.sv4b[0];
                sv4c = a.d.sv4c[0];

                sv5a = a.d.sv5a[0];
                sv5b = a.d.sv5b[0];
                sv5c = a.d.sv5c[0];

                sv6a = a.d.sv6a[0];
                sv6b = a.d.sv6b[0];
                sv6c = a.d.sv6c[0];

                sv7a = a.d.sv7a[0];
                sv7b = a.d.sv7b[0];
                sv7c = a.d.sv7c[0];

                sv8a = a.d.sv8a[0];
                sv8b = a.d.sv8b[0];
                sv8c = a.d.sv8c[0];

                sv10a = a.d.sv10a[0];
                sv10b = a.d.sv10b[0];
                sv10c = a.d.sv10c[0];

                sv17a = a.d.sv17a[0];
                sv17b = a.d.sv17b[0];
                sv17c = a.d.sv17c[0];

                sv21a = a.d.sv21a[0];
                sv21b = a.d.sv21b[0];
                sv21c = a.d.sv21c[0];

                sv22a = a.d.sv22a[0];
                sv22b = a.d.sv22b[0];
                sv22c = a.d.sv22c[0];

                
               
                //////
                if(sv3a==false){
                    document.getElementById("sv3a").src = "assets/images/sv3a-off.png";
                }
                else if(sv3a==true){
                    document.getElementById("sv3a").src = "assets/images/sv3a-on.png";
                }

                if(sv3b==false){
                    document.getElementById("sv3b").src = "assets/images/sv3b-off.png";
                }
                else if(sv3b==true){
                    document.getElementById("sv3b").src = "assets/images/sv3b-on.png";
                }
                //////

                if(sv4a==false){
                    document.getElementById("sv4a").src = "assets/images/sv4a-off.png";
                }
                else if(sv4a==true){
                    document.getElementById("sv4a").src = "assets/images/sv4a-on.png";
                }

                if(sv4b==false){
                    document.getElementById("sv4b").src = "assets/images/sv4b-off.png";
                }
                else if(sv4b==true){
                    document.getElementById("sv4b").src = "assets/images/sv4b-on.png";
                }
                //////

                if(sv5a==false){
                    document.getElementById("sv5a").src = "assets/images/sv5a-off.png";
                }
                else if(sv5a==true){
                    document.getElementById("sv5a").src = "assets/images/sv5a-on.png";
                }

                if(sv5b==false){
                    document.getElementById("sv5b").src = "assets/images/sv5b-off.png";
                }
                else if(sv5b==true){
                    document.getElementById("sv5b").src = "assets/images/sv5b-on.png";
                }
                //////

                if(sv5a==false){
                    document.getElementById("sv5a").src = "assets/images/sv5a-off.png";
                }
                else if(sv5a==true){
                    document.getElementById("sv5a").src = "assets/images/sv5a-on.png";
                }

                if(sv5b==false){
                    document.getElementById("sv5b").src = "assets/images/sv5b-off.png";
                }
                else if(sv5b==true){
                    document.getElementById("sv5b").src = "assets/images/sv5b-on.png";
                }
                if(sv5c==false){
                    document.getElementById("sv5c").src = "assets/images/sv5c-off.png";
                }
                else if(sv5c==true){
                    document.getElementById("sv5c").src = "assets/images/sv5c-on.png";
                }
                //////
                //////

                if(sv6a==false){
                    document.getElementById("sv6a").src = "assets/images/sv6a-off.png";
                }
                else if(sv6a==true){
                    document.getElementById("sv6a").src = "assets/images/sv6a-on.png";
                }

                if(sv6b==false){
                    document.getElementById("sv6b").src = "assets/images/sv6b-off.png";
                }
                else if(sv6b==true){
                    document.getElementById("sv6b").src = "assets/images/sv6b-on.png";
                }
                if(sv6c==false){
                    document.getElementById("sv6c").src = "assets/images/sv6c-off.png";
                }
                else if(sv6c==true){
                    document.getElementById("sv6c").src = "assets/images/sv6c-on.png";
                }
                //////

                //////

                if(sv7a==false){
                    document.getElementById("sv7a").src = "assets/images/sv7a-off.png";
                }
                else if(sv7a==true){
                    document.getElementById("sv7a").src = "assets/images/sv7a-on.png";
                }

                if(sv7b==false){
                    document.getElementById("sv7b").src = "assets/images/sv7b-off.png";
                }
                else if(sv7b==true){
                    document.getElementById("sv7b").src = "assets/images/sv7b-on.png";
                }
                //////
                //////

                if(sv8a==false){
                    document.getElementById("sv8a").src = "assets/images/sv8a-off.png";
                }
                else if(sv8a==true){
                    document.getElementById("sv8a").src = "assets/images/sv8a-on.png";
                }

                if(sv8b==false){
                    document.getElementById("sv8b").src = "assets/images/sv8b-off.png";
                }
                else if(sv8b==true){
                    document.getElementById("sv8b").src = "assets/images/sv8b-on.png";
                }
                //////
                //////

                if(sv10a==false){
                    document.getElementById("sv10a").src = "assets/images/sv10a-off.png";
                    jQuery('#t-sv10a').html("CLOSE");
                    jQuery('#t-sv10a').removeClass("bg-success");
                    jQuery('#t-sv10a').addClass("bg-danger");
                }
                else if(sv10a==true){
                    document.getElementById("sv10a").src = "assets/images/sv10a-on.png";
                    jQuery('#t-sv10a').html("OPEN");
                    jQuery('#t-sv10a').addClass("bg-success");
                    jQuery('#t-sv10a').removeClass("bg-danger");
                }

                if(sv10b==false){
                    document.getElementById("sv10b").src = "assets/images/sv10b-off.png";
                }
                else if(sv10b==true){
                    document.getElementById("sv10b").src = "assets/images/sv10b-on.png";
                }
                //////
                if(sv17a==false){
                    document.getElementById("sv17a").src = "assets/images/sv17a-off.png";
                }
                else if(sv17a==true){
                    document.getElementById("sv17a").src = "assets/images/sv17a-on.png";
                }

                if(sv17b==false){
                    document.getElementById("sv17b").src = "assets/images/sv17b-off.png";
                }
                else if(sv17b==true){
                    document.getElementById("sv17b").src = "assets/images/sv17b-on.png";
                }
                //////
                //////

                if(sv21a==false){
                    document.getElementById("sv21a").src = "assets/images/sv21a-off.png";
                }
                else if(sv21a==true){
                    document.getElementById("sv21a").src = "assets/images/sv21a-on.png";
                }

                if(sv21b==false){
                    document.getElementById("sv21b").src = "assets/images/sv21b-off.png";
                }
                else if(sv21b==true){
                    document.getElementById("sv21b").src = "assets/images/sv21b-on.png";
                }
                if(sv21c==false){
                    document.getElementById("sv21c").src = "assets/images/sv21c-off.png";
                }
                else if(sv21c==true){
                    document.getElementById("sv21c").src = "assets/images/sv21c-on.png";
                }
                //////
                if(sv22a==false){
                    document.getElementById("sv22a").src = "assets/images/sv22a-off.png";
                }
                else if(sv22a==true){
                    document.getElementById("sv22a").src = "assets/images/sv22a-on.png";
                }

                if(sv22b==false){
                    document.getElementById("sv22b").src = "assets/images/sv22b-off.png";
                }
                else if(sv22b==true){
                    document.getElementById("sv22b").src = "assets/images/sv22b-on.png";
                }
                if(sv22c==false){
                    document.getElementById("sv22c").src = "assets/images/sv22c-off.png";
                }
                else if(sv22c==true){
                    document.getElementById("sv22c").src = "assets/images/sv22c-on.png";
                }
                

             
            }
            var web_id = "web2" + Math.random() * 100000 + "";
            clientvalue = new Paho.MQTT.Client('127.0.0.1', Number('8083'), "" + web_id + "");
            clientvalue.onConnectionLost = onConnectionLostvalue;
            clientvalue.onMessageArrived = onMessageArrivedvalue;
            clientvalue.connect({
                onSuccess: onConnectvalue,
                useSSL: false
            });

            
        
        
            function onConnectvalue() {
                console.log("onConnectvalue");
    
        
                // Check if the "id" parameter is present in the URL
                if (1==1) {
                    const topic = "gandumas/v1/realtime/value";
                    console.log("Subscribing to topic: " + topic);
        
                    // Subscribe to the dynamically generated topic
                    clientvalue.subscribe(topic);
                } else {
                    console.error("URL parameter 'id' is missing.");
                }
            }
            // called when the client loses its connection
            function onConnectionLostvalue(responseObject) {
                if (responseObject.errorCode !== 0) {
                    console.log("onConnectionLost:" + responseObject.errorMessage);
                }
            }
                    
        
            function onMessageArrivedvalue(message) {
                var a =JSON.parse(message.payloadString);
                
                jQuery('#number_3').html(parseFloat(a.d.tank3[0]).toFixed(2) + 'KG');
                jQuery('#number_4').html(parseFloat(a.d.tank4[0]).toFixed(2) + 'KG');
                jQuery('#number_5').html(parseFloat(a.d.tank5[0]).toFixed(2) + 'KG');
                jQuery('#number_6').html(parseFloat(a.d.tank6[0]).toFixed(2) + 'KG');
                jQuery('#number_7').html(parseFloat(a.d.tank7[0]).toFixed(2) + 'KG');
                jQuery('#number_8').html(parseFloat(a.d.tank8[0]).toFixed(2) + 'KG');
                jQuery('#number_10').html(parseFloat(a.d.tank10[0]).toFixed(2) + 'KG');
                jQuery('#number_17').html(parseFloat(a.d.tank17[0]).toFixed(2) + 'KG');
                jQuery('#number_21').html(parseFloat(a.d.tank21[0]).toFixed(2) + 'KG');
                jQuery('#number_22').html(parseFloat(a.d.tank22[0]).toFixed(2) + 'KG');

                jQuery('#t-v-3').attr("placeholder",parseFloat(a.d.tank3[0]).toFixed(2) + 'KG');
                jQuery('#t-v-4').attr("placeholder",parseFloat(a.d.tank4[0]).toFixed(2) + 'KG');
                jQuery('#t-v-5').attr("placeholder",parseFloat(a.d.tank5[0]).toFixed(2) + 'KG');
                jQuery('#t-v-6').attr("placeholder",parseFloat(a.d.tank6[0]).toFixed(2) + 'KG');
                jQuery('#t-v-7').attr("placeholder",parseFloat(a.d.tank7[0]).toFixed(2) + 'KG');
                jQuery('#t-v-8').attr("placeholder",parseFloat(a.d.tank8[0]).toFixed(2) + 'KG');
                jQuery('#t-v-10').attr("placeholder",parseFloat(a.d.tank10[0]).toFixed(2) + 'KG');
                jQuery('#t-v-17').attr("placeholder",parseFloat(a.d.tank17[0]).toFixed(2) + 'KG');
                jQuery('#t-v-21').attr("placeholder",parseFloat(a.d.tank21[0]).toFixed(2) + 'KG');
                jQuery('#t-v-22').attr("placeholder",parseFloat(a.d.tank22[0]).toFixed(2) + 'KG');
                    
             
            }

</script>





<?php include 'resources/layout/app_end.php'; ?>