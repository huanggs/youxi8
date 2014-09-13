<?php include  "../inc/conn.php" ?>
<!DOCTYPE html>
<head>
  <title>分类管理 - 游戏吧 - 掌握最全游戏信息</title>
  <?php include "../inc/head_2.php" ?>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php include "../inc/top_admin.php" ?>
        <table class="table table-hover table-condensed content">
        <tr class="thead"><td align="center">id</td><td>名称</td><td>二级分类</td><td>三级分类</td><td align="center">操作</td></tr>
        </table>
        <ul>
          <?php
            $QureyCatgLv1=mysql_query("SELECT * FROM category WHERE CatgLv=1 ORDER BY id");
            while ($RowCatgLv1=mysql_fetch_array($QureyCatgLv1)){
            include "../inc/catg_admin.php";
            }
          ?>
        </ul>
      </div>
    </div>
  </div>
</body>