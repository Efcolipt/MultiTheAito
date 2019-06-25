<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- My style -->
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" href="css/Contact.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="shortcut icon" href="img/shortcut icons/Blip_contact.jpg" type="image/x-icon" />
    <!-- Content -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Ivan4ick">

	<title>Контакты</title>
</head>
<body>

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
   header("Location:Contact.php");
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

    ?> 

<?php 
require 'func/func_user_get.php';
$link = mysqli_connect($db_host, $db_user,$db_pass, $db_name) 
    or die("Ошибка " . mysqli_error($link));
$sql='SELECT * FROM  Admin';  // запрос на выборку
@mysqli_query("SET NAMES 'utf8' ");   
$rs = mysqli_query($link, $sql);   
echo '<h1 class="h1">Контакты</h1>';
   echo '<div class="wrap_contact">';
    while($row = mysqli_fetch_array($rs)){
   
        echo ' <div class="contact">
<div class="box__img__contact">
            <img src="img/Img_admin/'.$row['photo'].'.jpg" alt="">
        </div>
            <div class="box_name_contact">
            <h3>'.$row['name'].'</h3>
            <p>'.$row['login'].'</p>
            <span class="envelope__S"><i class="fas fa-envelope-open"></i>
            <p class="mail"><a href="#">'.$row['email'].'</a></p>
            </span>
            <span class="phone__S">
            <i class="fas fa-phone"></i>
            <p class="phone">+'.$row['phone'].'</p>
            </span>
            </div>
         </div>';
    }
echo '</div>';
?>





<div id="bg"></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript">
$(function(){
        $("a[href^='#']").click(function(){
                var _href = $(this).attr("href");
                $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
                return false;
        });
});
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
 
 
</script>
<script src="js/bg.js"></script>
</body>
</html>