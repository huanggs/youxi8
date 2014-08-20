<?php include  "inc/conn.php" ?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <title>首页 - 游戏吧</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-1.11.1.min.js"></script>
</head>

<body>
  <div class="container">
    <?php include  "inc/top.php" ?>
    <?php include  "inc/nav.php" ?>
    <div class="row">
      <div class="col-md-12">
        <table class="table table-hover">
          <?php while ($data_content=mysql_fetch_array($query_content)) {
			  include "inc/content_index.php";
            }
          ?>
        </table>
      </div>
    </div>
  </div>
</body>