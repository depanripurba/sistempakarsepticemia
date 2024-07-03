<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-success text-white me-2">
                    <i class="mdi mdi-medical-bag"></i>
                </span> List Data Gejala
            </h3>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" align="right">
                        <!-- <a class="btn btn-success" href="<?= base_url('tambahdatagejala') ?>">
                            <i class="mdi mdi-plus"></i>
                            <span>Tambah Data Gejala Baru</span>
                        </a> -->
                    </div>
                    <div class="card-body">
                        <?=$this->session->flashdata('message');?>
                        <table class="table-responsive">
                            <thead>
                                <tr>
                                    <th style="width:120px">Kode Gejala</th>
                                    <th style="width:900px">Nama Gejala</th>
                                    <th style="width:110px;text-align:center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($gejala as $item): ?>
                                <tr>
                                    <td><?=$item['kode_gejala']?></td>
                                    <td><?=$item['nama_gejala']?></td>
                                    <td style="text-align:center">
                                        <a href="<?=site_url('Master/ubahdatagejala/'.$item['kode_gejala'])?>">
                                            <button type="button" class="btn btn-inverse-info btn-icon">
                                                <i class="mdi mdi-pen"></i>
                                            </button>
                                        </a>
                                        <!-- <a href="<?=site_url('Master/deleteGejala/'.$item['kode_gejala'])?>">
                                            <button type="button" class="btn btn-inverse-danger btn-icon">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </a> -->
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
                2024</span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->

