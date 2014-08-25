<?php include "inc/conn.php" ?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <title>首页 - 游戏吧 - 掌握最全游戏信息</title>
  <mete name="keyword" content="游戏,展会,电竞,测试,直播,英雄联盟,比赛">
  <mete name="description" content="关注游戏吧，掌握最全游戏信息。游戏吧通过简洁的内容呈现，让玩家可以快速了解游戏行业重大事件，从此不再错过任何精彩游戏。">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-1.11.1.min.js"></script>
</head>

<!-- Design by Bootstrap; Refect by Ghost; Code by Ghost;-->

<body>
  <?php include "inc/top.php" ?>
  <div class="container">
    <?php include "inc/nav.php" ?>
    <div class="row">
      <div class="col-md-12">
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[date("w")];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM content WHERE category like '%$category%' and EventDay like '$today' ORDER BY EventDay, EventTime");
            while ($data_content=mysql_fetch_array($query_content2)) {
			      include "inc/content_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_1";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[date("w")+1];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM content WHERE category like '%$category%' and EventDay like '$today_1' ORDER BY EventDay");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_2";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[date("w")+2];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM content WHERE category like '%$category%' and EventDay like '$today_2' ORDER BY EventDay");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_3";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[date("w")+3];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM content WHERE category like '%$category%' and EventDay like '$today_3' ORDER BY EventDay");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_4";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[date("w")+4];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM content WHERE category like '%$category%' and EventDay like '$today_4' ORDER BY EventDay");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_5";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[date("w")+5];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM content WHERE category like '%$category%' and EventDay like '$today_5' ORDER BY EventDay");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_6";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[date("w")-1];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM content WHERE category like '%$category%' and EventDay like '$today_6' ORDER BY EventDay");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_7";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[date("w")];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM content WHERE category like '%$category%' and EventDay like '$today_7' ORDER BY EventDay");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_8";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[date("w")+1];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM content WHERE category like '%$category%' and EventDay like '$today_8' ORDER BY EventDay");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_9";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[date("w")+2];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM content WHERE category like '%$category%' and EventDay like '$today_9' ORDER BY EventDay");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
      </div>
    </div>
  </div>
</body>