<?php session_start();
require("config.php");
$member = $_SESSION['userlogin'];
$cari="select * from transaksitbl where username ='".$member."' and status ='0' order by notransaksi desc";
$query=mysql_query($cari);
$hasil=mysql_fetch_array($query);
if($hasil > 0){
$faktur = $hasil['notransaksi'];
}else{
$query = "insert into transaksitbl 	(username,status)
		Values ('$member','0')";
$result = mysql_query($query);

$cari="select * from transaksitbl order by notransaksi desc";
$query=mysql_query($cari);
$hasil=mysql_fetch_array($query);
if($hasil > 0){
$faktur = $hasil['notransaksi'];
}
}
?>