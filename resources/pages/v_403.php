<?php include 'resources/layout/guest_start.php'; ?>
<div id="app" class="app app-full-height app-without-header">
    <!-- BEGIN error -->
    <div class="error-page">
        <!-- BEGIN error-page-content -->
        <div class="error-page-content">
            <div class="card mb-5 mx-auto" style="max-width: 320px;">
                <div class="card-body">
                    <div class="card">
                        <div class="error-code">403</div>
                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
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
            <h1>Oops!</h1>
            <h3>We can't seem to find the page you're looking for</h3>
            <hr />

            <a href="javascript:window.history.back();" class="btn btn-outline-theme px-3 rounded-pill"><i
                    class="fa fa-arrow-left me-1 ms-n1"></i> Go Back</a>
        </div>
        <!-- END error-page-content -->
    </div>
    <!-- END error -->

    <!-- BEGIN btn-scroll-top -->
    <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
    <!-- END btn-scroll-top -->

</div>
<!-- END login-content -->
</div>
<?php include 'resources/layout/guest_end.php'; ?>