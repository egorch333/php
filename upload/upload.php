<?php
/*
 * пошлите данные при помощи POST
 * 
 * http://webmaster-school.ru/lessons.php?id=35
 * http://php.ru/manual/features.file-upload.post-method.html
 * пути
 * http://ru2.php.net/manual/ru/function.basename.php
 * http://ru2.php.net/manual/ru/function.dirname.php
 * http://ru2.php.net/manual/ru/function.pathinfo.php
 */

$dir = 'file/';
$name = 'video';
$extension = '';
//$_FILES['load']['tmp_name'],$dir.$name.rand(1, 10).$extension

print_r($_POST);

/* заменяет расширение на нижний регистр + ниж регистр + транслит */
function fileExtension($nameFull, $translite = null)
{
	// разбиваем массив по точке
	$nameArr = explode(".", $nameFull);
	// имя файла без расширения
	$name = $nameArr[0];
	if($translite == 'en') $name = translit($name);
	$name = mb_strtolower($name);
	// расширение без точки
	$extension = mb_strtolower($nameArr[1]);
	// собираем файл имя + . + расширение
	$newExtension = $name.".".$extension;
	return $newExtension;
}

/*
 * translit($str) 
 * транслит переводит русские символы в английские
 * */
function translit($str) 
{
    $translit = array(
        "А"=>"A","Б"=>"B","В"=>"V","Г"=>"G",
        "Д"=>"D","Е"=>"E","Ж"=>"J","З"=>"Z","И"=>"I",
        "Й"=>"Y","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N",
        "О"=>"O","П"=>"P","Р"=>"R","С"=>"S","Т"=>"T",
        "У"=>"U","Ф"=>"F","Х"=>"H","Ц"=>"TS","Ч"=>"CH",
        "Ш"=>"SH","Щ"=>"SCH","Ъ"=>"","Ы"=>"YI","Ь"=>"",
        "Э"=>"E","Ю"=>"YU","Я"=>"YA","а"=>"a","б"=>"b",
        "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ж"=>"j",
        "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
        "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
        "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
        "ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
        "ы"=>"yi","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya",
        "!"=>"","@"=>"","#"=>"","$"=>"","%"=>"",
        "^"=>"","&"=>"","*"=>"","("=>"",")"=>"",
        "-"=>"_", "+"=>"", "="=>""
    );
    return strtr($str,$translit);
}
   
if($_FILES['load'])
{
	//если загружен файл
	if(is_uploaded_file($_FILES['load']['tmp_name']))
	{
			
		// размер файла
	 	if($_FILES['load']["size"] > 1024*100*1024)
		{
			 echo ("Размер файла превышает 100 мегабайт");
			 return FALSE;
		}
	
		// проверка на тип загружаемых файлов
		if(substr_count($_FILES['load'][type], 'image') == 0)
		{
			 echo ("Загружайте только видео-файлы!");
			 return FALSE;
		}
		
		// если
		if(substr_count($_FILES['load'][type], 'video') > 0 && $_FILES['load']['size'] > 0)
		{
			$folder = trim($_POST['folder']).'/';
			// создаем папку
			if(!is_dir($dir.$folder))
			{
				mkdir($dir.$folder);	
			}
		}
	
			
	    // перемещение файла из временного хранилища в заданную директорию
		if(move_uploaded_file($_FILES['load']['tmp_name'],
		   $dir.$folder.fileExtension($_FILES['load']['name'], 'en')))
		{
			// расширение
			$extension = '.'.pathinfo($_FILES['load']['name'], PATHINFO_EXTENSION );
		        		
	        echo '<pre>';
	        print_r($_FILES);
	        echo '</pre>';
	        
	        echo $_FILES['load']['name'].' - название файла<br/>';
			echo $extension.' - расширение<br/>';
			echo $folder.' - папка для загрузки<br/>';
	        
	        $size = round($_FILES['load']['size']/1048576, 1);
	        $size .= " Mb";
	        echo $size;              
	    }
    }
	else echo "файл не выбран!";
}

?>