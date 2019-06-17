<?php
session_start();
include('db.php');
$UIID=$_SESSION['IID'];

if(isset($_POST["e_institute"], $_POST["e_program"], $_POST["e_gpa"]))
{
 $e_institute =$_POST["e_institute"];
 $e_program =$_POST["e_program"];
 $e_gpa =$_POST["e_gpa"];
 $query = "INSERT INTO accedemic(refid, e_institute, e_program, e_gpa) VALUES('$UIID', '$e_institute', '$e_program', '$e_gpa')";
 if(mysqli_query($mysqli, $query))
 {
  echo 'Data Inserted';
 }
}
?>