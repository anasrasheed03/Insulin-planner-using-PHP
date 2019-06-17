<?php
session_start();
include('db.php');
$del=$_GET["id"];

if(isset($del))
{
 $query = "DELETE FROM doc_login WHERE id = $del";
 if(mysqli_query($mysqli, $query))
 {
  ?>
  <script>window.location = "../index.php";</script>
  <?php
  
 }
}
?>
