<?php session_start();
if (!(empty($_SESSION['User_name'])) && !(empty($_SESSION['login']))) {
	header("Location:index.php");
}
if (!(empty($_COOKIE['losd_sd'])) && !(empty($_COOKIE['ss_uks']))) {

    $db_host = "localhost"; 
        $db_user = "root"; // Логин БД
        $db_password = ""; // Пароль БД
        $db_table = "User"; // Имя Таблицы БД
 
          $db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Не могу создать соединение ");
          mysql_select_db("MultiTheAuto",$db);
            mysql_query("SET NAMES 'utf8'",$db);

  
 $result_cookie = mysql_query("SELECT User_name FROM User WHERE login = '".$_COOKIE['losd_sd']."' and cookie ='".$_COOKIE['ss_uks']."'");
 $row_sdwdaz = mysql_fetch_array($result_cookie);

 if (!empty($row_sdwdaz)) {
  $_SESSION['User_name'] = $row_sdwdaz['User_name'];
  $_SESSION['login'] = $_COOKIE['losd_sd'];
   header("Location:index.php");
 }
  
}

require 'func/function_reg.php';
 ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- My style -->
    <link rel="stylesheet" type="text/css" href="css/reg.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="shortcut icon" href="img/shortcut icons/Blip_reg.jpg" type="image/x-icon" />
    <!-- Content -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="description" content="Регистрация.">
	<meta name="author" content="Ivan4ick">
	<title>Регистрация</title>
</head>
<body>
	
<?php  require 'header.php';   ?>

			<form action="reg.php" method="POST">
				<input type="text"  id="userName" placeholder="Как вас звать" name="userName"  value="<?= @$data['userName'] ?>" required>
				<input type="text"  id="login" placeholder="Логин" name="login"  value="<?= @$data['login'] ?>" required>
				<input type="email" id="email"  placeholder="Email" name="email" value="<?= @$data['email'] ?>"  required> 
				<input type="password" id="password"  name="password" placeholder="Пароль" required>
				<input type="password" id="password_2"  name="password_2" placeholder="Повторите пароль" required>
			
				<input type="submit" name="register" value="Регистрация">
			</form>
			<hr>
			<div class="registr">
			<a href="/signin.php"><span>Уже зарегистрированы?</span></a>
		</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript"> 

var sec=5; // или 1 если необходим прямой отчёт времени
 function Sec()
 {
   // элемент на страничке в котором будет показываться наша переменная
  document.getElementById("sec").innerHTML=sec;

  // каждую секунду уменьшаем значение переменной
  // (или увеличиваем если необходима переадресация
  //с таймером прямого отчёта )
   sec--;

  // на последней секунде таймера делаем редирект
  // и уходим с нашей страницы тем самым прерывая выполнение
  // вызова функции setTimeout()
   if(sec==-1)
   {
      location.replace("http://mtas/signin.php")
   }

   // вызываем фунцию Sec() через одну секунду определённое в переменной sec
   // количество раз - в нашем примере sec==10 (задержка редиректа на 10 сек)
   setTimeout("Sec()",1000);

 }
Sec();
</script>
<script>
  $(function() {
    $('#sb_menu').click(function(){
        
            if ($('#submenu_phone')[0] == $('.hideitems')[0]) {
                $('#submenu_phone').removeClass('hideitems');
                $('#submenu_phone').addClass('showitems');
        }else{
            $('#submenu_phone').addClass('hideitems');
                $('#submenu_phone').removeClass('showitems');
        }
            
          

    });
});
$(window).on('resize', function() {
    if ($(window).width() > 880) {
     $('#submenu_phone').removeClass('showitems');
     $('#submenu_phone').addClass('hideitems');
 }
               
});
 
</script>
</body>
</html>