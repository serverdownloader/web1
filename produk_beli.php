<?php session_start();
include "config.php";
$id = $_GET['id'];
$cari_barang="select * from barangtbl where id=$id";
$hasil_barang=mysql_query($cari_barang);
$data_barang = mysql_fetch_array($hasil_barang);
$ciri=$data_barang['id'];
$nam=$data_barang['nama'];
$har=$data_barang['harga'];
	if((isset($_SESSION['userlogin'])) ==''){
		header("location:index.php");	
	}else{
		$member = $_SESSION['userlogin'];
		if($hasil_barang){
			require("faktur.php");
			$cari_transaksi="select * from transaksirincitbl where username='".$member."' AND id = '".$id."' and notransaksi ='".$faktur."'";
			$hasil_transaksi=mysql_query($cari_transaksi);
			$temukan = mysql_num_rows($hasil_transaksi);
			$data_transaksi = mysql_fetch_array($hasil_transaksi);
			if($temukan==0){
				$query = "insert into transaksirincitbl 	(notransaksi,username,id,nama,harga,jumlah,subtotal)
		Values ('$faktur','$member', '$ciri','$nam', '$har', '1', '$har')";
				$result = mysql_query($query);	
				header("location:keranjang_belanja.php");
			}else{
				$jmllama = $data_transaksi['jumlah'];
				$jmltambah = $jmllama + 1;
				$subtotaltambah = $jmltambah * $har;
				$query = "update transaksirincitbl set jumlah = '".$jmltambah."',subtotal = '".$subtotaltambah."' where notransaksi ='".$faktur."' and id ='".$id."'";
				$result = mysql_query($query);	
				header("location:keranjang_belanja.php");
			}
		}else{
			echo"Data gagal diInput..!";			
			}
	}
?>
