<?php 

define("MAX_IDLE_TIME", 3);
function getOnlineUsers(){
if ( $directory_handle = opendir( session_save_path() ) ) {
$count = 0;
while ( false !== ( $file = readdir( $directory_handle ) ) ) {
if($file != '.' && $file != '..'){
if(time()- filemtime(session_save_path() . '' . $file) < MAX_IDLE_TIME * 60) {
$count++;
}
} }
closedir($directory_handle);
return $count;
} else {
return false;
}}

$db_host='localhost'; // ваш хост
$db_name='MultiTheAuto'; // ваша бд
$db_user='root'; // пользователь бд
$db_pass=''; // пароль к бд
$link = mysql_connect($db_host, $db_user,$db_pass, $db_name) 
    or die("Ошибка " . mysqli_error($link));


?>