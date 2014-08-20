<?php
	$con=mysql_connect("localhost","root","root");
	mysql_query("set names 'utf8'");
	if (!$con){
		die('数据库连接失败'.mysql_error());
	}
	mysql_select_db("youxi8",$con);
    $query_content=mysql_query("SELECT * FROM content ORDER BY date");
?>