<!-- Toko online -->
<!-- https://github.com/h4ckDC6/tokoonline_php-mysql -->

<?php
$host = "localhost"; 
$user = "root"; 
$pass = "";
$db ="webrh"; // Nama Database 
$koneksi = mysql_connect($host, $user, $pass);
if (!$koneksi) {
echo "Koneksi ke server tidak berhasil";
};
$database = mysql_select_db($db);
if (!$database) {
echo "Koneksi ke database tidak berhasil";
}
mysql_select_db($db) or die ("Database not Found !");


//untuk menghubungkan database 


?>