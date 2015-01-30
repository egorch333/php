<?php
$del = $_GET['login'];

function delete_all_files($dir)
{
	// рекурсия
	$list = glob($dir."/*");
	for($i=0; $i < count($list); $i++)
	{
		if(is_dir($list[$i])) delete_all_files($list[$i]);
		else unlink($list[$i]);	
	}
	rmdir($dir);	
}
delete_all_files($del);

echo "удалена папка $del!<br /><a href='/vf/folder/folder.php'>создать новую папку</a>";
?>
