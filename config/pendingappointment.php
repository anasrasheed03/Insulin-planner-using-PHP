<?php
session_start();
include('db.php');
$del=$_GET["id"];

if(isset($del))
{
 $query = "UPDATE appointment SET status=1 WHERE id = $del";
 if(mysqli_query($mysqli, $query))
 {
  ?>
  <script>window.location = "../viewappointments.php";</script>
  <?php
  
 }
}
?>
