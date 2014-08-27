<?php
  include "conn.php";
  $create_catg = "INSERT INTO category
  (CatgName, CatgLv, CatgFatherId)
  VALUES
  ('$_POST[CatgName]', '$_POST[CatgLv]', '$_POST[CatgFatherId]')";
  if (!mysql_query($create_catg,$con)){
    die('Error: ' . mysql_error());
  }
  else {
    header('Location: ../admin/category.php');
  }
?>