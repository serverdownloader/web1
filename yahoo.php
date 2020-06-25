<?php 
$idyahoo="si.bubble"; 
$proses=explode(",",$idyahoo); 
reset($proses);
foreach ($proses as $tujuan) { 
echo ("<a href=\"ymsgr:sendIM?.target=$tujuan\">&nbsp;
<img border=0 src=\"http://opi.yahoo.com/online?u=$tujuan&m=g&t=14&l4=us\"></a><br>");
}
?>