<?php
session_start();
include('db.php');
$del=$_GET["id"];

if(isset($del))
{
 $query = "DELETE FROM appointment WHERE id = $del";
 if(mysqli_query($mysqli, $query))
 {
  ?>
  <script>window.location = "../../viewappointments.php";</script>
  <?php
  
 }
}
?>
