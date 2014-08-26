<?php include  "../inc/conn.php" ?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <title>首页 - 游戏吧 - 掌握最全游戏信息</title>
  <mete name="keyword" content="游戏,展会,电竞,测试,直播,英雄联盟,比赛">
  <mete name="description" content="关注游戏吧，掌握最全游戏信息。游戏吧通过简洁的内容呈现，让玩家可以快速了解游戏行业重大事件，从此不再错过任何精彩游戏。">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/collapse.js"></script>
  <script src="../js/jquery-1.11.1.min.js"></script>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="acticve"><a href="index.php">后台首页</a></li>
          <li class="dropdown">
            <a href="event.php" class="dropdown-toggle" data-toggle="dropdown">事件管理 <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
          <li><a href="user.php">用户管理</a></li>
          <li><a href="category.php">分类管理</a></li>
          <li><a href="ad.php">广告管理</a></li>
        </ul>
      </div>
    </nav>
  </div>
</body>