<?php include 'resources/layout/guest_start.php'; ?>
<div class="login">
    <!-- BEGIN login-content -->
    <div class="login-content">
        <form action="controller/login_controller.php" method="POST" name="login_form">
            <h1 class="text-center">Login</h1>
            <div class="text-white text-opacity-50 text-center mb-4">
                For your protection, please verify your identity.
            </div>
            <div class="mb-3">
                <label class="form-label">Username <span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-lg bg-white bg-opacity-5" value="" placeholder=""
                    name="username" require />
            </div>
            <div class="mb-3">
                <div class="d-flex">
                    <label class="form-label">Password <span class="text-danger">*</span></label>
                    <a href="#" class="ms-auto text-white text-decoration-none text-opacity-50">Forgot password?</a>
                </div>
                <input type="password" class="form-control form-control-lg bg-white bg-opacity-5" value=""
                    placeholder="" name="password" require />
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="customCheck1" />
                    <label class="form-check-label" for="customCheck1">Remember me</label>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
            <div class="text-center text-white text-opacity-50">
                Don't have an account yet? <a href="index.php?page=register">Sign up</a>.
            </div>
        </form>
    </div>
    <!-- END login-content -->
</div>
<?php include 'resources/layout/guest_end.php'; ?>