<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-success text-white me-2">
                    <i class="fa fa-cube"></i>
                </span> Data Riwayat Konsultasi
            </h3>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" align="left">
                    </div>
                    <div class="card-body">
                        <?=$this->session->flashdata('message');?>
                        <table class="table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align:center;width: 40px">No.</th>
                                    <th style="text-align:center;width: 120px">Nama Lengkap</th>
                                    <th style="text-align:center;width: 100px">No. Telp</th>
                                    <th style="text-align:center;width: 150px">Alamat</th>
                                    <th style="text-align:center;width: 100px">Penyakit</th>
                                    <th style="text-align:center;width: 150px">Solusi</th>
                                    <th style="text-align:center;width: 110px">Tanggal</th>
                                    <th style="text-align:center;width: 50px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor = 1 ?>
                                <?php foreach ($riwayat as $k) : ?>
                                <tr>
                                    <td><?=$nomor++.'.';?></td>
                                    <td><?=$k->nama;?></td>
                                    <td><?=$k->telepon;?></td>
                                    <td><?=$k->alamat;?></td>
                                    <td><?=$k->penyakit;?></td>
                                    <td>
                                        <ul style="margin-bottom:0px!important"><?php
										$data = explode('+',$k->solusi);
										for($i=1;$i<count($data);$i++){
											echo '<li>'. $data[$i] . '</li></br>';
										}
										?>
                                        </ul>
                                    </td>
                                    <td><?=$k->tanggal;?></td>
                                    <td>
                                        <a class="d-flex justify-content-center"
                                            onclick="return confirm('Anda yakin ingin menghapus Data Konsultasi ini?')"
                                            href="<?=site_url('Master/deleteKonsultasi/'.$k->kode_konsultasi)?>">
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
    <footer class=" footer">
        <div class="d-sm
-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright
                ©
                2024</sp an>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->
