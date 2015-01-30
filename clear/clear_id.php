<?php 

/*
http://2develop.ru/poleznoe/mer-predostorozhnosti-zalog-uspeha.html

$id = $_GET['id'];

if (is_numeric($id))
{
что-то делаем
}
else { exit(); }
*/


function clear2($x)
{

	if (is_numeric($x))
	{
		return $x;
	}
	else
	{ 
		return FALSE;
	}
}


//mysql_real_escape_string
//htmlspecialchars(stripslashes($x))
function clear($x)
{
	if (is_numeric($x) == FALSE)
	{
		$x = htmlspecialchars(stripslashes($x));
		return $x;
	}
	else
	{
		return $x;
	}
}


// /[~!@#$%^&?=*()+{}|><{}\.:;]/i
function clear_date($x)
{
	$reg = "/[a-zа-я~!@#$%^&?=*()+{}|><{}\.:;]/i"; // только _-#
	if (preg_match($reg, $x)) {
		echo "Взлом!";
		//return FALSE;
		
	} else {
		//echo "Вхождение не найдено. Взлома нет";
		$x = mysql_real_escape_string(htmlspecialchars(stripslashes($x)));
		return $x;
	}
}

$a = "05050505";
$b = mysql_real_escape_string(htmlspecialchars(stripslashes($a)));

//$z=9459837;
//$z="kdjfgskldgjh";
$z="2013-12";
echo clear2($z);
echo clear($z);
echo "<br />";

echo clear_date($z);
echo "<br />---------------------- <br />";
echo $b;


echo "<br />проверка";
?>