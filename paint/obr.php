<?php
  session_start();
  $_SESSION["captcha"] = $_POST["captcha"];

// удаление картинок
function delete_all_files($dir)
{
	// рекурсия
	$list = glob($dir."/*.png");
	for($i=0; $i < count($list); $i++)
	{
        // удаление картинок
		unlink($list[$i]);
	}
}
delete_all_files(".");


// вывод переменных
if(isset($_POST['ok']))
{
	// проверка на пустоту
	if($_SESSION["captcha"] == '' && isset($_POST['ok']) == TRUE)
	{
		echo "Вы не ввели данные для капчи!<br />";

		// проверка на число
		if(is_numeric($_SESSION["captcha"]) == FALSE)
		{
  			echo "переменная captcha = $captcha не число!<br />";
		}
    }

  	// капча
  	if($_SESSION["rand_code"] != $_SESSION["captcha"])
  	{
        echo "сумма: ".$_SESSION["rand_code"]."-- то что ввели: ".$_SESSION["captcha"]."<br />";
        echo "картинка: ".$_SESSION["img"]."<br />";
  		echo "Вы неправильно ввели капчу!";

  	}
	else
	{
        echo "сумма: ".$_SESSION["rand_code"]."-- то что ввели: ".$_SESSION["captcha"]."<br />";
        echo "картинка: ".$_SESSION["img"]."<br />";
  		echo "проверка прошла успешно<br />";
  		echo $_SESSION["captcha"];
	}

}
else
{
	echo "Введите значения в поле для капчи!";
}



?>