<?php include  "../inc/conn.php" ?>
<!DOCTYPE html>
<head>
  <title>事件管理 - <?php echo $DataInfo['SiteName'];?> - <?php echo $DataInfo['SiteTitle'];?></title>
  <?php include "../inc/head_admin.php" ?>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php include "../inc/top_admin.php" ?>
        <table class="table table-hover table-condensed content">
          <tr class="thead">
            <td align="center">id</td>
            <td align="center">日期</td>
            <td align="center">时间</td>
            <td align="center">分类</td>
            <td align="center">标题</td>
            <td align="center">重要度</td>
            <td align="center">地点</span></td>
            <td align="center">官网</td>
            <td align="center">链接1</td>
            <td align="center">连接2</a></td>
            <td align="center">链接3</a></td>
            <td align="center">链接4</td>
            <td align="center" colspan="2">操作</td>
          </tr>
        <?php
          $QureyEvent=mysql_query("SELECT * FROM event ORDER BY id DESC");
          while ($ArrayEvent=mysql_fetch_array($QureyEvent)){
          include "../inc/event_admin.php";
          }
        ?>
        </table>
      </div>
    </div>
  </div>
</body>