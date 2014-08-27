<?php include  "../inc/conn.php" ?>
<!DOCTYPE html>
<head>
  <title>分类管理 - 游戏吧 - 掌握最全游戏信息</title>
  <?php include "../inc/head_2.php" ?>
</head>

<body>
  <div class="container">
    <?php include "../inc/top_admin.php" ?>
    <div class="row">
      <div class="col-md-12">
        <form role="form" class="form-horizontal" method="post" action="../inc/new_category.php">
          <div class="form-group">
            <label class="col-sm-1 control-label">分类名称</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="title"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">父级分类</label>
            <div class="col-sm-3">
              <select class="form-control" name="category">
                <option value="测试">测试</option>
                <option value="展会">展会</option>
                <option value="赛事">赛事</option>
                <option value="赛事">英雄联盟2014S4全球总决赛</option>
                <option value="赛事">英雄联盟职业联赛</option>
                <option value="赛事">英雄联盟高校联赛</option>
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