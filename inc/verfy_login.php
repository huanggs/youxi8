<?php
  include "conn.php";
  session_start();
  $_SESSION['cookieee']="yoxi8hgs";
  $UserName=$_POST['UserName'];
  $UserPwd=$_POST['UserPwd'];
  $UserData=mysql_fetch_array(mysql_query("SELECT * FROM user WHERE UserName='$UserName'"));
  $_SESSION['UserName']=$UserData['UserName'];
  $_SESSION['UserPwd']=$UserData['UserPwd'];
  
  if	 ($UserPwd==$UserData['UserPwd'] && $UserData['UserGroup']=='admin'):
  	header("location:../admin/index.php");
  elseif ($UserPwd==$UserData['UserPwd'] && $UserData['UserGroup']=='user'):
  	header("location:../index.php");
  else:
    header("location:../index.php");
  endif;
?>