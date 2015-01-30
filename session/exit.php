<?php
session_start();
// удаление авторизации
unset($_SESSION["autorization"]);


// возврат на предыдущую страницу
$_SESSION["referer"] = substr($_SERVER["HTTP_REFERER"], 20);


header("Location: form.php");
?>