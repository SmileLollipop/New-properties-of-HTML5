<?php
	header("Content-Type:text/event-stream;charset=utf-8");
	header("Access-Control-Origin:http://127.0.0.1");
	date_default_timezone_set('PRC'); // 中国时区
	echo "data:现在是北京时间:".date('H:i:s')."\r\n";
	flush();
?>

