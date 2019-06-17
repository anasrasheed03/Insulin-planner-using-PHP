<?php
//fetch.php
session_start();
include('db.php');
$UIID=$_SESSION['IID'];
$columns = array('e_institute', 'e_program', 'e_gpa');

$query = "SELECT * FROM accedemic WHERE refid='$UIID' ";

$number_filter_row = mysqli_num_rows(mysqli_query($mysqli, $query));

$result = mysqli_query($mysqli, $query);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="e_institute">' . $row["e_institute"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="e_program">' . $row["e_program"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="e_gpa">' . $row["e_gpa"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($mysqli)
{

$UIID=$_SESSION['IID'];
 $query = "SELECT * FROM accedemic WHERE refid='$UIID'";
 $result = mysqli_query($mysqli, $query);
 return mysqli_num_rows($result);
 echo $UIID;
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($mysqli),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>
