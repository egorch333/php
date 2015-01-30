<?php
session_start();
// Начинаем сессию
if($_SESSION["autorization"] == 1)
{
echo "Здравствуйте: <b>".$_SESSION["login"]."</b><br /><hr />";
echo "вторая страница<br />";
echo "<a href='page1.php'>страница1</a><br />";
echo "<a href='exit.php'>Выход</a>";


}
else
{
header("Location: exit.php");
}



?>