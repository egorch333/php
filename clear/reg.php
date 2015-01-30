<?php

// для архива
function clear_date($x)
{
	$reg = "/^[0-9-]*$/i"; // только _-#
	if (!preg_match($reg, $x)) 
	{
		//Взлом!
		return FALSE;		
		
	}
	else 
	{
		// Вхождение не найдено. Взлома нет чистые данные
		$x = mysql_real_escape_string(htmlspecialchars(stripslashes($x)));
		return $x;
	}
}

// для архива
function clear_ip($x)
{
	$reg = "/^[0-9.]+$/i"; // только _-#
	if (!preg_match($reg, $x)) 
	{
		//Взлом!
		return FALSE;		
		
	}
	else 
	{
		// Вхождение не найдено. Взлома нет чистые данные
		$x = mysql_real_escape_string(htmlspecialchars(stripslashes($x)));
		return $x;
	}
}

function clear_comment_id($x)
{
	$reg = "/^[0-9-_.]+$/i"; // только _-#
	if (!preg_match($reg, $x)) 
	{
		//Взлом!
		return FALSE;		
		
	}
	else 
	{
		// Вхождение не найдено. Взлома нет чистые данные
		$x = mysql_real_escape_string(htmlspecialchars(stripslashes($x)));
		return $x;
	}
}

$x="193234s2342";
echo clear_comment_id($x);
?>