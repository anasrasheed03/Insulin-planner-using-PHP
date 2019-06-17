<?php
session_start();
include('db.php');
$UIID=$_SESSION['IID'];

if(isset($_POST["e_pcompany"], $_POST["e_psalary"], $_POST["e_pnoj"]))
{
 $e_pcompany =$_POST["e_pcompany"];
 $e_psalary =$_POST["e_psalary"];
 $e_pnoj =$_POST["e_pnoj"];
 $query = "INSERT INTO jobprofile(refid, e_pcompany, e_psalary, e_pnoj) VALUES('$UIID', '$e_pcompany', '$e_psalary', '$e_pnoj')";
 if(mysqli_query($mysqli, $query))
 {
  echo 'Data Inserted';
 }
}
?>