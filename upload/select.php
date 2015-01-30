<!--форма для отправки данных-->
<form action="upload.php" method="POST" enctype="multipart/form-data">
	<select name="folder">
		<option disabled>Выберите директорию</option>
		<option value="football">футбол</option>
		<option value="tennis">теннис</option>
		<option value="hockey">хоккей</option>
		<option value="basketball">баскетбол</option>
		<option value="volleyball">волейбол</option>
		<option value="combat">единоборства</option>
		<option value="other_sports">другие виды спорта</option>
		<option value="interview">интервью</option>
		<option value="amateur_sports">любительский спорт</option>
	</select><br />
	<input type="file" name="load"><br />
	
	<input type="submit" value="загрузить">	
</form>