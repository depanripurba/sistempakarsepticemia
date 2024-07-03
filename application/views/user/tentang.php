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
.box-about{
	max-width: 700px;
	background: #00000080;
	border: 1px solid #ddd;
	padding: 20px;
	border-radius: 12px;
}
</style>

<body>
    <div class="mask">
        <div class="header">
            <div class="header-brand">
                <p class="header-text">SISTEM PAKAR</p>
            </div>
        </div>
        <div class="center">
            <div>
				<div class="box-about">
					<p class="center-text">TENTANG APLIKASI</p>
					<div class="divide-text"></div>
					<p class="font-text">
					Selamat datang di aplikasi sistem pakar kami yang dirancang khusus untuk mendiagnosa penyakit Foot and Mouth Disease (FMD) pada domba. Penyakit FMD merupakan salah satu penyakit menular yang sangat berbahaya dan dapat menyebabkan kerugian ekonomi yang signifikan dalam peternakan. Dengan menggunakan teknologi Teorema Bayes, aplikasi ini mampu memberikan diagnosa yang akurat dan cepat berdasarkan gejala-gejala yang ditunjukkan oleh domba.
					</p>
				</div>
				<a class="button-diagnosa" href="<?=base_url('')?>">
					<span>KEMBALI</span>
				</a>
            </div>
            <img src="<?=base_url('assets/img/domba.png')?>" alt="">
        </div>
    </div>
</body>

</html>
