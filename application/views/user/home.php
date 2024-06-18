<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
    <link rel="shortcut icon" href="<?=base_url('assets/img/logo.png')?>" type="image/x-icon">
    <title><?=$judul?></title>
</head>
<style>
body {
    background-image: url('<?=base_url('assets/img/bg.png')?>');
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    font-family: 'Poppins', sans-serif;
}
</style>

<body>
    <div class="mask">
        <div class="header">
            <div class="header-brand">
                <p class="header-text">SISTEM PAKAR</p>
            </div>
            <a href="<?=base_url('login')?>"> LOGIN </a>
        </div>
        <div class="center">
            <div>
                <p class="center-text">Sistem Pakar Diagnosa Penyakit FMD<br>(Foot & Mouth) Disease</p>
                <div class="divide-text"></div>
                <p class="font-text">Selamat datang di sistem pakar diagnosa panyakit FMD<br>Food and Mouth pada domba
                    menggunakan
                    Teorema
                    Bayes</p>
                <a class="button-diagnosa" href="<?=base_url('user/login')?>">
                    <span>MULAI MENDIAGNOSA</span>
                </a>
            </div>
            <img src="<?=base_url('assets/img/domba.png')?>" alt="">
        </div>
    </div>
</body>

</html>