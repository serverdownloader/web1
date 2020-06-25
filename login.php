<!-- Toko online -->
<!-- https://github.com/h4ckDC6/tokoonline_php-mysql -->


<?php session_start();
include("config.php");
$user = $_POST['usertxt'];
$user = str_replace("'","&acute;",$user);
$psw=$_POST['pswtxt'];
$psw= str_replace("'","&acute;",$psw);
$cek = "Select * from pelanggantbl where username='".$user."' and password='".md5($psw)."'";
//menyeleksi ke tabel admin username dan password berdsarkan variabel username dan password
//untuk password sebelumnya telah dienkripsi dengan fungsi md5
$hasil = mysql_query($cek);
$hasil_cek = mysql_num_rows($hasil);
//jika data tidak ditemukan maka tamplan pesan user dan psw salah
if ($hasil_cek==0){
header("location:index.php");
//echo "Username dan Password yang Anda isi salah...!!!";
}else{
//jika data ditemukan maka buka halaman menu utama dan sekaligus membuka session
$_SESSION['userlogin'] =$user;
//echo "ada session ".$_SESSION['userlogin'];
header("location:home.php");
}
?>