<?php 

header("content-type: image/png");

$s = 500;
$img = imagecreatetruecolor($s, $s);

for ($i = 0; $i < $s; $i++) { 
    for ($j = 0; $j < $s; $j++) { 
        
        $color = imagecolorallocate($img, rand(50, 255), rand(50, 255), rand(50, 255));
        imagesetpixel($img, $i, $j, $color);
    }
}

imagepng($img);
imagedestroy($img);

?>