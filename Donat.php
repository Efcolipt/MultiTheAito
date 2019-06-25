<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- My style -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/donat.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="shortcut icon" href="img/shortcut icons/Blip_donat.jpg" type="image/x-icon" />
    <!-- Content -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Ivan4ick">

 
	<title>Донат на сервер</title>
</head>

<body id="top_nav" >

		<?php 
$log_session = 0;
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']))
    {
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
   header("Location:Donat.php");
 }
  
}
    		$log_session++;
    // Если пусты, то мы не выводим ссылку
    	require('header.php');
   echo '<div id="block" class="blocks">Вы зашли на сайт, как гость. Зарегистрироваться вы можете здесь <a href="reg.php">Зарегистрироваться</a> Или авторизоваться здесь <a href="signin.php">Авторизоваться</a> </div>';
    }
    else
    {
    // Если не пусты, то мы выводим ссылку
    require('header_reg.php');
    }

require 'func/func_user_get.php';

 // запрос на выборку

 ?>

            <form class="donating" method="POST">
                <input type="text"  placeholder="Логин" required name="login" value="<?= $_SESSION['login']?>">
                <input type="number" id="only_num" name="donat" required placeholder="Сумма которую хотите задонатить">
                <input type="number" id="sum_num" name="" required placeholder="Сумма которую получите">
                <input type="submit" value="Отправить" name="send">
            </form>
<div id="bg">
	
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript">

$(window).ready(function(){
        /* немного другой эффект появления, и задержка в 2 секунды */
	setTimeout ("$('#block').show('drop');",2000);
});

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
 
$(document).ready(function() { 

$("#only_num").keydown(function(event) { 

// Разрешаем: backspace, delete, tab и escape 
if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || 
// Разрешаем: Ctrl+A 
(event.keyCode == 65 && event.ctrlKey === true) || 
// Разрешаем: home, end, влево, вправо 
(event.keyCode >= 35 && event.keyCode <= 39)) { 
// Ничего не делаем 
return; 
} else { 
// Запрещаем все, кроме цифр на основной клавиатуре, а так же Num-клавиатуре 
if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) { 
event.preventDefault(); 
} 
} 
}); 
}); 
$(document).ready(function() { 

$("#sum_num").keydown(function(event) { 

// Разрешаем: backspace, delete, tab и escape 
if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || 
// Разрешаем: Ctrl+A 
(event.keyCode == 65 && event.ctrlKey === true) || 
// Разрешаем: home, end, влево, вправо 
(event.keyCode >= 35 && event.keyCode <= 39)) { 
// Ничего не делаем 
return; 
} else { 
// Запрещаем все, кроме цифр на основной клавиатуре, а так же Num-клавиатуре 
if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) { 
event.preventDefault(); 
} 
} 
}); 
}); 


var a,L,epl=$("#only_num"); 
function epl3(){a=epl.val();$("#sum_num").val(a*5000)};epl3(); 
$("#only_num").click(function (){setTimeout('epl3()',100)}); 
epl.bind('oninput mouseout mousemove keydown keypress keyup', 
function(e){epl3()}); 



</script>
<script src="js/bg.js"></script>

</body>
</html>