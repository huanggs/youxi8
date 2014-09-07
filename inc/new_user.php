<?php
  include "conn.php";
  $NewUser="INSERT INTO user
  (UserName, UserPwd, UserGroup)
  VALUES
  ($_POST[UserName], $_POST[UserPwd], $_POST[UserGroup])";
  if (!mysql_query($NewUser,$con)){
    die('Error: ' . mysql_error());
  }
  else {
    header('Location: ../admin/category.php');
  }
?>