<?php 
// регулярные выражения
?>
<form action="mail.php" method="post">
<a>e-mail:</a><br />
<input type="text" name="mail" value="<?=$_POST['mail']?>" />
<br />
<input type="submit" name="ok" value="Отправить" />
</form>
<?php 
// вывод переменных
if(!empty($_POST['ok']))
{
// для изделия
$mail = trim($_POST['mail']);

// регулярные выражения
$reg = "/^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i"; // только числа

	if($mail == '' && isset($_POST['ok']) == TRUE)
	{
	  echo "Вы ничего не ввели! Введите данные!<br />";		
	}


	if(preg_match($reg, $mail)== FALSE)
	{
		echo "Вы ввели неправильный адре e-mail!";
	}

	else
	{	
		echo $mail."<br />";		
		echo  "Все верно! preg_match = ".preg_match($reg, $mail)."<br />";

	}

}
else
{
	echo "Вы обратились к файлу без параметров! <br />";
}
?>