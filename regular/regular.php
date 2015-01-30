<?php 
// регулярные выражения
?>
<form action="regular.php" method="post">
<a>дата</a><br />
<input type="text" name="date" value="<?=$_POST['date']?>" />
<br />
<input type="submit" name="ok" value="Отправить" />
</form>
<?php 
// вывод переменных
if(!empty($_POST['ok']))
{
// для изделия
$date = trim($_POST['date']);

// регулярные выражения
//$reg = "/(\d{2})-(\d{2})-(\d{4})/"; // только числа
//$reg = "/([0-9]{2})-([0-9]{2})-([0-9]{4})/"; // альтернатива
$reg = "/([^a-z]{2})-([^a-z]{2})-([^a-z]{4})/"; // альтернатива отрицание

	if($date == '' && isset($_POST['ok']) == TRUE)
	{
	  echo "Вы ничего не ввели! Введите данные!<br />";		
	}

	if($date < 0)
	{
		echo "Отрицательные числа или 0 вводить нельзя!";
	}


	if(preg_match($reg, $date)== FALSE)
	{
		echo "Вы ввели неправильную дату!";
	}
	
	else
	{		
		echo $date."<br />";		
		echo  "Все верно! preg_match = ".preg_match($reg, $date)."<br />";

	}
}
else
{
	echo "Вы обратились к файлу без параметров! <br />";
}
?>