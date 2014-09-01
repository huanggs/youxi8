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

      <?php
        for ($i=0;$i<9;$i++){
          switch ($i) {
            case '0':
              $today=$today;
              $today_w=$today_w;
              break;
            case '1':
              $today=$today_1;
              $today_w=$today_1_w;  
              break;
            case '2':
              $today=$today_2;
              $today_w=$today_2_w;  
              break;
            case '3':
              $today=$today_3;
              $today_w=$today_3_w;  
              break;
            case '4':
              $today=$today_4;
              $today_w=$today_4_w;  
              break;
            case '5':
              $today=$today_5;
              $today_w=$today_5_w;  
              break;
            case '6':
              $today=$today_6;
              $today_w=$today_6_w;  
              break;
            case '7':
              $today=$today_7;
              $today_w=$today_7_w;  
              break;
            case '8':
              $today=$today_8;
              $today_w=$today_8_w;  
              break;
            case '9':
              $today=$today_9;
              $today_w=$today_9_w;  
              break;
          }
          ?>
        <div class="DayTitle">
          <span class="DayTitleDate"><?php echo "$today";?></span>
          <span class="DayTitleWeek"><?php echo "星期".$weekarray[$today_w];?></span>
        </div>
        <table class="table table-hover table-condensed content">
          <tr><td align="center">时间</td><td align="center">分类</td><td align="center">名称</td><td align="center">重要度</td><td align="center">地点</td><td align="center" colspan="5">链接</td><td align="center">提醒</td></tr>
          <?php
            $category = @$_GET['category'];
            $query_content2=mysql_query("SELECT * FROM event WHERE category like '%$category%' and EventDay like '$today' and Visible=1 ORDER BY EventTime");
            while ($data_content=mysql_fetch_array($query_content2)) {
			      include "inc/event_index.php";
            }
          ?>
        </table>
        <?php
        }
        ?>

      </div>
      <div class="col-md-12">
        footer
      </div>
    </div>
  </div>
</body>