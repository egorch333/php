<?php
// одномерный массив  PREG_SPLIT_NO_EMPTY
// Если это флаг установлен, только непустые участки возвращаются функцией preg_split()


$str = 'hypertext language programming';
$chars = preg_split('/ /', $str, -1, PREG_SPLIT_NO_EMPTY);
print_r($chars);

echo "<br />";


$z=0;
for($i=0; $i<count($chars); $i++)
{
  echo $chars[$z++]."<br />";
}
echo "-------------------<br />";

