<?php
  include "conn.php";
  $EditUser = "UPDATE user SET
  UserName='$_POST[UserName]',
  UserPwd='$_POST[UserPwd]',
  UserGroup=$_POST[UserGroup]
  WHERE id=$_POST[id]";
  if (!mysql_query($EditUser,$con)){
    die('Error: ' . mysql_error());
  }
  else {
    header('Location: ../admin/user.php');
  }
?>