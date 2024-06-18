<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-success text-white me-2">
                    <i class="fa fa-stethoscope menu-icon"></i>
                </span> Diagnosa Penyakit Foot And Mouth Disease Domba
            </h3>
        </div>
        <div class="row">
            <div class="col-md-12 mt-2">
                <form action="<?=base_url('diagnosa/prosesdiagnosa')?>" method="post">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Diagnosa Penyakit</h3>
                        </div>
                        <div class="card-body">
                            <div class="col-md-6 stretch-card">
                                <div class="card">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-3 col-form-label">Nama Peternak</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                placeholder="Nama Peternak">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telepon" class="col-sm-3 col-form-label">No. Telp</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="telepon" name="telepon">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="alamat" id="alamat"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 100px">Kode Gejala</th>
                                        <th>Gejala</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                        foreach ($gejala as $g) : ?>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox d-flex justify-content-around">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="<?= $g['kode_gejala'] ?>" value="1"
                                                    name="<?= $g['kode_gejala'] ?>">
                                                <label for="<?= $g['kode_gejala'] ?>"
                                                    class="custom-control-label"><?= $g['kode_gejala'] ?></label>
                                            </div>
                                        </td>
                                        <td><?= $g['nama_gejala'] ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <button class="btn btn-info">Diagnosa</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm
-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                2024</sp an>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->