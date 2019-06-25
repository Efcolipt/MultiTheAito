
<?php 

    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']))
    {
    // Если пусты, то мы не выводим ссылку
    	require('header.php');
   echo '<div id="block" class="blocks">Вы зашли на сайт, как гость. Зарегистрироваться вы можете здесь <a href="reg.php">Зарегистрироваться</a> Или авторизоваться здесь <a href="signin.php">Авторизоваться</a> </div>';

    }
    else
    {

    // Если не пусты, то мы выводим ссылку
    require('header_reg.php');
    }

    ?> 

<?php


 if (isset($_POST['send_news'])){


	$MessageError = array();

	if (trim($_POST['header']) == ''  || trim($_POST['header']) == ' ') {
		$MessageError[] = 'Введите заголовок статьи';
	}
	if (trim($_POST['author']) == ''  || trim($_POST['author']) == ' ') {
		$MessageError[] = 'Представтесь';
	}
	if ($_POST['content'] == '' || $_POST['content'] == ' ') {
		$MessageError[] = 'О чем ваша статья';
	}




	//Определяем место сохранения загруженного файла и его имя
	// FILE UPLOAD
		$file = $_FILES['upload'];
		$file_name = $_FILES['upload']['name'];
		$file_tmp = $_FILES['upload']['tmp_name'];
		$file_size = $_FILES['upload']['size'];
		$file_error = $_FILES['upload']['error'];
		$file_type = $_FILES['upload']['type'];
		$file_ext = explode('.', $file_name);
		$file_actualExt = strtolower(end($file_ext));
		$allowed = array('jpg','jpeg','png');

		if (in_array($file_actualExt, $allowed)) {
			if ($file_error === 0) {
				if ($file_size < 1000000) {
					$file_nameNew = uniqid('',true).".".$file_actualExt;
					$fileDestination = 'img/blog_info/'.$file_nameNew;
					move_uploaded_file($file_tmp , $fileDestination);
						 // header("Location: add__news.php?s");
							
				}else{
				$MessageError[] = "Размер файла слишком большой";
				}
			}else{
				$MessageError[] = "Ошибка попробуйте ещё раз";
			}
		}else{
		$MessageError[] = "Этот тип файла нельзя загрузить или выберите файл";
		}
		

	if (empty($MessageError)) {
	
			    $header = $_POST['header'];
    			$author = $_POST['author'];
   				$content = $_POST['content'];

   	$db_host='localhost'; // ваш хост
$db_name='MultiTheAuto'; // ваша бд
$db_user='root'; // пользователь бд
$db_pass=''; // пароль к бд


    			$db = mysql_connect($db_host,$db_user,$db_pass) OR DIE("Не могу создать соединение ");
    			@mysql_select_db($db_name,$db);
    			@mysql_query("SET NAMES 'utf8'",$db);

 
    if ($result == 'true') {
    	echo '<div style="color: green;font-family: Roboto Slab, sans-serif; margin: 0 auto;  text-align:center; background:white; font-size:23px; padding-top: 15px;
    padding-bottom: 15px;">Статья добавлена</div>';
  
	}
	}else{
			
		echo '<div style="font-family: Roboto Slab, sans-serif;
    margin: 0 auto;
    background: white;
    font-size: 23px;
    padding: 20px;
    text-align: center;
    color: red;">'.array_shift($MessageError).'</div>';

   
} 
  	
	}


?>