<?php
/*
// настройки размера изображения
$im = imageCreateTrueColor(90, 50);  
// генерация капчи
$rand = mt_rand(1000, 9999);
// настройки цвета
$c = imageColorAllocate($im, 255, 255, 255);
imageTtfText($im, 20, 0, 10, 30, $c, "verdana.ttf", $rand);
header("Content-type: image/png");
imagePng($im);
imageDestroy($im);
*/

session_start(); // Начинаем сессию
$number_1 = rand(1, 10); // Генерируем 1-е случайное число
$number_2 = rand(1, 10); // Генерируем 2-е случайное число
$_SESSION['rand_code'] = $number_1 + $number_2; // Записываем их сумму в сессию
$dir = "fonts/"; // Директория с шрифтами
//$image = imagecreatetruecolor(200, 60); // Создаём изображение
$image = imagecreatetruecolor(95, 30); // Создаём изображение
$color = imagecolorallocate($image, 200, 100, 90); // Задаём 1-й цвет
$white = imagecolorallocate($image, 255, 255, 255); // Задаём 2-й цвет
//imagefilledrectangle($image, 0, 0, 399, 99, $white); // Делаем капчу с белым фоном
imagefilledrectangle($image, 0, 0, 95, 50, $white); // Делаем капчу с белым фоном
//imagettftext ($image, 30, 0, 10, 40, $color, $dir."verdana.ttf", "$number_1 + $number_2"); // Пишем текст
imagettftext ($image, 15, 0, 5, 20, $color, $dir."verdana.ttf", "$number_1 + $number_2 ="); // Пишем текст
header("Content-type: image/png"); // Отсылаем заголовок о том, что это изображение png
$_SESSION['img'] = rand(10000, 100000000000000).date("_h-i-s");
imagepng($image, $_SESSION['img']."_image.png"); // Выводим изображение

?>