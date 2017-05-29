<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati|Statement Break:.</title>
</head>

<body>
<?php
for ($nilai=1; $nilai<=12; $nilai++)
{
print "<b>$nilai x 3 = ".($nilai*3)."<br><br>";
if ($nilai==4)
{print "<b>Berhenti disini,\$nilai=$nilai</b><br>";
break;}
}
?>
</body>
</html>
