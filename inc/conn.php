<?php
  $con=mysql_connect("huanggs.com:33060","root","root");
  mysql_query("set names 'utf8'");
  if (!$con){
    die('数据库连接失败'.mysql_error());
  }
  mysql_select_db("youxi8",$con);
  $query_content=mysql_query("SELECT * FROM content ORDER BY EventDay");
  $today = date('Y-m-d',strtotime('today'));
  $today_1 = date('Y-m-d',strtotime('today +1day'));
  $today_2 = date('Y-m-d',strtotime('today +2day'));
  $today_3 = date('Y-m-d',strtotime('today +3day'));
  $today_4 = date('Y-m-d',strtotime('today +4day'));
  $today_5 = date('Y-m-d',strtotime('today +5day'));
  $today_6 = date('Y-m-d',strtotime('today +6day'));
  $today_7 = date('Y-m-d',strtotime('today +7day'));
  $today_8 = date('Y-m-d',strtotime('today +8day'));
  $today_9 = date('Y-m-d',strtotime('today +9day'));
  $today_q1 = date('Y-m-d',strtotime('today -1day'));
  $weekarray=array("日","一","二","三","四","五","六");
?>