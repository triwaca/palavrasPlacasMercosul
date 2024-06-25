<?php
    header('Content-type: image/png');
	putenv('GDFONTPATH=' . realpath('.'));
	$font = 'fe-font';
	$text = strtoupper(preg_replace('/[^[:alnum:]_]/', '',$_GET["text"]));
	$placa = imagecreatefrompng('placaBranca.png');
	$black = imagecolorallocate($placa, 0, 0, 0);
	imagestring($placa, 2, 8, 66, strtolower($text), $black);
	
	$inicio = substr($text,0,3);
	$meio = substr($text,3,1);
	$meio = str_replace('I','1',$meio);
	$meio = str_replace('O','0',$meio);
	$meio = str_replace('S','5',$meio);
	$letra = substr($text,4,1);
	$fim = substr($text,5);
	$fim = str_replace('I','1',$fim);
	$fim = str_replace('O','0',$fim);
	$fim = str_replace('S','5',$fim);
	$text = $inicio . $meio . $letra . $fim;
	
	while(strlen($text)<7){
	    $num = rand(2,9);
	    if($num==5) $num=8;
	    $text = $text . strval($num);
	}
	
	imagefttext($placa, 27, 0, 24, 53, $black, $font, $text);
    header("Content-Disposition: Attachment; filename=$text.png");
    imagepng($placa);
	imagedestroy($placa);
?>

