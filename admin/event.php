<?php include  "../inc/conn.php" ?>
<!DOCTYPE html>
<head>
<head>
  <title>事件管理 - 游戏吧 - 掌握最全游戏信息</title>
  <?php include "../inc/head_2.php" ?>
</head>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="rol-md-12">
        <?php include "../inc/top_admin.php" ?>
        <table class="table table-hover table-condensed content">
        <?php
          $query_content2=mysql_query("SELECT * FROM event");
          while ($data_content=mysql_fetch_array($query_content2)){
          include "../inc/event_admin.php";
          }
        ?>
        </table>
      </div>
    </div>
  </div>
</body>