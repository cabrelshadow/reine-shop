<?php 
session_start();
include('../materiels/db.php');
 $_SESSION=array();
 session_destroy();
 header("location:../src/admin_login.php");


 ?>


