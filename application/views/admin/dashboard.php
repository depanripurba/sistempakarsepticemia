<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-success text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Dashboard Menu
            </h3>
        </div>
        <div class="row">
            <div class="col-md-6 stretch-card grid-margin">
                <div class="card bg-gradient-warning card-img-holder text-white">
                    <div class="card-body">
                        <img src="<?=base_url('assets/template/')?>assets/images/dashboard/circle.svg"
                            class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Total Data Gejala
                            <i class="mdi mdi-medical-bag float-end"></i>
                        </h4>
                        <h2 class="mb-5"><?=$gejala?></h2>
                        <h6 class="card-text">Data Gejala</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img src="<?=base_url('assets/template/')?>assets/images/dashboard/circle.svg"
                            class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Total Data Penyakit
                            <i class="fa fa-stethoscope float-end"></i>
                        </h4>
                        <h2 class="mb-5"><?=$penyakit?></h2>
                        <h6 class="card-text">Data Penyakit</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <img src="<?=base_url('assets/template/')?>assets/images/dashboard/circle.svg"
                            class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Total Basis Data Pengetahuan<i
                                class="fa fa-cube float-end"></i>
                        </h4>
                        <h2 class="mb-5"><?=$basispengetahuan?></h2>
                        <h6 class="card-text">Basis Data Pengetahuan</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img src="<?=base_url('assets/template/')?>assets/images/dashboard/circle.svg"
                            class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Total Data Riwayat Konsultasi
                            <i class="fa fa-users float-end"></i>
                        </h4>
                        <h2 class="mb-5"><?=$pasien?></h2>
                        <h6 class="card-text">Data Konsultasi</h6>
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
