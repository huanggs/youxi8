<?php
  include "conn.php";
  $create_ctn = "INSERT INTO content
  (category, importance, CreateDate, EventDay, EventTime, EventPlace, title, description, link_1, link_2, link_3, link_4, link_5) 
  VALUES 
  ('$_POST[category]', '$_POST[importance]', now(), '$_POST[EventDay]', '$_POST[EventTime]', '$_POST[EventPlace]', '$_POST[title]', '$_POST[description]', '$_POST[link_1]', '$_POST[link_2]', '$_POST[link_3]', '$_POST[link_4]', '$_POST[link_5]')";
  if (!mysql_query($create_ctn,$con)){
    die('Error: ' . mysql_error());
  }
  else {
    header('Location: ../admin/create.php');
  }
?>