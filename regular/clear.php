<?php 
// регулярные выражения
?>
<form action="clear.php" method="post">
<a>очистка данных</a><br />
<input type="text" name="clear" value="<?=$_POST['clear']?>" />
<br />
<input type="submit" name="ok" value="Отправить" />
</form>
<?php 
// вывод переменных
if(!empty($_POST['ok']))
{
// для изделия
$clear = trim($_POST['clear']);

// регулярные выражения
/*
mysite.ru
http://mysite.ru
https://mysite.ru
mysite.ru/index.php?=some=15
$reg = "/^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i"; // только числа
*/

function replaceclear($clear)
{
global $reg;
//$reg = "/[~!@#$%^&?=*()+{}|><{}\.:;]/i"; // только _-#
$reg = "/[^a-zа-я0-9_-]/i"; 
return preg_replace($reg, "<b>*попытка взлома*</b>", $clear);
}

	if($clear == '' && isset($_POST['ok']) == TRUE)
	{
	  echo "Вы ничего не ввели! Введите данные!<br />";		
	}
		
	else
	{		
		
		echo $clear."<br />";		
		echo replaceclear($clear)."<br />";
		if(preg_match($reg, $clear)== TRUE)
		{
			echo "Вы пытаетесь взломать сайт! <b>Работа сервера остановлена</b><br />";
			exit();
		}
	}
}
else
{
	echo "Вы обратились к файлу без параметров! <br />";
}
?>