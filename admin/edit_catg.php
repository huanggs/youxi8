<?php include  "../inc/conn.php" ?>
<!DOCTYPE html>
<head>
  <title>分类管理 - 游戏吧 - 掌握最全游戏信息</title>
  <?php include "../inc/head_2.php" ?>
</head>

<body>
  <div class="container">
    <?php include "../inc/top_admin.php";
      $CatgId=@$_GET["id"];
      $QureyCatg=mysql_query("SELECT * FROM category WHERE id=$CatgId");
      $RowCatg=mysql_fetch_array($QureyCatg);
    ?>
    <div class="row">
      <div class="col-md-12">
        <form role="form" class="form-horizontal" method="post" action="../inc/new_category.php">
          <div class="form-group">
            <label class="col-sm-1 control-label">分类名称</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="CatgName" value="<?=$RowCatg[CatgName]?>"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">分类级别</label>
            <div class="col-sm-3">
              <select class="form-control" name="CatgLv">
                <option value="<?=$RowCatg[CatgLv]?>"><?=$RowCatg[CatgLv]?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">父级分类</label>
            <div class="col-sm-3">
              <select class="form-control" name="CatgFatherId">
                <option value="<?=$RowCatg[CatgLv]?>"><?=$RowCatg[CatgFatherId]?></option>
                <?php
                  $qurey_catg=mysql_query("SELECT * FROM category");
                  while ($data_catg=mysql_fetch_array($qurey_catg)) {
                    echo "<option value=\"".$data_catg['id']."\">".$data_catg['CatgName']."</option>";
                  }
                ?>
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