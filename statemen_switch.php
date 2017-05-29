<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati|Statemen SWITCH:.</title>
</head>

<body>
<?php
$m=date("m",time()); //mencari nilai bulan dalam format m
switch ($m)
	{
	case "1":$namabulan="Januari";break;
	case "2":$namabulan="Februari";break;
	case "3":$namabulan="Maret";break;
	case "4":$namabulan="April";break;
	case "5":$namabulan="Mei";break;
	case "6":$namabulan="Juni";break;
	case "7":$namabulan="Juli";break;
	case "8":$namabulan="Agustus";break;
	case "9":$namabulan="September";break;
	case "10":$namabulan="Oktober";break;
	case "11":$namabulan="November";break;
	default:$namabulan="Desember";break;
	}
	echo"<h2>Sekarang adalah bulan : $namabulan</h2>";
	?>
</body>
</html>
