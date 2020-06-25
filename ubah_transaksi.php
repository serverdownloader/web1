<?php session_start();
require("config.php");
$user = $_SESSION['userlogin'];
$cek="Select * from transaksitbl where username = '$user' AND status ='0'";
$hasil = mysql_query($cek);
$result = mysql_num_rows($hasil);
$data=mysql_fetch_array($hasil);
if ($result > 0){
	$faktur =$data['notransaksi'];
	
	for ($i=1; $i<=$_POST['n']; $i++)
		{
		$idp = $_POST['id'.$i];
  		$cari2="select * from barangtbl where id='$idp'";
  		$hasil2=mysql_query($cari2);
  		$row2 = mysql_fetch_array($hasil2);
  		$har=$row2['harga'];
  		if($hasil2){
  			$jmlubah  = $_POST['jumlah'.$i];
  			$totubah = $jmlubah*$har;
    		$query = "UPDATE transaksirincitbl SET jumlah = $jmlubah, subtotal=$totubah WHERE id ='$idp' and username = '$user' And notransaksi =$faktur";
    		mysql_query($query);
  		}
	}
	
	
}
header("location:keranjang_belanja.php");
?>

