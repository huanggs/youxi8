<?php include  "../inc/conn.php" ?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <title>录入信息 - 游戏吧</title>
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery-1.11.1.min.js"></script>
</head>

<body>
  <div class="container">
    <?php include  "../inc/top.php" ?>
    <?php include  "../inc/nav.php" ?>
    <div class="row">
      <div class="col-md-12">
        <form role="form" class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-1 control-label">标题</label>
            <div class="col-sm-6">
              <input type="text" class="form-control"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">日期</label>
            <div class="col-sm-3">
              <input type="date" class="form-control"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">分类</label>
            <div class="col-sm-3">
              <select class="form-control">
                <option value="测试">测试</option>
                <option value="展会">展会</option>
                <option value="赛事">赛事</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">重要度</label>
            <div class="col-sm-3">
              <select class="form-control">
                <option value="1">万众瞩目</option>
                <option value="2">不容错过</option>
                <option value="3">建议关注</option>
                <option value="4">值得一看</option>
                <option value="5">不妨一看</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">描述</label>
            <div class="col-sm-11">
              <input type="text" class="form-control"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">链接1</label>
            <div class="col-sm-11">
              <input type="text" class="form-control"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">链接2</label>
            <div class="col-sm-11">
              <input type="text" class="form-control"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">链接3</label>
            <div class="col-sm-11">
              <input type="text" class="form-control"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">链接4</label>
            <div class="col-sm-11">
              <input type="text" class="form-control"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">链接5</label>
            <div class="col-sm-11">
              <input type="text" class="form-control"></input>
            </div>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>