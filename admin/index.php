<?php include  "../inc/conn.php" ?>
<!DOCTYPE html>
<head>
  <title>管理首页 - 游戏吧 - 掌握最全游戏信息</title>
  <?php include "../inc/head_2.php" ?>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php include "../inc/top_admin.php" ?>
      </div>
      <div class="col-md-2">
        <label>事件总数：</label><?=$NumEvent[0]?><br>
        <label>用户总数：</label><?=$NumUser[0]?><br>
        <label>分类总数：</label><?=$NumCatg[0]?>
      </div>
    </div>
  </div>
</body>