<?php
session_start();
include('db.php');
if(isset($_POST["id"]))
{
 $query = "DELETE FROM jobprofile WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($mysqli, $query))
 {
  echo 'Data Deleted';
 }
}
?>
