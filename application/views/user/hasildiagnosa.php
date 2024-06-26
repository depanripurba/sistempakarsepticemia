<style>
.ctrl {
    white-space: pre-wrap;
    line-height: 1.5;
}
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-success text-white me-2">
                    <i class="fa fa-stethoscope menu-icon"></i>
                </span> Hasil Diagnosa Penyakit FMD
            </h3>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4 align="center">
                                    <i class="fas fa-notes-medical mr-2"></i>
                                    <span>Hasil Diagnosa</span>
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <div class="row">
                            <div class="col-md-6 stretch-card mt-5">
                                <div class="card">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Peternak</label>
                                        <input type="text" class="form-control" value="<?=$userdata['nama']?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Telepon</label>
                                        <input type="number" class="form-control" value="<?=$userdata['telepon']?>"
                                            disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <textarea class="form-control" disabled><?=$userdata['alamat']?></textarea>
                                    </div>
                                    <?php $rowG = count($hasil['gejalacentang']);?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Gejala yang dipilih</label>
                                        <textarea class="form-control ctrl" disabled rows="<?=$rowG?>" cols="30"><?php
											foreach ($hasil['gejalacentang'] as $g):
												echo $g->nama_gejala.'&#13;&#10;';
											endforeach;
										?>
										</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hasil Diagnosis</label>
                                        <textarea class="form-control ctrl" disabled rows="<?=$rowG?>" cols="30"><?php
										 echo $hasil['namapenyakit'];
										?>
										</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Solusi</label>
                                        <textarea class="form-control ctrl" disabled rows="<?=$rowG?>" cols="30"><?php
										echo $hasil['solusi'];
										?>
										</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nilai Probabilitas</label>
                                        <textarea class="form-control ctrl" disabled rows="<?=$rowG?>" cols="30"><?php
											echo $hasil['nilaipeluang']?> atau <?=$hasil['persenpeluang'] . '%'
										?>
										</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <table class="mt-3">
                            <tr>
                                <td style="width:200px">Nilai Probabilitas Bayes</td>
                                <td style="width:15px">:</td>
                                <td><?=$hasil['nilaipeluang']?> atau <?=$hasil['persenpeluang']?> %</td>
                            </tr>
                            <tr>
                                <td style="width:200px">Penyakit</td>
                                <td style="width:15px">:</td>
                                <td><?=$hasil['kodepenyakit']?> || <?=$hasil['namapenyakit']?></td>
                            </tr>
                            <tr style="vertical-align: top">
                                <td style="width:200px">Solusi</td>
                                <td style="width:15px">:</td>
                                <td>
                                    <ul style="padding: 0 20px;">
                                        <?php
												$solusi = $hasil['solusi'];
												$solusiArr = explode("+",$solusi);
	
												for($i = 1 ; $i < count($solusiArr); $i++)
												{
													echo "<li>".$solusiArr[$i]."</li></br>";
												}
												?>
                                    </ul>
                                </td>
                            </tr>
                        </table> -->
                        <!-- this row will not appear when printing -->
                        <div class="row no-print mt-3">
                            <div class="col-12">
                                <a href="<?=base_url('user/printDiagnosa/'.$userdata['kode_konsultasi'])?>"
                                    rel="noopener" target="_blank" class="btn btn-success">
                                    <i class="fa fa-print"></i>
                                    Print
                                </a>
                                <a href="<?=base_url('user/diagnosa')?>" class="btn btn-primary float-right"
                                    style="margin-right: 5px;">
                                    <i class="fa fa-mail-reply"></i>
                                    Kembali
                                </a>
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
        <div class="d-sm
-flex justify-content-ce
nter justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                2024</sp an>
        </div>
    </footer>
    <!-- partial -->
</div>

<!-- main-panel ends -->