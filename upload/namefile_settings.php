<?php

/*
 * fileExtension($nameFull)
 * данные картинки
 * */

$nameFull = "video1.JPG";

function fileExtension($nameFull)
{
$name = explode(".", $nameFull);
echo "Имя файла: ".$name[0]."<br />";
echo "Расширение: ".$name[1]."<br />";
echo "Собираем: ".$name[0].".".$name[1]."<br />";
echo "-----------------------------------<br />";
$newExtension = $name[0].".".mb_strtolower($name[1]);
return $newExtension;
}

echo fileExtension($nameFull);
?>