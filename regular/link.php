<?php 
/*
регулярные выражения
http://ruseller.com/lessons.php?rub=37&id=662
*/
 
?>
<form action="link.php" method="post">
<a>link:</a><br />
<input type="text" name="link" value="<?=$_POST['link']?>" />
<br />
<input type="submit" name="ok" value="Отправить" />
</form>
<?php 
// вывод переменных
if(!empty($_POST['ok']))
{
// для изделия
$link = trim($_POST['link']);

// регулярные выражения
/*
mysite.ru
http://mysite.ru
https://mysite.ru
mysite.ru/index.php?=some=15
$reg = "/^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i"; // только числа
*/

function replacelink($link)
{
	global $reg;
	//$reg = "/(^|[\n ])([\w]*?)((ht|f)tp(s)?:\/\/[\w]+[^ \,\"\n\r\t<]*)/is";
	$reg = "/(^|[\n ])([\w]*?)((ht|f)tp(s)?:\/\/[\w]+[^ \,\"\n\r\t<]*)/is";
    preg_replace($reg, "$1$2<a href=\"$3\" >$3</a>", $link);
    //$text= preg_replace("/(^|[\n ])([\w]*?)((www|ftp)\.[^ \,\"\t\n\r<]*)/is", "$1$2<a href=\"http://$3\" >$3</a>", $link); //для ftp
    //$text= preg_replace("/(^|[\n ])([a-z0-9&\-_\.]+?)@([\w\-]+\.([\w\-\.]+)+)/i", "$1<a href=\"mailto:$2@$3\">$2@$3</a>", $link); // для почты
    return preg_replace($reg, "<b>*тут была ссылка*</b>", $link);
}

	if($link == '' && isset($_POST['ok']) == TRUE)
	{
	  echo "Вы ничего не ввели! Введите данные!<br />";		
	}
	
	else
	{		
		
		echo $link."<br />";		
		echo replacelink($link)."<br />";
		echo preg_replace($reg, "$1$2<a href=\"$3\" >$3</a>",$link)."<br />";
		 //preg_replace($reg, "$1$2<a href=\"$3\" >$3</a>",$link);
		preg_match_all($reg, $link, $matches);
		//print_r($matches);
		echo "<br />";
		echo $matches[3][0]."<br />";
		echo $matches[3][1]."<br />";
		echo $matches[3][2]."<br />";

	}
}
else
{
	echo "Вы обратились к файлу без параметров! <br />";
}
?>