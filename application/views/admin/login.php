<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$judul?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?=base_url('assets/img/')?>logo.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <img src="<?=base_url('assets/img/logo.png')?>" style="max-width:250px" alt="">
                    </div>
                    <div class="col-lg-6 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <h4>SILAHKAN LOGIN TERLEBIH DAHULU</h4>
                            <h6 class="font-weight-light">Login Admin</h6>
                            <form class="pt-3" method="POST" action="<?=base_url('auth')?>">
                                <?=$this->session->flashdata('message');?>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="Username"
                                        id="username" name="username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" placeholder="Password"
                                        id="password" name="password">
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-success btn-fw">Login</button>
                                    <button type="reset" class="btn btn-danger btn-fw">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?=base_url('assets/template/')?>assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?=base_url('assets/template/')?>assets/js/off-canvas.js"></script>
    <script src="<?=base_url('assets/template/')?>assets/js/misc.js"></script>
    <script src="<?=base_url('assets/template/')?>assets/js/settings.js"></script>
    <script src="<?=base_url('assets/template/')?>assets/js/todolist.js"></script>
    <script src="<?=base_url('assets/template/')?>assets/js/jquery.cookie.js"></script>
    <!-- endinject -->
</body>

</html>