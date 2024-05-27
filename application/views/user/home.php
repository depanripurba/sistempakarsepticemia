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
	body{
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
				<img class="logo" src="<?=base_url('assets/img/logo.png')?>" alt="">
				<p class="header-text">SISTEM PAKAR ENDOKRIN</p>
			</div>
			<a href="<?=base_url('login')?>">ADMIN</a>
		</div>
		<div class="center">
			<p class="center-text">Selamat Datang Di Website</p>
			<br>
			<p class="center-text">Sistem Pakar Dalam Mendiagnosa Penyakit Endokrin Pada Manusia Menggunakan<br>Metode Teorema Bayes (Studi Kasus :<br>Mitra Sejati Medan)</p>
			<a class="button-diagnosa" href="<?=base_url('user/login')?>">
				<span>MULAI MENDIAGNOSA</span>
			</a>
		</div>
	</div>
</body>
</html>
