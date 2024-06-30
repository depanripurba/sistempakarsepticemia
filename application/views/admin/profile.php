<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-success text-white me-2">
                    <i class="fa fa-user"></i>
                </span> Profile Admin
            </h3>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex" style="align-items:center" >
                            <div class="col-2">
                                <img src="<?=base_url('assets/img/logo.png')?>" style="width:100%" alt="">
                            </div>
                            <div class="col-10">
                                <h4 class="card-title"><?=$this->session->userdata('name')?></h4>
                                <span class="card-description"><?=$this->session->userdata('role')?></span>
                                <br>
                                <br>
                                <div>
                                    <p style="line-height:1.5em">
									<?=$this->session->userdata('name')?> adalah Administrator Sistem untuk aplikasi sistem pakar diagnosa penyakit Foot and Mouth Disease (FMD) pada domba. Dengan latar belakang yang kuat dalam teknologi informasi dan pengalaman luas dalam pengelolaan sistem pakar, Budi bertanggung jawab untuk memastikan bahwa aplikasi ini berjalan dengan lancar dan efisien.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                2024</span>
        </div>
    </footer>
    <!-- partial -->



</div>
<!-- main-panel ends -->
