
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">

                <div class="container-fluid">
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-notes-medical mr-2"></i>
                                    <span>Hasil Diagnosa</span>
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <div class="row invoice-info">
                            <div class="col-12">
                                <?php
                                if($user['role']==="Admin"){
                                    $user['fullname']='Administrator';
                                    $user['alamat']='Administrator';
                                }

                                ?>
                                <div class="row mt-3">
                                    <div class="col-1">
                                        <span>Nama</span>
                                    </div>
                                    <div class="col-4"><span>: <?=$user['fullname']?></span></div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <span>Alamat</span>
                                    </div>
                                    <div class="col-4"><span>: <?=$user['alamat']?></span></div>
                                </div>
                            </div>
                        </div>
                        <table class="mt-3">
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
                        </table>
                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12">
                                <a href="<?=base_url('cetakhasil')?>" rel="noopener" target="_blank"
                                    class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                                <a href="<?=base_url('user/diagnosa')?>" class="btn btn-primary float-right"
                                    style="margin-right: 5px;">
                                    <i class="fas fa-back"></i> Kembali
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>