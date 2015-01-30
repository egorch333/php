<?php
// вывод переменных
if(!empty($_POST['ok']))
{
// для изделия
$ns_1 = trim($_POST['ns_1']);
$ns_2 = trim($_POST['ns_2']);

$sum = $ns_1 + $ns_2;


//из-за проверки не работает редирект

	if($ns_1 == '' || $ns_2 == '' && isset($_POST['ok']) == TRUE)
	{
	  echo "Вы ничего не ввели! Введите данные!<br />";		
	}


	if(is_numeric($ns_1)== FALSE || is_numeric($ns_2)== FALSE)
	{
		echo "Вы ввели не число!";
	}

	else
	{	


		/*
		echo "число ns_1 = ".$ns_1."<br />";		
		echo "число ns_2 = ".$ns_2."<br />";	
		echo "число sum = ".$sum."<br />";	
		*/

		header("location: red.php?sum=$sum&ns_1=$ns_1&ns_2=$ns_2");
		exit();
		
	}
	

}
else
{
	echo "Вы обратились к файлу без параметров! <br />";
}



?>