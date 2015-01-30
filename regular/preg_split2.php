<?php
// одномерный массив  PREG_SPLIT_DELIM_CAPTURE
//Если это флаг установлен, выражение в скобках в патэрне ограничителя будет захвачено и возвращено. Этот флаг был введён в 4.0.5.



$str = 'hypertext language programming text lang program';
$chars = preg_split('/ /', $str, -1, PREG_SPLIT_DELIM_CAPTURE);
print_r($chars);

echo "<br />";


$z=0;
for($i=0; $i<count($chars); $i++)
{
  echo $chars[$z++]."<br />";
}
echo "-------------------<br />";

