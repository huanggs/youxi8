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
        <table class="table table-hover table-condensed content">
        <tr><td align="center">id</td><td align="center">名称</td><td align="center">层级</td><td align="center">父级分类</td><td align="center">操作</td></tr>
        <?php
          $QureyCatg=mysql_query("SELECT * FROM category ORDER BY CatgFatherId");
          while ($RowCatg=mysql_fetch_array($QureyCatg)){
          include "../inc/catg_admin.php";
          }
        ?>
        </table>
      </div>
    </div>
  </div>
</body>