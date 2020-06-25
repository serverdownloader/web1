<?php
include("config.php");
$cek="Select * from kategoritbl order by id asc";
$hasil=mysql_query($cek);
if ($hasil > 0) {
	if ((ISSET($_SESSION['userlogin'])) == ''){
		echo "<ul><img src=\"Gambar/Bullet.png\" border=\"0\" width=\"8\" height=\"8\"><a href=\"home.php?kategori=All\">&nbsp;&nbsp;All</a></li></ul>";
	}else{
		echo "<ul><img src=\"Gambar/Bullet.png\" border=\"0\" width=\"8\" height=\"8\"><a href=\"index.php?kategori=All\">&nbsp;&nbsp;All</a></li></ul>";
	}
	while($data=mysql_fetch_array($hasil))
		{
			if ((ISSET($_SESSION['userlogin'])) == ''){
		echo "<ul><img src=\"Gambar/Bullet.png\" border=\"0\" width=\"8\" height=\"8\"><a href=\"index.php?kategori=$data[kategori]\">&nbsp;&nbsp;$data[kategori]</a></li></ul>";
			}
			else{
			echo "<ul><img src=\"Gambar/Bullet.png\" border=\"0\" width=\"8\" height=\"8\"><a href=\"home.php?kategori=$data[kategori]\">&nbsp;&nbsp;$data[kategori]</a></li></ul>";
			}	
		}
}
?>