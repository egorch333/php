<?php
/* генератор паролей + секретное слово*/

$ludmila =    array('Людмила', 'логин' => 'ludmila', 'пароль' => 'you_site2015ludmila');
$egor =       array('Егор', 'логин' => 'egor', 'пароль' => 'e');
$yaroslav =   array('Ярослав', 'логин' => 'yaroslav', 'пароль' => 'you_site2015yaroslav');
$admin =      array('админ', 'логин' => 'admin', 'пароль' => 'you_site2015user');

$secretWord = '945dfsdf9808YouSite';

function cript($arr, $secretWord)
{
	echo "<b>".$arr[0]."</b><br />";
	for($i=0; $i < 1; $i++)
	{
		echo $arr['пароль']."<br>";
		echo "добавление секретного слова<br>";
		$arr['пароль'] .= $secretWord;
		
		echo $arr['пароль']."<br>";
		echo $arr['логин']." : ".sha1(md5($arr['пароль']))."<br />";
		echo "--------------------------------------<br />";
	}
}

cript($ludmila, $secretWord);
cript($egor, $secretWord);
cript($yaroslav, $secretWord);
cript($admin, $secretWord);

?>