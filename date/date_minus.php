<?php

/*вычитание разницы из временных отрезков*/

$s = date_create('2009-01-11');
$e = date_create('2009-10-20');

$i = date_diff($s, $e); // вычитание времени
echo $i->format('%R%d days');

var_dump($i);
//object(DateInterval)#3 (8) { ["y"]=> int(0) ["m"]=> int(9) ["d"]=> int(2) 
//["h"]=> int(0) ["i"]=> int(0) ["s"]=> int(0) ["invert"]=> int(0) ["days"]=> int(275) } 9
echo $i->m;

?>