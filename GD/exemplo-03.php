<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 320, 250, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 300, 350, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", utf8_decode("João Pedro Mattos Lott"));
imagestring($image, 3, 105, 605, "Concluido em: ".date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image);
#imagejpeg($image, "certificado_".date("Ymd").".jpg");
imagedestroy($image);

?>