<?php
session_start();
// Начинаем сессию
if($_SESSION["autorization"] == 1)
{
echo "Здравствуйте: <b>".$_SESSION["login"]."</b><br /><hr />";
echo "первая страница<br />";
echo "<a href='page2.php'>страница2</a><br />";
echo "<a href='exit.php'>Выход</a>";


}
else
{
header("Location: exit.php");
}



?>