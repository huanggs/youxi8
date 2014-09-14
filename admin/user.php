<?php include  "../inc/conn.php" ?>
<!DOCTYPE html>
<head>
  <title>用户管理 - <?php echo $DataInfo['SiteName'];?> - <?php echo $DataInfo['SiteTitle'];?></title>
  <?php include "../inc/head_2.php" ?>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php include "../inc/top_admin.php" ?>
        <table class="table table-hover table-condensed content">
          <tr class="thead"><td align="center">id</td><td align="center">用户名</td><td align="center">用户组</td><td align="center" colspan="2">操作</td></tr>
        <?php
          $QureyUser=mysql_query("SELECT * FROM user");
          while ($RowUser=mysql_fetch_array($QureyUser)){
          include "../inc/user_admin.php";
          }
        ?>
      </div>
    </div>
  </div>
</body>