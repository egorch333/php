<?php
/*
 * показывает дату понедельника 
 * */

$mydate="2014-11-28";
$week=date("W",strtotime($mydate));
$sunday = date("d.m.Y",strtotime($week-date("W")." week -".(date("w")==0?6:date("w")-1)." day"));

echo $sunday."- понедельник";

echo "<br />";  
$newdate = date('Y-m-d', strtotime($mydate." - 2 day"));
//echo $newdate; 

$dateFinal = '2014-00-00';

for($i = 0; $i < 100; $i++)
{

echo $newdate = date('Y-m-d', strtotime($sunday." - ".$i." week"));
echo "<br />";

if($newdate < $dateFinal) break;

}
?>