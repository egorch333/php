<?php
/* 
 * это защита от назойливых спамеров
 * список слов можно расширить
 * */

$str = '<a href="">играйте в игры</a>';
$word = "http|http:|http://|href|href=|/a|/p|xxx|free|.fitno|.biz|.tk|porn|porno|sex|intim|Buy|online|web|site|Price|0 Mg|build|".
		".ru|.com|.net|.org|.рф|секс|проститутки|проститут|индивидуалки|индивидуал|интим|лотерея|лотер|лото|".
		"орал";

$arr = explode("|", $word);
//echo"<pre>";
print_r($arr);
//echo"</pre>";

foreach($arr as $k)
{
	$res = stripos($str, $k, TRUE);
	if($res === FALSE)
	{
		//echo 'не найдена в строке!';		
	}
	else
	{
		//echo 'есть совпадение!';
		$stop = TRUE;	
	}	
}

if($stop) echo "ваше сообщение не соответствует тематике нашего сайта";
else echo"нет совпадения";


?>