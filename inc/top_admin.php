<?php
	include '../inc/conn.php';
	session_start();
	if (!isset($_SESSION["cookieee"])) {
	session_unset();
	session_destroy();
	}
	if ($_SESSION['UserGroup'] !== 'admin'):
		header("location:../index.php");
	endif;
?>
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 dropdown">
        <ul class="nav navbar-nav">
          <li class="acticve"><a href="index.php">后台首页</a></li>

          <li>
            <a href="event.php" class="dropdown-toggle" data-toggle="dropdown">事件管理 <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="event.php">事件列表</a></li>
              <li><a href="new_event.php">新增事件</a></li>
            </ul>
          </li>

          <li>
            <a href="event.php" class="dropdown-toggle" data-toggle="dropdown">分类管理 <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="category.php">分类列表</a></li>
              <li><a href="new_catg.php">新增分类</a></li>
            </ul>
          </li>

          <li>
            <a href="event.php" class="dropdown-toggle" data-toggle="dropdown">用户管理 <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="user.php">用户列表</a></li>
              <li><a href="new_user.php">新增用户</a></li>
            </ul>
          </li>
        </ul>
      <span class="login">
	        <span style="color:#fff;"><?php echo $_SESSION['UserName'];?> 欢迎您！</span>
	     	<a href="../logout.php">退出</a>
	    	<a href="../index.php" target="_blank">首页</a>
      </span>
      </div>
    </nav>