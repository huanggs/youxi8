<?php include "inc/conn.php" ?>
<!DOCTYPE html>
<head>
  <title>首页 - 游戏吧 - 掌握最全游戏信息</title>
  <?php include "inc/head.php" ?>
</head>

<!-- 设计：Bootstrap; 重构：Ghost; 开发：by Ghost;-->

<body>
  <?php include "inc/top.php" ?>
  <div class="container">
    <?php include "inc/nav.php" ?>
    <div class="row">
      <div class="col-md-12">
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[$today_w];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM event WHERE category like '%$category%' and EventDay like '$today' ORDER BY EventDay, EventTime");
            while ($data_content=mysql_fetch_array($query_content2)) {
			      include "inc/event_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_1";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[$today_1_w];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM event WHERE category like '%$category%' and EventDay like '$today_1' ORDER BY EventDay");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/event_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_2";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[$today_2_w];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM event WHERE category like '%$category%' and EventDay like '$today_2' ORDER BY EventDay");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/event_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_3";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[$today_3_w];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM event WHERE category like '%$category%' and EventDay like '$today_3' ORDER BY EventDay");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/event_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_4";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[$today_4_w];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM event WHERE category like '%$category%' and EventDay like '$today_4' ORDER BY EventDay");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/event_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_5";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[$today_5_w];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM event WHERE category like '%$category%' and EventDay like '$today_5' ORDER BY EventDay");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/event_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_6";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[$today_6_w];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM event WHERE category like '%$category%' and EventDay like '$today_6' ORDER BY EventDay");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/event_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_7";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[$today_7_w];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM event WHERE category like '%$category%' and EventDay like '$today_7' ORDER BY EventDay");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_8";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[$today_8_w];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM event WHERE category like '%$category%' and EventDay like '$today_8' ORDER BY EventDay");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_9";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[$today_9_w];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM event WHERE category like '%$category%' and EventDay like '$today_9' ORDER BY EventDay");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
      </div>
      <div class="col-md-12">
        footer
      </div>
    </div>
  </div>
</body>