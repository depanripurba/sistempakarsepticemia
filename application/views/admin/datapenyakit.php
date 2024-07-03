<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-success text-white me-2">
                    <i class="fa fa-stethoscope menu-icon"></i>
                </span> List Data Penyakit Foot And Mouth Disease Domba
            </h3>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" align="right">
                        <!-- <a class="btn btn-success" href="<?= base_url('tambahdatapenyakit') ?>">
                            <i class="mdi mdi-plus"></i>
                            <span>Tambah Data Penyakit Baru</span>
                        </a> -->
                    </div>
                    <div class="card-body">
                        <?=$this->session->flashdata('message');?>
                        <table class="table-responsive">
                            <thead>
                                <tr>
                                    <th style="width:50px">No</th>
                                    <th style="width:125px">Kode Penyakit</th>
                                    <th style="width:150px">Nama Penyakit</th>
                                    <th style="width:680px">Solusi</th>
                                    <th style="width:110px;text-align:center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor = 1 ?>
                                <?php foreach ($penyakit['penyakit'] as $data) : ?>
                                <tr>
                                    <td class="text-center"><?= $nomor ?></td>
                                    <td><?= $data->kode_penyakit ?></td>
                                    <td><?= $data->nama_penyakit ?></td>

                                    <td>
                                        <ul style="padding: 0 10px;margin:0">
                                            <?php
                                                        $solusi = $data->solusi;
                                                        $solusiArr = explode("+", $solusi);

                                                        for ($i = 1; $i < count($solusiArr); $i++) {
                                                            echo "<li>" . $solusiArr[$i] . "</li>";
                                                        }
                                                        ?>
                                        </ul>
                                    </td>
                                    <td style="text-align:center">
                                        <a href="<?= base_url('editpenyakit/') ?><?= $data->kode_penyakit ?>">
                                            <button type="button" class="btn btn-inverse-info btn-icon">
                                                <i class="mdi mdi-pen"></i>
                                            </button>
                                        </a>
                                        <!-- <a href="<?= base_url('hapuspenyakit/' . $data->kode_penyakit) ?>">
                                            <button type="button" class="btn btn-inverse-danger btn-icon">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </a> -->
                                    </td>
                                    <?php $nomor++ ?>
                                    <?php endforeach ?>
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
