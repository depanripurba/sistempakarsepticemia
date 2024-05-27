<?php
$hasil = $_SESSION['hasildiagnosa'];
$user = $this->session->userdata();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hasil Diangosa || Print</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url("assets/plugins/fontawesome-free/css/all.min.css")?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets/dist/css/adminlte.min.css')?>">
</head>
<body>

<div class="">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
