<?php
// настройки размера изображения
$im = imageCreateTrueColor(1600, 1100);  
// настройки цвета
$c = imageColorAllocate($im, 120, 200, 100);
$c2 = imageColorAllocate($im, 130, 250, 150);
$c3 = imageColorAllocate($im, 200, 230, 210);
$c4 = imageColorAllocate($im, 190, 210, 210);
imageFilledRectangle($im, 600, 600, 400, 300, $c);
imageFilledRectangle($im, 350, 400, 400, 300, $c2);
imageFilledRectangle($im, 650, 400, 600, 300, $c3);
imageFilledRectangle($im, 470, 300, 520, 250, $c4); // (<- | ->  ^)
imageArc($im, 495, 220, 70, 120, 0, 360, $c4); 
// заливка окружности голова
imageFill($im, 497, 222, $c4);
// ноги
imageFilledRectangle($im, 600, 1000, 520, 600, $c2);
imageFilledRectangle($im, 400, 1000, 480, 600, $c2);

header("Content-type: image/png");
imagePng($im);
imageDestroy($im);
?>