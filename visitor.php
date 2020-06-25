<?php
$tframe = 10;   
include("config.php");   
$db_table= "visitortbl";                 
$vis_ip = ip2long($_SERVER['REMOTE_ADDR']); //Menentukan nilai IP komputer
$vis_ip = 1; //Menentukan nilai IP komputer
$vis_time = time();
$new_vis = 1;
$get_ip = mysql_query("SELECT * FROM ".$db_table." WHERE ip=".$vis_ip." LIMIT 1") or die (mysql_error());
     while ($row=mysql_fetch_object($get_ip))
         {
         mysql_query("UPDATE ".$db_table." SET time='$vis_time' WHERE ip='$vis_ip'") 
            or die (mysql_error());
        $new_vis = 0;
        }
if ($new_vis == 1)
    {
    mysql_query("INSERT INTO ".$db_table." (ip, time) VALUES ('$vis_ip','$vis_time')") 
        or die (mysql_error());
    }
$tcheck = time() - (60 * $tframe);
$query = mysql_query("SELECT * FROM ".$db_table." WHERE time > $tcheck");
$onlinenow = mysql_num_rows($query);
if($onlinenow == 1)
    {
    echo"<b>$onlinenow</b> user sedang online";
    }
else
    {
    echo"<b>$onlinenow</b> user sedang online";
    }
?>