<?php
	include("nivoslider.php");
	$nivo=new NivoSlider('nivoslider',618,200);		// base path is same directory

	//$nivo->add_slide(ImagePath,URL,Caption);
	$nivo->add_slide('Gambar_Slider/1.jpg','','');
	$nivo->add_slide('Gambar_Slider/2.jpg','http://www.webrh.co.id','Product webRH');	
	$nivo->add_slide('Gambar_Slider/3.jpg','','');
	$nivo->add_slide('Gambar_Slider/4.jpg','','');
	
?>

<?php $nivo->render_includes(); ?>
<?php $nivo->render_slides() ?>
