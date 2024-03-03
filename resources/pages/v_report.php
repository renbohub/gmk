<?php include 'resources/layout/app_start.php'; ?>


<div id="content" class="app-content">
    <!-- required css -->


    <!-- html -->
    <form>
        <div class="mb-3 row">
            <div class="">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Select Date</label>
                <div class="col-sm-10">
                    <input type="date" id="datetime" class="form-control">
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <br>
    <table id="datatableDefault" class="table text-nowrap w-100">
        <thead>
            <!-- Adjust the headers based on your table columns -->
            <tr>
                <th>Id</th>
                <th>Datetime</th>
                <th>Mixing Tank 1</th>
                <th>Mixing Tank 2</th>
                <th>Mixing Tank 3</th>
                <th>Mixing Tank 4</th>
                <th>Mixing Tank 5</th>
                <th>Mixing Tank 6</th>
                <th>Mixing Tank 7</th>
                <th>Mixing Tank 8</th>
                <th>Mixing Tank 9</th>
                <th>Mixing Tank 10</th>
                
                <!-- Add more headers as needed -->
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <!-- script -->
    <script>
    $(document).ready(function() {
        $('#datatableDefault').DataTable({
            dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-end'<'d-flex justify-content-end'fB>>>t<'d-flex align-items-center'<'me-auto'i><'mb-0'p>>",
            lengthMenu: [10, 20, 30, 40, 50],
            responsive: true,
            buttons: [{
                    extend: 'print',
                    className: 'btn btn-default'
                },
                {
                    extend: 'csv',
                    className: 'btn btn-default'
                },
                {
                    extend: 'excel',
                    className: 'btn btn-default'
                }
            ],
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "http://103.28.52.43:1880/porthings/api/v1.0/web/reporting/<?php echo $id?>",
                data: function(d) {
                    d.datetime = $('#datetime').val();
                }
            },
            "columns": [{
                    "data": "id"
                },
                {
                    "data": "tgl"
                },
                {
                    "data": "project_name"
                },
                {
                    "data": "i_r"
                },
                {
                    "data": "i_s"
                },
                {
                    "data": "i_t"
                },
                {
                    "data": "avg_i"
                },
                {
                    "data": "v_rs"
                },
                {
                    "data": "v_st"
                },
                {
                    "data": "v_tr"
                },
                {
                    "data": "avg_vpp"
                },
                {
                    "data": "v_rn"
                },
                {
                    "data": "v_sn"
                },
                {
                    "data": "v_tn"
                },
                {
                    "data": "avg_vpn"
                },
                {
                    "data": "freq"
                },
                {
                    "data": "p_r"
                },
                {
                    "data": "p_s"
                },
                {
                    "data": "p_t"
                },
                {
                    "data": "p_tot"
                },
                {
                    "data": "vaa"
                },
                {
                    "data": "vab"
                },
                {
                    "data": "vac"
                },
                {
                    "data": "vat"
                },
                {
                    "data": "pf_a"
                },
                {
                    "data": "pf_b"
                },
                {
                    "data": "pf_c"
                },
                {
                    "data": "pf_tot"
                },
                {
                    "data": "kwh_q1"
                },
                {
                    "data": "kwh_q2"
                },
                {
                    "data": "kwh_q3"
                },
                {
                    "data": "kwh_q4"
                },
                {
                    "data": "kwt"
                },
                // Add more columns as needed
            ]
        });
        $('#datetime').on('change', function() {
            $('#datatableDefault').dataTable().api().ajax.reload();
        });
    });
    </script>
</div>

<?php include 'resources/layout/app_end.php'; ?>
<link href="assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<link href="assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
<link href="assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />

<!-- required js -->
<script src="assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-white bg-opacity-25 rounded">