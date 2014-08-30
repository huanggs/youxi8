<?php
  include "conn.php";
  $DelEvent = "UPDATE event SET Visible=0 WHERE id=$_POST[id]";
  if (!mysql_query($DelEvent,$con)){
    die('Error: ' . mysql_error());
  }
  else {
    header('Location: ../admin/event.php');
  }
?>