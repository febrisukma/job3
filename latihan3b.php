<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati|Latihan 3 B:.</title>
</head>

<body>
<?php
$month= date ("m");
$year=date("Y");
$day=date("d");
// t digunakan untuk menghitung jumlah seluruh hari pada bulan ini
//ini digunakan untuk menampilkan semua tanggal pada bulan ini
$endDate=date("t",mktime(0,0,0,$month,$day,$year));
//membuat tabel kalender
echo '<font size="3">';
echo '<table ><tr><td align=center>';
echo '</td></tr></table>';
//membuat tebel baris nama-nama hari
echo '<table>
  <tr>
  <td align=center><font color=red>Minggu</font></td>
  <td align=center>Senin</td>
  <td align=center>Selasa</td>
  <td align=center>Rabu</td>
  <td align=center>Kamis</td>
  <td align=center>Jumat</td>
  <td align=center>Sabtu</td>
  </tr>';
//cek tanggal 1 hari sekarang
$s=date ("w", mktime (0,0,0,$month,1,$year));
for ($ds=1;$ds<=$s;$ds++) {
echo "<td>
</td>";}
for ($d=1;$d<=$endDate;$d++) {
//jika variabel w= 0 disini 0 adalah hari minggu akan membuat baris baru dengan </tr>
if (date("w",mktime (0,0,0,$month,$d,$year)) == 0) { echo "<tr>"; }
$fontColor="#000";
//menentukan warna pada tanggal hari biasa
if (date("D",mktime (0,0,0,$month,$d,$year)) == "Sun") { $fontColor="red"; }
echo "<td style=\"color:#333333\" align=center valign=middle> <span style=\"color:$fontColor\">$d</span></td>";
//jika variabel w= 6 disini 6 adalah hari sabtu maka akan pindah baris dengan menutup baris </tr>
if (date("w",mktime (0,0,0,$month,$d,$year)) == 6) { echo "</tr>"; }}
echo '</table>';


?>


</body>
</html>
