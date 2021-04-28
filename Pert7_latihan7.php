<HTML>
<HEAD>
<TITLE> Penggunaan Split </TITLE>
</HEAD>
<BODY>
<?php

// Nama : Nofian Afrizal
// Kelas : 06TPLE012

$tanggal = "17-05-2010";
list($hari, $bulan, $tahun) = split("-", $tanggal);
echo "Hari = $hari";
echo "<br />";
echo "Bulan = $bulan";
echo "<br />";
echo "Tahun = $tahun";

?>
</BODY>
</HTML> 
