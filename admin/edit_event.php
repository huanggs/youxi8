<?php include  "../inc/conn.php" ?>
<!DOCTYPE html>
<head>
  <title>添加事件 - 游戏吧 - 掌握最全游戏信息</title>
  <?php include "../inc/head_2.php" ?>
</head>

<body>
  <div class="container">
    <?php include "../inc/top_admin.php";
      $edit_id = @$_GET["id"];
      $query_event=mysql_query("SELECT * FROM event WHERE id=$edit_id");
      $row=mysql_fetch_array($query_event);
      $query_catg=mysql_query("SELECT * FROM category WHERE id=$row[category]");
      $row_catg=mysql_fetch_array($query_catg);
    ?>
    <div class="row">
      <div class="col-md-12">
        <form role="form" class="form-horizontal" method="post" action="../inc/edit_event.php">
          <div class="form-group">
            <label class="col-sm-1 control-label">id</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="id" disabled="true" value="<?=$row['id']?>"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">标题</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="title" value="<?=$row['title']?>"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">日期</label>
            <div class="col-sm-3">
              <input type="date" class="form-control" name="EventDay" value="<?=$row['EventDay']?>"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">时间</label>
            <div class="col-sm-3">
              <input type="time" class="form-control" name="EventTime" value="<?=$row['EventTime']?>"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">地点</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" name="EventPlace" value="<?=$row['EventPlace']?>"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">分类</label>
            <div class="col-sm-3">
              <select class="form-control" name="category">
                <option value="<?=$row['category']?>"><?=$row_catg['CatgName']?></option>
                <?php
                  $qurey_catg=mysql_query("SELECT * FROM category");
                  while ($data_catg=mysql_fetch_array($qurey_catg)) {
                    echo "<option value=\"".$data_catg['id']."\">".$data_catg['CatgName']."</option>";
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">重要度</label>
            <div class="col-sm-3">
              <select class="form-control" name="importance">
                <option value="<?=$row['importance']?>"><?=$row['importance']?></option>
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
              <input type="text" class="form-control" name="description" value="<?=$row['description']?>"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">官网</label>
            <div class="col-sm-11">
              <input type="text" class="form-control" name="OfficialSite" value="<?=$row['OfficialSite']?>"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">链接2</label>
            <div class="col-sm-11">
              <input type="text" class="form-control" name="link_2" value="<?=$row['link_2']?>"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">链接3</label>
            <div class="col-sm-11">
              <input type="text" class="form-control" name="link_3" value="<?=$row['link_3']?>"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">链接4</label>
            <div class="col-sm-11">
              <input type="text" class="form-control" name="link_4" value="<?=$row['link_4']?>"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">链接5</label>
            <div class="col-sm-11">
              <input type="text" class="form-control" name="link_5" value="<?=$row['link_5']?>"></input>
            </div>
          </div>
          <div class="btn_center">
          <button type="submit" class="btn btn-success btn-block">确认修改</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>