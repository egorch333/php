<?
// создание папок, работа с каталогами
?>
<form action="folder.php" method="post">
<a>логин</a><br />
<input type="text" name="login" value="" />
<br />
<a>пароль</a><br />
<input type="password" name="password" value="" />
<br />
<input type="submit" name="ok" value="Отправить" />
</form>


<?php 
// вывод переменных
if(isset($_POST['ok']))
{
// для изделия
$login = trim($_POST['login']);
$pass = trim($_POST['password']);

if($login == '' || $pass == '' && isset($_POST['ok']) == TRUE)
{
echo "Вы не ввели данные!";
exit();
}

if($login != is_dir($login))
{
// создаем каталог
mkdir($login);
}
else
{
echo "Ошибка! Директория <b>$login</b> существует<br />";
}

// проникновение во внутрь папки $login
if($login == TRUE) chdir($login);

echo "проникли в папку /$login/<br />";

//создание 3 папок 
if(is_dir("video") != TRUE) mkdir("video");
else echo "папка /video/ уже создана<br />";
if(is_dir("music") != TRUE) mkdir("music");
else echo "папка /music/ уже создана<br />";
if(is_dir("photo") != TRUE) mkdir("photo");
else echo "папка /photo/ уже создана<br />";


// отправка запроса на удаление
printf(
"<a href='/vf/folder/delete.php?login=$login'>удалить папку $login</a><br />"
);

}
else
{
	echo "Вы обратились к файлу без параметров! <br />";
}
?>