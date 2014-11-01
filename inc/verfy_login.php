<?php
  include "conn.php";
  session_start();
  $_SESSION['cookieee']="yoxi8hgs";
  $UserName = $_POST['UserName'];
  $UserPwd = $_POST['UserPwd'];
  $UserData =mysql_fetch_array(mysql_query("SELECT * FROM user WHERE UserName = '$UserName'"));
  $_SESSION['UserName'] = $UserData['UserName'];
  $_SESSION['UserPwd'] = $UserData['UserPwd'];
  $_SESSION['UserGroup'] = $UserData['UserGroup'];
  
  if	 ($UserPwd == $UserData['UserPwd'] && $UserData['UserGroup'] == 'admin'):
  	header("location:../index.php");
  elseif ($UserPwd == $UserData['UserPwd'] && $UserData['UserGroup'] == 'user'):
  	header("location:../index.php");
  else:
    header("location:../index.php");
  endif;
  
  if     ($UserPwd !== $UserData['UserPwd'] || $UserName !== $UserData['UserName']):
  	echo "<script>alert('用户名or密码错误！');history.go(-1);</script>";
	session_unset();
	session_destroy();
  endif;
?>