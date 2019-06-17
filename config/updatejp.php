<?php
session_start();
include('db.php');
$UIID=$_SESSION['IID'];

if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($mysqli, $_POST["value"]);
 $query = "UPDATE jobprofile SET ".$_POST["column_name"]."='".$value."' WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($mysqli, $query))
 {
  echo 'Data Updated';
 }
}
?>