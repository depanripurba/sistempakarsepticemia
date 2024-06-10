<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-success text-white me-2">
                    <i class="mdi mdi-medical-bag"></i>
                </span> List Basis Pengetahuan
            </h3>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" align="right">
                        <a class="btn btn-success" href="<?= base_url('tambahbasis') ?>">
                            <i class="mdi mdi-plus"></i>
                            <span>Tambah Data Basis Pengetahuan</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <?=$this->session->flashdata('message');?>
                        <table class="table-responsive">
                            <thead>
                                <tr>
                                    <th style="width: 40px">No.</th>
                                    <th style="width: 120px">Kode Penyakit</th>
                                    <th style="width: 150px">Nama Penyakit</th>
                                    <th style="width: 110px">Kode Gejala</th>
                                    <th style="width: 445px">Nama Gejala</th>
                                    <th style="width: 150px">Nilai Probabilitas</th>
                                    <th style="width: 110px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor = 1 ?>
                                <?php foreach ($basis as $b) : ?>
                                <tr>
                                    <td><?= $nomor++ ?></td>
                                    <td><?= $b->kode_penyakit ?></td>
                                    <td><?= $b->nama_penyakit ?></td>
                                    <td><?= $b->kode_gejala ?></td>
                                    <td><?= $b->nama_gejala ?></td>
                                    <td><?= $b->nilai ?></td>
                                    <td>
                                        <a href="<?= base_url('editbasis/') . $b->id ?>">
                                            <button type="button" class="btn btn-inverse-info btn-icon">
                                                <i class="mdi mdi-pen"></i>
                                            </button>
                                        </a>
                                        <a href="<?= base_url('hapusbasis/' . $b->id) ?>">
                                            <button type="button" class="btn btn-inverse-danger btn-icon">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach ;?>
                            </tbody>
                        </table>
                    </div>
                </div>
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