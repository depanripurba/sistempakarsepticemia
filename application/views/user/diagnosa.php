<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-success text-white me-2">
                    <i class="mdi mdi-home menu-icon"></i>
                </span> Diagnosa Penyakit Foot And Mouth Disease Domba
            </h3>
        </div>
        <div class="row">
            <div class="col-md-12 mt-2">
                <form action="<?=base_url('diagnosa/prosesdiagnosa')?>" method="post">
                    <div class="card">
                        <div class="card-header">
							<div class="d-flex justify-content-between">
								<p class="card-title mt-3">Form Diagnosa Penyakit</p>
								<div class="form-group" style="margin:0px">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Kode Diagnosa">
										<div class="input-group-append">
										<button class="btn btn-sm btn-gradient-success py-3" type="button">Search</button>
										</div>
									</div>
								</div>
							</div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-6 stretch-card">
                                <div class="card">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-3 col-form-label">Nama Peternak</label>
                                        <input type="hidden" id="kode" name="kode" value="<?=$kode;?>">
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                placeholder="Nama Peternak">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telepon" class="col-sm-3 col-form-label">No. Telp</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="telepon" name="telepon"
                                                placeholder="+62">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="alamat" id="alamat"
                                                placeholder="Alamat Lengkap"></textarea>
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
                            <button class="btn btn-success">Diagnosa</button>
                            <a href="<?=base_url()?>" class="btn btn-danger float-right" style="margin-right: 5px;">
                                <i class="fa fa-mail-reply"></i>
                                Kembali
                            </a>
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
