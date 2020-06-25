<?php session_start();
require("config.php");
$user = $_SESSION['userlogin'];
$cek="Select * from transaksitbl where username = '$user' AND status ='0'";
$hasil = mysql_query($cek);
$result = mysql_num_rows($hasil);
$data=mysql_fetch_array($hasil);
if ($result > 0){
$faktur =$data['notransaksi'];
if(isset($_GET['id'])){$id = $_GET['id']; }
$query="delete from transaksirincitbl where notransaksi = $faktur AND id =$id";
$hapus=mysql_query($query);
if($query){
	header("location:keranjang_belanja.php");
}else{
	echo"Data gagal dihapus";
}
}
?>