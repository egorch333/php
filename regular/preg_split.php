<?php
// двухмерный массив  PREG_SPLIT_OFFSET_CAPTURE
/*
Если это флаг установлен, для каждого найденного совпадения будет также возвращено смещение дополнительной строки. Заметьте, что это изменит return-значение в массиве, где каждый элемент является массивом, состоящим из совпавшей строки в смещении 0 и её строкового смещения в subject - в смещении1.
Этот флаг доступен, начиная с PHP 4.3.0.
*/


$str = 'hypertext language programming';
$chars = preg_split('/ /', $str, -1, PREG_SPLIT_OFFSET_CAPTURE);
print_r($chars);

echo "<br />";


$z=0;
for($i=0; $i<count($chars); $i++)
{
  echo $chars[0][$z++]."<br />";
}
echo "-------------------<br />";

$x=0;
for($i=0; $i<count($chars); $i++)
{
  echo $chars[1][$x++]."<br />";
}
echo "-------------------<br />";

$y=0;
for($i=0; $i<count($chars); $i++)
{
  echo $chars[2][$y++]."<br />";
}
