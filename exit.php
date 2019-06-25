<?php session_start();
unset($_SESSION['login']);
unset($_SESSION['User_name']);
setcookie("losd_sd","",time()-3600*60*30*32);
setcookie("ss_uks","",time()-3600*60*30*32);
session_destroy();
header("Location:index.php");

 ?>
 