<?php include "inc/conn.php" ?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <title>首页 - 游戏吧</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-1.11.1.min.js"></script>
</head>

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
        <table class="table table-hover">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM content WHERE category like '%$category%' and CreateDate like '$today' ORDER BY CreateDate");
            while ($data_content=mysql_fetch_array($query_content2)) {
			      include "inc/content_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_1";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[date("w")+1];?></span>
        </div>
        <table class="table table-hover">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM content WHERE category like '%$category%' and CreateDate like '$today_1' ORDER BY CreateDate");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_2";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[date("w")+2];?></span>
        </div>
        <table class="table table-hover">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM content WHERE category like '%$category%' and CreateDate like '$today_2' ORDER BY CreateDate");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_3";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[date("w")+3];?></span>
        </div>
        <table class="table table-hover">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM content WHERE category like '%$category%' and CreateDate like '$today_3' ORDER BY CreateDate");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_4";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[date("w")+4];?></span>
        </div>
        <table class="table table-hover">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM content WHERE category like '%$category%' and CreateDate like '$today_4' ORDER BY CreateDate");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_5";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[date("w")+5];?></span>
        </div>
        <table class="table table-hover">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM content WHERE category like '%$category%' and CreateDate like '$today_5' ORDER BY CreateDate");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_6";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[date("w")+6];?></span>
        </div>
        <table class="table table-hover">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM content WHERE category like '%$category%' and CreateDate like '$today_6' ORDER BY CreateDate");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_7";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[date("w")];?></span>
        </div>
        <table class="table table-hover">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM content WHERE category like '%$category%' and CreateDate like '$today_7' ORDER BY CreateDate");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_8";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[date("w")+1];?></span>
        </div>
        <table class="table table-hover">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM content WHERE category like '%$category%' and CreateDate like '$today_8' ORDER BY CreateDate");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
        
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today_9";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[date("w")+2];?></span>
        </div>
        <table class="table table-hover">
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM content WHERE category like '%$category%' and CreateDate like '$today_9' ORDER BY CreateDate");
            while ($data_content=mysql_fetch_array($query_content2)) {
            include "inc/content_index.php";
            }
          ?>
        </table>
      </div>
    </div>
  </div>
</body>