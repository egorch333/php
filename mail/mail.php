<?php
session_start(); // Начинаем сессию
// http://myrusakov.ru/email-php.html
//http://myrusakov.ru/php-captcha-math.html
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Отправка почты</title>
<link href="styles/index.css" rel="stylesheet" type="text/css" />
<style type="text/css">
div#form
{
/*background-color: #d6d6d6;*/
width:170px;
padding: 5px;
/*height:22px;*/
border: 1px solid black;
}

div#captcha
{
margin:10px auto auto 3px;
/*background-color: #d6d6d6;*/
/*width:145px;*/
height:22px;
}

div#captcha_img
{
float:left;
}

div#vvod
{
float: left;
margin-top:2px;
}

div#submit
{
margin: 8px auto 5px 75px;
}

</style>
</head>
<body>

<div id="form">
<form action="mail.php" method="post">
<a>e-mail:</a><br />
<input type="text" name="mail" value="<?=$_POST['mail']?>" />
<br />
<a>логин:</a><br />
<input type="text" name="login" value="<?=$_POST['login']?>" />
<br />
<a>пароль:</a><br />
<input type="text" name="pass" value="<?=$_POST['pass']?>" />
<br />
<div id="captcha">
    <div id="captcha_img">
        <img src="captcha.php" alt="" />
    </div>
    <div id="vvod">
        <input type="text" name="captcha" size="3" value="<?=$_POST['captcha']?>" />
    </div><!--vvod-->
</div><!--captcha-->
  <div id="submit">
    <input type="submit" name="ok" value="Отправить" />
  </div><!--submit-->
</form>
</div>
<?php
// вывод переменных
if(!empty($_POST['ok']))
{
// капча
$captcha = trim($_POST['captcha']); // Ответ, который ввёл пользователь

// для изделия
$mail = trim($_POST['mail']);
$login = trim($_POST['login']);
$pass = trim($_POST['pass']);

// регулярные выражения
$reg_mail = "/[\.\-_a-z0-9]+?@[\.\-Za-z0-9]+?[\ .a-z0-9]{2,}/i";
$reg_login = "/^[a-z0-9_-]{3,}$/i";
$reg_pass = "/^[a-z0-9_-]{6,20}$/i";

//$reg_mail = "/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i";
//$reg_mail = "/.+@.+\..+/i";
//$reg_mail = "/\A[^@]+@([^@\.]+\.)+[^@\.]+\z/";


	if($mail == '' || $login == '' || $pass == '' || $captcha == "" && isset($_POST['ok']) == TRUE)
	{
	  echo "Вы не заполнили поля! Введите данные!<br />";		
	}


	if(preg_match($reg_mail, $mail)== FALSE)
	{
		echo "Вы ввели неправильный адреc e-mail!<br />";
	}
	
	if(preg_match($reg_login, $login)== FALSE)
	{
		echo "Вы ввели неправильный логин! Вводите минимум 3 цифры. Символы !@#$%^&*()+{}:<>? запрещены!<br />";
	}
	
	if(preg_match($reg_pass, $pass)== FALSE)
	{
		echo "Вы ввели неправильный пароль! Вводите от 6 цифр до 20 символов. Символы !@#$%^&*()+{}:<>? запрещены!<br />";
	}

	// Проверяем правильность ввода капчи (не забывайте проверять на "пустое значение", это очень важно!)
	if ($captcha != $_SESSION["rand_code"]) 
	{
		echo "Капча введена не правильно!!!";
	}

	else
	{	
		echo $mail."<br />";		
		echo $login."<br />";		
		echo $pass."<br />";
		if(preg_match($reg_mail, $mail) == TRUE) echo  "Все верно! preg_match = FALSE.<br />";
		else echo "Регулярное выражение остановило скрипт! preg_match = TRUE<br />";
		echo $_SESSION["rand_code"]."=".$captcha."<br />";
		
		
		
		if ($captcha == $_SESSION["rand_code"]) 
		{
			echo "Капча введена правильно<br />";
		}
		
		
		//отправка почты
        $charset = "windows-1251";
        //$charset = "UTF-8";
		$message = "Ваш логин: $login\nВаш пароль: $pass\n";
		$to = "egor@yandex.ru";
		$from = "egor@yandex.ru";
		$subject = "Логин + пароль";
		$subject = "=?".$charset."?B?".base64_encode($subject)."?=";
		$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=$charset\r\n";
		mail($to, $subject, $message, $headers);


	}
}
else
{
	echo "Вы обратились к файлу без параметров! <br />";
}
?>

</body>