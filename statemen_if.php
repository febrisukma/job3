<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati|Statemen IF:.</title>
</head>

<body>


<form id="form1" name="form1" method="post" action="statemen_if.php">
<p align="left"> Berapa nilai PHPmu? <input type="text" name="nilai" id="nilai"/>
</p>
<p align="left"><input type="submit" name="cek" id="button" value="Cek" />
</p>
</form>
<?php
$nilai=$_POST['nilai'];

if($_POST['cek']) //perintah untuk menguji penekanan tombol Cek
echo"Nilai angka Anda = $nilai";
{echo"<br><h3>";
	if($nilai=="")
		{echo"Anda belum menentukan nilai..!";}
	elseif(!is_numeric($nilai)) //jika nilai tidak bertype numeric
		{echo"Ini bukan nilai angka!";}
	else
		{
			if($nilai<=30) //statement pertama
				{echo"Anda mendapat nilai huruf <b> E </b>";}
			elseif($nilai<=50) //statement kedua
				{echo"Anda mendapat nilai huruf <b> D </b>";}
			elseif($nilai<=70) //statement ketiga
				{echo"Anda mendapat nilai huruf <b> C </b>";}
			elseif($nilai<=85) //statement keempat
				{echo"Anda mendapat nilai huruf <b> AB </b>";}
			else				//statement kelima
				{echo"Anda mendapat nilai huruf <b> A </b>";}
		}
	echo"</h3>";
	}
	?>
</body>
</html>
