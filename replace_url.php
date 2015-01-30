<?php
$str = '<p><a class="gallery2" href="http://yousite.com/template/default/upload/images/foto/gll/foto/group.jpg" rel="group" title="фото"><img src="http://yousite.com/template/default/upload/mini_img/images/foto/gll/foto/group.jpg" /> </a> <a class="gallery2" href="http://yousite.com/template/default/upload/images/foto/gll/foto/group2.jpg" rel="group" title="фото"> <img src="http://yousite.com/template/default/upload/mini_img/images/foto/gll/foto/group2.jpg" /> </a> <a class="gallery2" href="http://yousite.com/template/default/upload/images/foto/gll/foto/group3.jpg" rel="group" title="фото"> <img src="http://yousite.com/template/default/upload/mini_img/images/foto/gll/foto/group3.jpg" /> </a></p>
<p><a class="gallery2" href="http://yousite.com/template/default/upload/images/foto/gll/foto/group4.jpg" rel="group" title="фото"><img src="http://yousite.com/template/default/upload/mini_img/images/foto/gll/foto/group4.jpg" /> </a> <a class="gallery2" href="http://yousite.com/template/default/upload/images/foto/gll/foto/group5.jpg" rel="group" title="фото"> <img src="http://yousite.com/template/default/upload/mini_img/images/foto/gll/foto/group5.jpg" /> </a> <a class="gallery2" href="http://yousite.com/template/default/upload/images/foto/gll/foto/kubok.jpg" rel="group" title="фото"> <img src="http://yousite.com/template/default/upload/mini_img/images/foto/gll/foto/kubok.jpg" /> </a></p>
<p><a class="gallery2" href="http://yousite.com/default/upload/images/foto/gll/foto/kubok2.jpg" rel="group" title="фото"><img src="http://yousite.com/template/default/upload/mini_img/images/foto/gll/foto/kubok2.jpg" /> </a> <a class="gallery2" href="http://yousite.com/template/default/upload/images/foto/gll/foto/paren1.jpg" rel="group" title="фото"> <img src="http://yousite.com/template/default/upload/mini_img/images/foto/gll/foto/paren1.jpg" /> </a> <a class="gallery2" href="http://yousite.com/template/default/upload/images/foto/gll/foto/paren2.jpg" rel="group" title="фото"> 
<img src="http://yousite.com/template/default/upload/mini_img/images/foto/gll/foto/paren2.jpg" /> </a></p>';


/*
 * replaceUrl($str, $url='remote')
 * замена url если на локальной машине
 * если remote то меняется на http://yousite.com
 * если local или другое значение, то меняется на http://yousite_local
*/

function replaceUrl($str, $url='remote')
{
	if($_SERVER['REMOTE_ADDR'] == '127.0.0.1')
	{
		$replace = array('http://yousite_local', 'http://yousite.com');
		if($url == 'remote') $replace = array_reverse($replace);
		
		// 1-ищем, 2-меняем
		$str = str_replace($replace[1], $replace[0], $str);
		return $str;
	}
	else return $str;
}

echo replaceUrl($str, 'local');
echo replaceUrl($str, 'remote');
?>