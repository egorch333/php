<?php 
// куки
$font = (isset($_COOKIE["font"]))? $_COOKIE["font"]: 1;
$font = $_COOKIE["font"];
$font_size = $_COOKIE["font_size"];

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Отправка почты</title>
<link href="styles/index.css" rel="stylesheet" type="text/css" />
<style type="text/css">
div#small
{
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:10px;	
}
div#mini
{
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:15px;	
}
div#big
{
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:20px;	
}
</style>
</head>
<body>
<?php
// изменение размера шрифта
if($_GET['font'] == 0)
{
unset($_COOKIE['font']);
setcookie("font", 0);
unset($_COOKIE['font_size']);
setcookie("font_size", "small");
echo "font = 0 (обнуление)<br />";
}
if($_GET['font'] == 10)
{
unset($_COOKIE['font']);
setcookie("font", 10);
unset($_COOKIE['font_size']);
setcookie("font_size", "small");
echo "font = 10<br />";
}
if($_GET['font'] == 15)
{
unset($_COOKIE['font']);
setcookie("font", 15);
unset($_COOKIE['font_size']);
setcookie("font_size", "mini");
echo "font = 15<br />";
}
if($_GET['font'] == 20)
{
unset($_COOKIE['font']);
setcookie("font", 20);
unset($_COOKIE['font_size']);
setcookie("font_size", "big");
echo "font = 20<br />";
}




echo "<div id='$font_size'>";
echo "<a href='cookie.php?font=0'>шрифт 0px (обнуление)</a><br />";
echo "<a href='cookie.php?font=10'>шрифт 10px</a><br />";
echo "<a href='cookie.php?font=15'>шрифт 15px</a><br />";
echo "<a href='cookie.php?font=20'>шрифт 20px</a><br />";

echo "<a href='cookie1.php'>cookie1.php</a><br />";
echo "</div>";
?>
</body>