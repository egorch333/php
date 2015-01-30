<?php
session_start();
// Начинаем сессию
$_SESSION["login"] = trim($_POST['login']);
$_SESSION["pass"] = trim($_POST['pass']);

// вывод переменных
if(!empty($_POST['ok']))
{
// регулярные выражения
$reg_login = "/^[a-z0-9_-]{3,}$/i";
$reg_pass = "/^[a-z0-9_-]{6,20}$/i";
//$ref = $_POST['ref'];

	if($_SESSION["login"] !='' && isset($_POST['ok']) == TRUE)
	{

    	if($_SESSION["pass"] !='' && isset($_POST['ok']) == TRUE)
    	{

        	if(preg_match($reg_login, $_SESSION["login"]) == TRUE)
        	{
            	if(preg_match($reg_pass, $_SESSION["pass"]) == TRUE)
            	{



                  if($_SESSION["login"]== "admin" && $_SESSION["pass"]== "mypass")
                  {
                   $_SESSION["autorization"] = 1;

                   if($_SESSION["referer"] == TRUE)
                   {
                       header("Location: ".$_SESSION["referer"]);
                   }
                   else
                   {
                       header("Location: page1.php");
                   }


                  }
                  else
                  {
                    echo "Вы ввели неправльный логин и пароль!<br />";
                    echo "<a href='form.php'>назад</a><br />";
                  }




                }
                else
                {
                  echo "Вы ввели неправильный пароль! Вводите от 6 цифр до 20 символов. Символы !@#$%^&*()+{}:<>? запрещены!<br />";
                  echo "<a href='form.php'>назад<br /></a>";
                }
        	}
            else
            {
          		echo "Вы ввели неправильный логин! Вводите минимум 3 цифры. Символы !@#$%^&*()+{}:<>? запрещены!<br />";
                echo "<a href='form.php'>назад<br /></a>";
            }

    	}
        else
        {
          echo "введите пароль!<br />";
          echo "<a href='form.php'>назад<br /></a>";

        }

	}
    else
    {
      echo "введите логин!<br />";
      echo "<a href='form.php'>назад<br /></a>";
    }


}
else
{
	echo "Вы обратились к файлу без параметров!<br />";
      echo "<a href='form.php'>назад<br /></a>";
}

?>


