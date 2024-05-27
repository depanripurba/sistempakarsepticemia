<div class="content-wrapper">
    <!-- batas -->
    <section class="content">
        <div class="container-fluid">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?=$gejala?></h3>
                            <p>Data Gejala</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book-medical"></i>
                        </div>
                        <a href="<?=base_url('master/datagejala')?>" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?=$penyakit?></h3>
                            <p>Data Penyakit</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-notes-medical"></i>
                        </div>
                        <a href="<?=base_url('master/datapenyakit')?>" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?=$pasien?></h3>
                            <p>Data Pengunjung</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-user-injured"></i>
                        </div>
                        <a href="<?=base_url('master/datapasien')?>" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <a href="<?=base_url('master/diagnosa')?>" class="btn btn-primary btn-block" fdprocessedid="ral5ij">
                        <i class="fas fa-user-md mr-2"></i>
                        <span>Mulai Konsultasi</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>



<!-- /.content-wrapper -->