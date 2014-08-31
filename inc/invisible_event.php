<?php
  include "conn.php";
  $QuryEvent=mysql_query("SELECT * FROM event WHERE id=$_GET[id]");
  $ArrayEvent=mysql_fetch_array($QuryEvent);
  if ($ArrayEvent[Visible]==1){
    $DelEvent = "UPDATE event SET Visible=0 WHERE id=$_GET[id]";
  } elseif($ArrayEvent[Visible]==0) {
    $DelEvent = "UPDATE event SET Visible=1 WHERE id=$_GET[id]";
  }
  if (!mysql_query($DelEvent,$con)){
    die('Error: ' . mysql_error());
  }
  else {
    header('Location: ../admin/event.php');
  }
?>