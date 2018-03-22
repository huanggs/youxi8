<?php
	include 'inc/conn.php';
	session_start();
	if (!isset($_SESSION["cookieee"])) {
	session_unset();
	session_destroy();
}
?>
  <div class="n_top">
    <div class="container">
      <span><img src="images/logo.png" width="480" height="80"></span>
      <span class="descaription"><?php echo $DataInfo['SiteTitle'];?></span>
      <span class="login">    
	    <?php
		if(isset($_SESSION['UserName'])):
		?>
	        <?php echo $_SESSION['UserName'];?> 欢迎您！
	        <?php
				if ($_SESSION['UserGroup'] == "admin"):
					echo "<a href=\"admin/index.php\" target=\"_blank\">进入后台</a>";
	             elseif($_SESSION['UserGroup'] == "user"):
					echo "";
	            endif;
			?>
	            <a href="logout.php">退出</a>
	    <?php elseif(!isset($_SESSION['UserName'])): ?>
	    <a href=""> 注册</a>
	    <a href="login.php"> 登陆</a>
	    <?php endif;?>
      </span>
    </div>
  </div>