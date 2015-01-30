<?php
session_start();
// Начинаем сессию

?>

<form action="autorization.php" method="post">
<a>логин:</a><br />
<input type="text" name="login" value="<?=$_SESSION["login"];?>" />
<br />
<a>пароль:</a><br />
<input type="text" name="pass" value="<?=$_SESSION["pass"];?>" />
<br />
<input type="submit" name="ok" value="Отправить" />
</form>

