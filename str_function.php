<?php

//$str = "site/sssssssss/s/s/template/default/upload/images/empty/";
$str = "w/eff/ff/ff/d/u_mini.jpg";

function crop_dir($x)
{    
    $count = substr_count($x, '/') - 1;
    //echo $count;
	$folder = explode('/', $x);
	// выводим конечный результат
	return $folder[$count];
}

function getImgName($str)
{
	$num = strrpos ($str, '/');
	$num += 1; 
	$res = substr($str, $num);
	return $res;
}

function getPathImg($str)
{
	$num = strrpos ($str, '/');
	$num += 1; 
	$imgName = substr($str, $num);
	
	$path = str_replace($imgName, '', $str);
	return $path;
}

function getOriginImg($str)
{
	$search = '_mini';	
	$res = stripos($str, $search, TRUE);
	if($res === FALSE)
	{
		return 'не найдена в строке!';		
	}
	else
	{
		return 'есть совпадение!';			
	}
	
	return $str;
}

//echo getOriginImg($str);

echo strpos($str, '_mini', TRUE);

?>