<?php
  include "conn.php";
  $EditCatg = "UPDATE category SET CatgName='$_POST[CatgName]', CatgLv=$_POST[CatgLv], CatgFatherId=$_POST[CatgFatherId] WHERE id=$_POST[id]";
  if (!mysql_query($EditCatg,$con)){
    die('Error: ' . mysql_error());
  }
  else {
  	echo "alert('修改成功')";
    header('Location: ../admin/category.php');
  }
?>