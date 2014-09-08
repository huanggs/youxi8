<?php include  "../inc/conn.php" ?>
<!DOCTYPE html>
<head>
  <title>用户管理 - 游戏吧 - 掌握最全游戏信息</title>
  <?php include "../inc/head_2.php" ?>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php include "../inc/top_admin.php" ?>
        <form method="post" action="inc/new">
          <label>用户名：</label><input type="text" value=""></input>
          <label>输入密码：</label><input type="text" value=""></input>
          <label>确认密码：</label><input type="text" value=""></input>
          <label>用户组：</label><input type="text" value=""></input>
        </form>
      </div>
    </div>
  </div>
</body>