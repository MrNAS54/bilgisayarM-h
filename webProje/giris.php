<?php
	$mail= "b191210006@sakarya.edu.tr";
	$sifre="12345";
	
	$verimail= $_POST['mail'];
	$verisifre= $_POST['sifre'];
	
	if($verimail==$mail && $verisifre==$sifre)
	{
		header("Refresh: 2; url=hakkimda.html");
		die("Hoşgeldin B191210006.Ana Sayfaya yönlendiriliyorsun.");
	}
	else{
		header("Refresh: 2; url=giris.html");
		die("Kullanıcı adı veya şifre hatalı.GİRİŞ sayfasına yönlendiriliyorsunuz");
	}
?>