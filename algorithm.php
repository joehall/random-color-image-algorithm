<?php

set_time_limit(30000);

$x = 500;
$y = 500;

$gd = imagecreatetruecolor($x, $y);

$color = rand(0, 255);

for ($i = 0; $i < 500; $i++) {
  for ($b = 0; $b < 500; $b++) {
		for ($a = 0; $a < 500; $a++) {
  			imagesetpixel($gd, round($b),round($a), imagecolorallocate($gd, rand(0, 255), rand(0, 255), rand(0, 255)));
		}
  	}
}
 
header('Content-Type: image/png');
imagepng($gd);

?>
