<?php session_start(); ?>
<?php


 $data= $_POST;
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
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
  if (isset($data['auth'])) {
      $data['login'] = stripslashes($data['login']);
    $data['login'] =htmlspecialchars($data['login']);
    $data['password']= stripslashes($data['password']);
    $data['password'] =htmlspecialchars($data['password']);
  $MessageError = array();
  if (trim($data['login']) == '' ||  trim($data['login']) == ' ') {
    $MessageError[] = 'Введите логин';
  }

  if ($data['password'] == '' || $data['password'] == ' ' ) {
    $MessageError[] = 'Введите пароль';
  }
    if (strlen($data['login']) < 3  && !(strlen($data['login']) > 25) ) {
        $MessageError[] = 'Логин должен быть не меньше 3 символов и не больше 25';
    }
     if (strlen($data['password']) < 8 ) {
        $MessageError[] = 'Длина пароля должна быть не меньше 8 символов';
    }



        $db_host = "localhost"; 
        $db_user = "root"; // Логин БД
        $db_password = ""; // Пароль БД
        $db_table = "User"; // Имя Таблицы БД
 
          $db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Не могу создать соединение ");
          mysql_select_db("MultiTheAuto",$db);
            mysql_query("SET NAMES 'utf8'",$db);

  

        $data['login'] = mysql_real_escape_string($data['login'] );
            $data['password'] = mysql_real_escape_string($data['password'] );
          

     $result_2 = mysql_query("SELECT login FROM User Where login = '".$data['login']."' ");               
   $result = mysql_query("SELECT password FROM User Where login = '".$data['login']."' ");
   $result_3 = mysql_query("SELECT id FROM User Where login = '".$data['login']."' ");
   $result_4= mysql_query("SELECT User_name FROM User Where login = '".$data['login']."' ");
      //извлекаем из базы все данные о пользователе с введенным логином
   
    $myrow = mysql_real_escape_string($myrow);
    $myrow_2 = mysql_real_escape_string($myrow_2);
    $myrow_3 = mysql_real_escape_string($myrow_3);
    $myrow_4 = mysql_real_escape_string($myrow_4);

    $myrow= stripslashes($myrow);
    $myrow_2= stripslashes($myrow_2);
     $myrow_3= stripslashes($myrow_3);
      $myrow_4= stripslashes($myrow_4);

  $myrow = mysql_fetch_array($result); 
   $myrow_2 = mysql_fetch_array($result_2);
     $myrow_3 = mysql_fetch_array($result_3);
      $myrow_4 = mysql_fetch_array($result_4);
  
            if ($myrow_2['login'] != $data['login'] || !password_verify($data['password'],$myrow['password'])) {
      $MessageError[] = "Извините, введённый вами пароль или логин неверны .";
    }
    if (empty($result_4)) {
        $MessageError[] = 'При регистрации вы не указали ваше имя вернитесь и заполните все поля';
    }

    if (empty($MessageError)) {
      $key= generateRandomString();
      setcookie("losd_sd",$data['login'],time()+ 3600*60*30*32);
      setcookie("ss_uks",$key,time()+ 3600*60*30*32);
      mysql_query("SELECT cookie FROM User WHERE login='".$data['login']."'");
      mysql_query("UPDATE User SET cookie = '".$key."' WHERE login='".$data['login']."' ");

          //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
    $_SESSION['User_name'] = $myrow_4['User_name'];
    $_SESSION['login'] = $myrow_2['login']; 
    $_SESSION['id'] = $myrow_3['id'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
   
    header("Location:http://mtas/index.php");
    }
  else{
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
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/signin.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="shortcut icon" href="img/shortcut icons/Blip_auth.jpg" type="image/x-icon" />
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Авторизация.">
	<meta name="author" content="Ivan4ick">
	<title>Авторизация</title>
</head>
<body>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<?php require 'header.php'; ?>

			<form method="POST">
				<input type="text" placeholder="Логин" required name="login" value="<?= @$_POST['login']?>" >
				<input type="password" name="password" required placeholder="Пароль" value="<?= @$_POST['password']?>">
				<input type="submit" value="Войти" name="auth">
			</form>
			<hr>
			<div class="forgotPassword">
				<a href="#"><i class="fas fa-unlock"></i><span>Забыли пароль?</span></a>
			</div>
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