<?php
	$date = substr($row['date'], 5,-3);
		$date = substr_replace($date, ' в ', 5, 1);
		$date_month = substr($date, 0,2 );
		
 if ($date_month == 6 ) {
	$date_now = " Июня в ";
	$day = trim(substr($date, 3,3));
	$Clock =  substr($date, 9,10);
	$date = $day.$date_now.$Clock; 

}
if ($date_month == 7 ) {
	$date_now = " Июля в ";
	$day = trim(substr($date, 3,3));
	$Clock =  substr($date, 9,10);
	$date = $day.$date_now.$Clock; 
}
if ($date_month == 8 ) {
	$date_now = " Августа в ";
	$day = trim(substr($date, 3,3));
	$Clock =  substr($date, 9,10);
	$date = $day.$date_now.$Clock; 
}
if ($date_month == 9 ) {
	$date_now = " Сентября в ";
	$day = trim(substr($date, 3,3));
	$Clock =  substr($date, 9,10);
	$date = $day.$date_now.$Clock; 
}
if ($date_month == 10 ) {
	$date_now = " Октября в ";
	$day = trim(substr($date, 3,3));
	$Clock =  substr($date, 9,10);
	$date = $day.$date_now.$Clock; 
}
if ($date_month == 11) {
	$date_now = " Ноября в ";
	$day = trim(substr($date, 3,3));
	$Clock =  substr($date, 9,10);
	$date = $day.$date_now.$Clock; 
}
if ($date_month == 12 ) {
	$date_now = " Декабря в ";
	$day = trim(substr($date, 3,3));
	$Clock =  substr($date, 9,10);
	$date = $day.$date_now.$Clock; 
}
if ($date_month == 1 ) {
	$date_now = " Января в ";
	$day = trim(substr($date, 3,3));
	$Clock =  substr($date, 9,10);
	$date = $day.$date_now.$Clock; 
}
if ($date_month == 2) {
	$date_now = " Февраля в ";
	$day = trim(substr($date, 3,3));
	$Clock =  substr($date, 9,10);
	$date = $day.$date_now.$Clock; 
}
if ($date_month == 3 ) {
	$date_now = " Марта в ";
	$day = trim(substr($date, 3,3));
	$Clock =  substr($date, 9,10);
	$date = $day.$date_now.$Clock; 
}
if ($date_month == 4 ) {
	$date_now = " Апреля в ";
	$day = trim(substr($date, 3,3));
	$Clock =  substr($date, 9,10);
	$date = $day.$date_now.$Clock; 
}
if ($date_month == 5 ) {
	$date_now = " Мая в ";
	$day = trim(substr($date, 3,3));
	$Clock =  substr($date, 9,10);
	$date = $day.$date_now.$Clock; 
}

 ?>