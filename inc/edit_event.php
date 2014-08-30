<?php
  include "conn.php";
  $EditEvent = "UPDATE event SET
  category=$_POST[category],
  importance=$_POST[importance],
  EventDay='$_POST[EventDay]',
  EventTime='$_POST[EventTime]',
  EventPlace='$_POST[EventPlace]',
  title='$_POST[title]', 
  description='$_POST[description]', 
  OfficialSite='$_POST[OfficialSite]', 
  link_2='$_POST[link_2]', 
  link_3='$_POST[link_3]', 
  link_4='$_POST[link_4]', 
  link_5='$_POST[link_5]'
  WHERE id=$_POST[id]";
  if (!mysql_query($EditEvent,$con)){
    die('Error: ' . mysql_error());
  }
  else {
    header('Location: ../admin/event.php');
  }
?>