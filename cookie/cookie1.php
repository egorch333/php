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
if($_COOKIE["font"] == 0) echo "font = 0<br />";
if($_COOKIE["font"] == 10) echo "font = 10<br />";
if($_COOKIE["font"] == 15) echo "font = 15<br />";
if($_COOKIE["font"] == 20) echo "font = 20<br />";



echo "<div id='$font_size'>";
echo "<a href='cookie.php'>назад на страницу cookie</a><br />";
echo "</div>";
?>
</body>