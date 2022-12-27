<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/configure/mysql.php";
$host='localhost';												# 호스트명 또는 IP
$user='everytest';												# Mysql 유저이름
$dbpass='Nyoun003310!';												# DB 패스워드
$dbname='everytest';	
										# 데이타 베이스 이름

$sock = mysql_connect($host,$user,$dbpass);
$db = mysql_select_db($dbname,$sock);

mysql_query('set names utf8');



// $URL = $PHP_SELF;
// $ses_user_id = $_SESSION['USER_ID'];
// $IP = $_SERVER['REMOTE_ADDR'];
// $key = session_id();
// $time = date('Y-m-d H:i:s');

// if ($ses_user_id!="") {
// 	$que_history = "INSERT INTO session_history_back (user_id, url, access_time, ip, sesskey) VALUES ('$ses_user_id', '$URL', '$time', '$IP', '$key')
// 				on duplicate key update 
// 				sesskey = '".$key."',
// 				access_time ='".$time."',
// 				ip = '".$IP."'	
	
// 	";
// 	$qid = mysql_query($que_history) or die(mysql_error());
// }
?>
