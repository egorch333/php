<?php
// редирект
if($_GET['ns_1'] == '') $_GET['ns_1'] = 1;
if($_GET['ns_2'] == '') $_GET['ns_2'] = 2;
?>
<form action="redirect.php" method="post">
<a>число 1:</a><br />
<input type="text" name="ns_1" value="<?=$_GET['ns_1'];?>" />
<br />
<a>Число 2:</a><br />
<input type="text" name="ns_2" value="<?=$_GET['ns_2'];?>" />
<br />
<input type="submit" name="ok" value="Отправить" />
</form>
<?php

echo "sum = ".$_GET['sum']."<br />";
echo "ns_1 = ".$_GET['ns_1']."<br />";
echo "ns_1 = ".$_GET['ns_2']."<br />";

?>
