<?php

// удаление картинок
function delete_all_files($dir)
{
	// рекурсия
	$list = glob($dir."/*.png");
	for($i=0; $i < count($list); $i++)
	{
        // удаление картинок
		unlink($list[$i]);
	}
}
delete_all_files("captcha");


/*
function removeDirectory($dir)
{
  if ($objs = glob($dir."/*.png"))
  {
     foreach($objs as $obj)
     {
     // удаление картинок
     unlink($obj);
     }
  }
}
removeDirectory("captcha");
*/
?>