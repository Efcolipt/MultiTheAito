
<?php
function writelog($typelog, $log_text) {
    $log = fopen('logs/'.$typelog.'.txt','a+');
    fwrite($log, "$log_text\r\n");
    fclose($log);
}
$data = $_POST;
if (isset($data['register'])){

    $data['userName'] = stripslashes($data['userName']);
    $data['userName'] = htmlspecialchars($data['userName']);
    $data['login'] = stripslashes($data['login']);
    $data['login'] = htmlspecialchars($data['login']);
    $data['email'] = stripslashes($data['email']);
    $data['email'] = htmlspecialchars($data['email']);
    $data['password'] = htmlspecialchars($data['password']);
    $data['password']= stripslashes($data['password']);
    $data['password_2']= stripslashes($data['password_2']); 
    $data['password_2'] = htmlspecialchars($data['password_2']);


    
    $MessageError = array();
    if (trim($data['userName']) == '' ||  trim($data['userName']) == ' ') {
        $MessageError[] = 'Введите ваше имя';
    }
    if (trim($data['login']) == '' ||  trim($data['login']) == ' ') {
        $MessageError[] = 'Введите логин';
    }
    
    if (trim($data['email']) == '' || trim($data['email']) == ' ' ) {
      $MessageError[] = 'Введите email';
  }
  if ($data['password'] == '' || $data['password'] == ' ' ) {
      $MessageError[] = 'Введите пароль';
  }
  if ($data['password_2'] == '' || $data['password_2'] == ' ') {
      $MessageError[] = 'Введите повторный пароль';
  }
  if (strlen($data['userName']) < 3  && !(strlen($data['userName']) > 20) ) {
    $MessageError[] = 'Имя должен быть не меньше 3 символов и не больше 20';
}
if (strlen($data['login']) < 3  && !(strlen($data['login']) > 25) ) {
    $MessageError[] = 'Логин должен быть не меньше 3 символов и не больше 25';
}

if (strlen($data['email']) < 3 && !strlen($data['email']) > 25 ) {
    $MessageError[] = 'Не меньше 3 символов и не больше 25';
}
if (strlen($data['password']) < 8 ) {
    $MessageError[] = 'Длина пароля должна быть не меньше 8 символов';
}
if (strlen($data['password_2']) < 8 ) {
    $MessageError[] = 'Длина повторного пароля должна быть не меньше 8 символов';
}
if ($data['password'] != $data['password_2']) {
    $MessageError[] = 'Повторный пароль введен не верно';
}



//     if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email))
//     {

//     }
//     else
//     {
// $MessageError[] = 'Введите корректный адрес';
//     }







$db_host = "localhost"; 
        $db_user = "root"; // Логин БД
        $db_password = ""; // Пароль БД
        $db_table = "User"; // Имя Таблицы БД
        
        
        
        
        $db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Не могу создать соединение ");
        mysql_select_db("MultiTheAuto",$db);
        mysql_query("SET NAMES 'utf8'",$db);
        $data['userName'] = mysql_real_escape_string($data['userName']);
        $data['login'] = mysql_real_escape_string($data['login']);
        $data['email'] = mysql_real_escape_string($data['email']);
        
        $data['password_2'] = mysql_real_escape_string($data['password_2']); 
        $data['password'] = mysql_real_escape_string($data['password']); 
        $myrow = mysql_real_escape_string($myrow);
        $myrow_2 = mysql_real_escape_string($myrow_2);
        $result_1 = mysql_query("SELECT login FROM User WHERE login='".$data['login']."'",$db);
        $result_2 = mysql_query("SELECT email FROM User WHERE email='".$data['email']."'",$db);
        $myrow = mysql_fetch_array($result_1);
        $myrow_2 = mysql_fetch_array($result_2);

        if (!empty($myrow_2['email'])) {

         $MessageError[] = 'Введеный вами email уже зарегистрирован';
     }
     if (!empty($myrow['login'])) {
       $MessageError[] = 'Введеный вами логин уже зарегистрирован';
   }
   if (empty($MessageError)) {

      
      $pas_hash = password_hash($data['password'], PASSWORD_DEFAULT);
      
      
      
      $db_host = "localhost"; 
				$db_user = "root"; // Логин БД
				$db_password = ""; // Пароль БД
				$db_table = "User"; // Имя Таблицы БД
               
             $db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Не могу создать соединение ");
             mysql_select_db("MultiTheAuto",$db);
             mysql_query("SET NAMES 'utf8'",$db);


             $result = mysql_query ("INSERT INTO ".$db_table." (User_name,login,password,email) VALUES ('".$data['userName']."','".$data['login']."','$pas_hash','".$data['email']."')"); 


             if ($result == 'true') {
               echo '<div  style="color: green;font-family: Roboto Slab, sans-serif; margin: 0 auto;  text-align:center; background:white; font-size:23px; padding-top: 15px;

               padding-bottom: 15px;">Вы зарегистрированы через <span id="sec"></span> вы будете переадресованны</div>';
               
               
           }
       } else{
          echo '<div style="font-family: Roboto Slab, sans-serif;
          margin: 0 auto;
          background: white;
          font-size: 23px;
          padding: 20px;
          text-align: center;
          color: red;">'.array_shift($MessageError).'</div>
          ';

          
      }

  }

  ?>