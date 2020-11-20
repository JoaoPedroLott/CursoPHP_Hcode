<?php

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

$newWidth = 256;
$newHight = 256;

list($old_width, $old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($newWidth, $newHight);
$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $newWidth, $newHight, $old_width, $old_height);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

?>