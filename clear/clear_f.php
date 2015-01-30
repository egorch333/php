<?php
// защита сайта

function clear($x)
{
	// предварительная очистка строки
	$x = mysql_real_escape_string(htmlspecialchars(stripslashes($x)));
	
	// проверка на число
	if (is_numeric($x))
	{
		return $x;
	}
	else
	{ 
		//сработала защита
		return FALSE;		
	}	
	
}

//$x="6465465";
/* $x="<?php echo 5555; ?>"; */
$x = "2013-100000-1213213";
echo clear($x);
echo "--------------- <br />";

function clear_date($x)
{
	$reg = "/[a-zа-я~!@#$%^&?=*()+{}|><{}\.:;]/i"; // только _-#
	if (preg_match($reg, $x)) {
		//Взлом!
		return FALSE;
		
	} else {
		// Вхождение не найдено. Взлома нет чистые данные
		$x = mysql_real_escape_string(htmlspecialchars(stripslashes($x)));
		return $x;
	}
}

echo clear_date($x);

?>