<?php

/*удаление файлов*/

//$img = dirname(__FILE__).'/file/f/mini_newspaper.png';
$img = 'file/f/mini_newspaper.png';

function delete($img)
{
    if(file_exists($img))
	{
		unlink($img);
	} 
	
	if(file_exists($img) == FALSE) echo "файл удален";  
	echo $img;
}
	
delete($img);
	
?>	