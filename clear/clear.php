<?php 

/*
$id = $_GET['id'];

if (is_numeric($id))
{
что-то делаем
}
else { exit(); }
*/


function clear($x)
{
	if (is_numeric($id)=FALSE)
	{
	$x = mysql_real_escape_string(htmlspecialchars(stripslashes($x)));
	}
}

function clear2($x)
{
	$x = mysql_real_escape_string(htmlspecialchars(stripslashes($x)));
}

?>