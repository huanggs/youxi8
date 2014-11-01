<?php
session_start();
include("inc/conn.php");
$username=$_SESSION["UserName"];
header("location:index.php");
session_unset();
session_destroy();
?>