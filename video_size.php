<?php
/* 
 * вы можете заменять в строке ширину и высоту видео
 * регулярные выражения найдут размеры высоты и ширины и заменят на заданные
 */
$string = '<iframe src="//player.vimeo.com/video/105540811" width="300" height="250" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';

if (preg_match('/width="([\d]{3,})"(.*?)height="([\d]{3,})"/i', $string, $arr))
{
	$w = (int)$arr[1];
	$h = (int)$arr[3];
}

$x_max_size = 798; // Максимальная ширина эскиза
$y_max_size = 798; // Максимальная высота эскиза
// если видео > 798
if ($w>$x_max_size) {
    $pr = $x_max_size/$w;
    $w = round($w*$pr);
    $h = round($h*$pr);
}
if ($h>$y_max_size) {
    $pr = $y_max_size/$h;
    $w = round($w*$pr);   
    $h = round($h*$pr);
}
// если видео < 798
if ($w<$x_max_size) {
    $pr = $x_max_size/$w;
    $w = round($w*$pr);
    $h = round($h*$pr);
}
if ($h<$y_max_size) {
    $pr = $y_max_size/$y_max_size;
    $w = round($w*$pr);   
    $h = round($h*$pr);
}

// замена в строке
//для ширины
$pattern = '/width="([\d]{3,}")(.*?)height="([\d]{3,}")/i';
$replacement = "width=\"$w\", height=\"$h\"";
$wFinal = preg_replace($pattern, $replacement, $string);
echo $wFinal;

?>