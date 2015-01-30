<?php

/*
 * заменяет символы верхнего регистра на нижние + меняет расширение с JPG на jpg (нижний регистр)
 * */

$str = 'k.j.h,k.hs.s.sa.sd,asd.as.d.png';

function getName($str)
{
    $num = strrpos ($str, '.');
    $num += 1; 
    $res = substr($str, $num);
    return $res;
}


/* заменяет расширение на нижний регистр + ниж регистр + транслит */
function fileExtension($nameFull, $translite = null)
{
	$num = strrpos ($nameFull, '.');
    $num += 1; 
	// получаем расширение
    $extension = substr($nameFull, $num);
	//получаем имя файла, срезая из файла расширение
    $name = str_replace($extension, '', $nameFull);
	// удаляем все точки
	$name = str_replace('.', '', $name);

	// переводим в нижний регистр
	$name = mb_strtolower($name);
	// расширение без точки
	$extension = mb_strtolower($extension);
	
	//echo "имя: ".$name."<br /> расширение: ".$extension."<br />";
	//echo "полный файл: ".$name.".".$extension;
	
	// собираем файл имя + . + расширение
	$newFile = $name.".".$extension;
	return $newFile;	
}

echo fileExtension($str);

?>
