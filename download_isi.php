<?php
require("config.php");
$numresult = mysql_query("SELECT * FROM downloadtbl ORDER BY id DESC");
$jumlah = mysql_num_rows($numresult);
$limit = 5;
if (empty($offset)) {
$offset = 0;
}
$query = "SELECT * FROM downloadtbl ORDER BY id DESC LIMIT $offset, $limit";
$result = mysql_query($query);
echo "<div align=\"left\">";
$halaman = intval($jumlah/$limit);
if ($jumlah%$limit) { 
$halaman++; 
} 
for ($i=1;$i<=$halaman;$i++) {
$newoffset=$limit*($i-1); 
if ($offset!=$newoffset) 
{ 

} else { 

} 
}

$kolom = 15;
$lbrKolom   = (int)(50/$kolom);
$i = 0;
		
while ($data = mysql_fetch_array($result)) {
{
if ($i % $kolom == 0)
{
echo '	
<table width="100%" border="0" cellpadding="2" cellspacing="2"->
<td width="'.$lbrKolom .'%" height = "100%" align=center>
<tr>
<td  valign="top"><font face=Tahoma size=\"2.5\" color = "#006"><b>'.$data['judul'].'</b></td>
</tr>
<tr>
<td  valign="top">'.$data['deskripsi'].'</td>
</tr>
</td>
<tr>
<td colspan="3" align ="center"><br>							
<a href="'.$data['url'].'"><img src="Gambar/download.jpg"\ title="Download" border="0" width=\"50\" height=\"50\"></a>
</td>
</tr>
</td>		  
</table>
';
}
}
}
?>