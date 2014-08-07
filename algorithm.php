<?php

define('HEIGHT', 500);
define('WIDTH' , 1000);

$gd = imagecreatetruecolor(WIDTH, HEIGHT);

for ($b = 0; $b < WIDTH; $b++) {
	for ($a = 0; $a < HEIGHT; $a++) {
		imagesetpixel($gd, $b, $a, imagecolorallocate($gd, rand(0, 255), rand(0, 255), rand(0, 255)));
	}
}

header('Content-Type: image/png');
imagepng($gd);
