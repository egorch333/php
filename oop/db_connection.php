<?php
/*
 * подключитесь к файлу с настройками
 * DB_HOST
 * DB_USER
 * DB_PASS
 * dbname=you_site_db придется прописывать вручную, иначе вылезет ошибка
 * */

//defined('ACCESS') or die('Ошибка => доступ запрещен');
//error_reporting(0);
 
//db connection class using singleton pattern
class DbConnection
{
 
//variable to hold connection object.
protected static $db;
 
//private construct - class cannot be instatiated externally.
private function __construct()
{
	 	 
	try
	{
		// DB_USER - на удаленном сервере нужно прописать вручную
		// assign PDO object to db variable
		self::$db = new PDO( 'mysql:host='.DB_HOST.';dbname=you_site_db', DB_USER, DB_PASS, 
		          array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
		self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch (PDOException $e)
	{
		//Output error - would normally log this to error file rather than output to user.
		echo "Connection Error: " . $e->getMessage();
		file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
	}
	 
}
	 
// get connection function. Static method - accessible without instantiation
public static function getConnection()
{
	 
	//Guarantees single instance, if no connection object exists then create one.
	if (!self::$db)
	{
		//new connection object.
		new DbConnection();
	}
		 
	//return connection.
	return self::$db;
}
 
}//end class
 
?>