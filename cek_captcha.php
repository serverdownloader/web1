<?php session_start();
if(($_POST['check']) == $_SESSION['check']) {
include("form_testimonial.php");
include("simpan_testimonial.php");
}else{ 
header("location:isitestimonial.php");
}
?>