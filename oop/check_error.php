<?php

/*
 * Error_Admin_Controller
 * для проверки и вывода ошибок
 * */

class Error_Admin_Controller
{

	public $errorArr = array();
	
	/*
	 * генерирует метод __set,
	 * выводит метод __get
	 * 
	public $errorTitle;
	public $errorMini_text;
	public $errorText;
	*/
	
	public function __construct()
	{
		
	}	
	
	
	/*
	 * checkInputEmpty()
	 * сбор ошибок
	 * */
	public function checkInputEmpty()
	{
		if(empty($this->title)) 	$this->errorArr[] = "вы не заполнили поле 'заголовок'";
		if(empty($this->mini_text)) $this->errorArr[] = "вы не заполнили поле 'мини-текст'";
		if(empty($this->text)) 		$this->errorArr[] = "вы не заполнили поле 'текст'";
		//print_r($error);
	}

	/*
	 * errorView()
	 * вывод ошибок
	 * */
	public function errorView()
	{
		$errorView = "<span class='error'>ОШИБКА:</span> <br />";
		foreach($this->errorArr as $v)
		{
			$errorView .= $v."<br />";
		}
		return $errorView;
	}
	
	public function __set($name, $value) 
    {
        echo "Установка '$name' в '$value'\n<br />";
        $this->$name = $value;
		$this->errorArr[$name] = $value;
    }
	
	public function __get($name) 
    {
    	echo "Получение '$name'\n";       
		return $this->$name;
    }
	
	public function __toString() 
    {
    	$res = '<br /><b>вывод:</b> <br />';
    	foreach($this->errorArr as $k => $v)
		{
			$res .= $v.'<br />';
		}
        return $res;
    }


}

$er = new Error_Admin_Controller();
$er->errorTitle = "вы не заполнили поле 'заголовок'";
$er->errorText = "вы не заполнили поле 'текст'";

echo $er->errorView();

//print_r(get_class_vars(get_class($er)));
print_r($er->errorArr);


?>