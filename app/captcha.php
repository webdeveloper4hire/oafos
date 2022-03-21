<?php
/* captcha.php file*/

	session_start();
	
	header("Expires: Tue, 01 Jan 2013 00:00:00 GMT"); 
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
	header("Cache-Control: no-store, no-cache, must-revalidate"); 
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	
	$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < 5; $i++) 
    {
        $randomString .= $chars[rand(0, strlen($chars)-1)];
    }
	
	$_SESSION['captcha'] = strtolower( $randomString );
	
	
	$im = @imagecreatefrompng("img/captcha_bg.png"); 
	
    /* generating the dots randomly in background */
	for( $i=0; $i<$random_dots; $i++ ) {
	imagefilledellipse($image, mt_rand(0,$image_width),
	mt_rand(0,$image_height), 2, 3, $image_noise_color);
	}


	/* generating lines randomly in background of image */
	for( $i=0; $i<$random_lines; $i++ ) {
	imageline($image, mt_rand(0,$image_width), mt_rand(0,$image_height),
	mt_rand(0,$image_width), mt_rand(0,$image_height), $image_noise_color);
	}
	imagettftext($im, 30, 0, 10, 38, imagecolorallocate ($im, 0, 0, 0), 'typewriter.ttf', $randomString);
	
	header ('Content-type: image/png');
	imagepng($im, NULL, 0);
	imagedestroy($im);

?>