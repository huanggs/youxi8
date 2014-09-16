<?php include  "../inc/conn.php" ?>
<!DOCTYPE html>
<head>
  <title>用户管理 - 游戏吧 - 掌握最全游戏信息</title>
  <?php include "../inc/head_admin.php" ?>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php include "../inc/top_admin.php" ?>
        <?php
          $UserID=@$_GET["id"];
          $DataUser=mysql_fetch_array(mysql_query("SELECT * FROM user WHERE id=$UserID"));
        ?>

        <form role="form" class="form-horizontal" method="post" action="../inc/edit_user.php">
          <div class="form-group">
            <label class="col-md-2 control-label">ID：</label>
            <div class="col-md-6 ">
              <input class="form-control" type="text" readonly="ture" name="id" value="<?php echo $DataUser["id"];?>"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">用户名：</label>
            <div class="col-md-6 ">
              <input class="form-control" type="text" name="UserName" value="<?php echo $DataUser["UserName"];?>"></input>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">输入密码：</label>
            <div class="col-md-6 ">
              <input class="form-control" type="text" name="UserPwd" value="<?php echo $DataUser["UserPwd"];?>"></input>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">确认密码：</label>
            <div class="col-md-6 ">
              <input class="form-control" type="text" name="UserPwdCfm" value=""></input>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">用户组：</label>
            <div class="col-md-6 ">
              <select class="form-control" name="UserGroup">
                <option value="<?php echo $DataUser["UserGroup"];?>">当前用户组：<?php echo $DataUser["UserGroup"];?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
          </div>
          
          <div class="btn_center">
          <button type="submit" class="btn btn-success btn-block">提交</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>