<?php
session_start();
include('db.php');
$del=$_GET["id"];
if(isset($del))
{
$query = "DELETE FROM `tbl_login` WHERE `email` =  '$del'";
$query1 = "DELETE FROM `doctor` WHERE `email`  = '$del'";
 if(mysqli_query($mysqli, $query1))
 {
     if(mysqli_query($mysqli, $query))
 {
      ?>
  <script>window.location = "../viewdoctors.php";</script>
  <?php
  }
  

 }
}
?>
