<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Hasil</title>
</head>

<body style="font-family: Arial, Helvetica, sans-serif;padding:0;margin:0">
    <div>
        <img width="100px" src="<?= base_url('assets/img/logo1.png') ?>" alt="">
    </div>
    <center style="margin-left:50px;margin-top:-200px">
        <h2>DINAS PERKEBUNAN DAN PETERNAKAN</h2>
        <h2 style="margin-top:-20px">PROVINSI SUMATERA UTARA</h2>
        <b>
            <p style="font-size: 14px;margin-top:-15px">Jl. Jenderal Besar A.H. Nasution No. 24, Pangkalan Masyhur, Kec. Medan
                <br>Johor, Kota Medan, Sumatera Utara
            </p>
        </b>
    </center>
    <div style="border: 1px solid black;margin-left:-40px;margin-right:-40px">
    </div>
    <center>
        <h3>LAPORAN HASIL DIAGNOSA PENYAKIT FOOT AND <br> MOUTH DISEASE PADA DOMBA</h3>
    </center>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>Kode Diagnosa</td>
            <td>Nama Petenak </td>
            <td>No Telp </td>
            <td>alamt</td>
            <td>Solusi</td>
        </tr>
        <tr>
            <td><?= $diagnosa[0]->kode_konsultasi ?></td>
            <td><?= $diagnosa[0]->nama ?></td>
            <td><?= $diagnosa[0]->telepon ?></td>
            <td><?= $diagnosa[0]->alamat ?></td>
            <td><?= $diagnosa[0]->penyakit ?></td>
            <td>
                <ul>
                    <?php
                    $solusi = $diagnosa[0]->solusi;
                    $solusiArr = explode("+", $solusi);

                    for ($i = 1; $i < count($solusiArr); $i++) {
                        echo "<li>" . $solusiArr[$i] . "</li>";
                    }
                    ?>
                </ul>
            </td>
        </tr>

    </table>
    <div style="text-align: right;width:300px;margin-left:300px">
        <p><b>Mengetahui</b> </p>
        <p style="margin-top:-15px"><b>Dokter Spesialis Hewan</b></p>
        <br><br>
        <p><b>drh. Lia Brutu</b></p>
    </div>
</body>

</html>