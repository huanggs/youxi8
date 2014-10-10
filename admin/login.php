<?php include "../inc/conn.php" ?>
<!DOCTYPE html>
<head>
  <title>登陆 - <?php echo $DataInfo['SiteName'];?> - <?php echo $DataInfo['SiteTitle'];?></title>
  <?php include "../inc/head_admin.php" ?>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php include "../inc/top_admin.php" ?>
        <form method="post" action="../inc/verfy_login.php" class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-1 control-label">用户名：</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" name="CatgName"></input>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-1 control-label">密码：</label>
            <div class="col-sm-3">
              <input type="password" class="form-control" name="CatgName"></input>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-3">
              <button type="submit" class="btn btn-success btn-block">登陆</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>