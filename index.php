<?php session_start(); 

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
 }
  
} ?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- My style -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/article.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="shortcut icon" href="img/shortcut icons/Blip_main.jpg" type="image/x-icon" />
    <!-- Content -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="description" content="Главные новости проекта.">
	<meta name="author" content="Ivan4ick">
<!-- 
   <audio autoplay >
 		<source src="audio/#2270 Rae Sremmurd - no type ( sushi2go remix) X Combo Vine.mp3" type="audio/ogg; codecs=vorbis" >
  </audio> -->
	
	<title>Golden Edition RP</title>
</head>

<body id="top_nav" >


<?php 

$log_session = 0;
    if (!(empty($_SESSION['login'])) && !(empty($_SESSION['User_name'])))
    {
    		   require('header_reg.php');

    }
    else
    {
 
        		$log_session++;
    	require('header.php');
   echo '<div id="block" class="blocks">Вы зашли на сайт, как гость. Зарегистрироваться вы можете здесь <a href="reg.php">Зарегистрироваться</a> Или авторизоваться здесь <a href="signin.php">Авторизоваться</a> </div>';
    }

    ?> 
  

<?php 


require 'func/func_user_get.php';
$db_host='localhost'; // ваш хост
$db_name='MultiTheAuto'; // ваша бд
$db_user='root'; // пользователь бд
$db_pass=''; // пароль к бд
$link = mysqli_connect($db_host, $db_user,$db_pass, $db_name) 
    or die("Ошибка " . mysqli_error($link));

$sql='SELECT * FROM `News`';  // запрос на выборку
$result = mysqli_query($link, $sql);// запрос на выборку
echo '<div class="title_news"><h1>Новости</h1></div>';
while($row=mysqli_fetch_array($result))
{
	
	
require 'func/fucn_date.php';
	
echo '<div class="box_content" id="box_con">
	<div class="box">
	<div class="box_news">
		<h2>'.$row["header"].'</h2>
		<p><span>'.$date.'</span> &copy; <span>'.$row["Author"].'</span></p>
	</div>
	<div class="box_img">
		<img src="img/blog_info/'.$row["photo"].'">
	</div>
	<div class="box_content_news">
		<span>'.$row["content"].'</br></span>
	</div>
</div>	
</div>';
// выводим данные
} 


?>
<?php require 'footer.php'; ?>
<div id="nav" class="hidden"><a id="navchik" href="#top_nav">Вверх</a></div>
<div id="bg">
	
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript">


$(function(){
        $("#navchik").click(function(){
                var _href = $(this).attr("href");
                $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
                return false;
        });
});

 jQuery(function($) {
	        $(window).scroll(function(){
	            if($(this).scrollTop() > 300){
	             $('#nav').removeClass('hidden');   
	             $('#nav').addClass('block');   
	            }
	            else if ($(this).scrollTop() < 120){
	                $('#nav').removeClass('block');
	                $('#nav').addClass('hidden');
	             
	            }
	        });
	    });

  jQuery(function($) {
	        $(window).scroll(function(){
	            if($(this).scrollTop() > 140){
	             $('#block').removeClass('blocks');   
	             $('#block').addClass('fixed');   
	            }
	            else if ($(this).scrollTop() < 120){
	                $('#block').removeClass('fixed');
	                $('#block').addClass('blocks');
	             
	            }
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
