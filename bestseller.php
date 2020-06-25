<marquee direction="up" height="175" width="150" scrollamount="2" scrolldelay="1" onMouseOut="this.start()" onMouseOver="this.stop()">
<p class="general" align="center">

<?php
require("config.php");
$query = "SELECT transaksirincitbl.id, transaksirincitbl.nama, transaksirincitbl.harga, gambar, jumlah, sum(jumlah) as jumlahjual FROM transaksirincitbl inner join barangtbl on transaksirincitbl.id = barangtbl.id GROUP BY transaksirincitbl.id order by jumlahjual desc LIMIT 0, 10";
		$result = mysql_query($query);
		$no = 1;
		while ($data = mysql_fetch_array($result)) {
echo '<b><font face="arial" size="2" color="red">[ '.$no.' ]</font></b><br><font color="blue">'.$data['nama'].'</a></font><br>Rp '.number_format($data['harga'],2,'.',',').'<br><img src="Produk/'.$data['gambar'].'"</br></br><br></br>';
				$no=$no+1;
			}
?>
</p>
</marquee>