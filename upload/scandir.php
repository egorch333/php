<?php

/*
 * сканирование директории
 * */

$cur_dir = './football';
                              
$arr = scandir($cur_dir, 0);        
$count = count($arr);

print_r($arr);
?>