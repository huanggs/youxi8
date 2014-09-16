<?php include  "../inc/conn.php" ?>
<!DOCTYPE html>
<head>
  <title>管理首页 - <?php echo $DataInfo['SiteName'];?> - <?php echo $DataInfo['SiteTitle'];?></title>
  <?php include "../inc/head_admin.php" ?>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php include "../inc/top_admin.php" ?>
      </div>
      <div class="col-md-2">
        <label>事件总数：</label><?php echo $NumEvent[0];?><br>
        <label>用户总数：</label><?php echo $NumUser[0];?><br>
        <label>分类总数：</label><?php echo $NumCatg[0];?>
      </div>
    </div>
  </div>
</body>