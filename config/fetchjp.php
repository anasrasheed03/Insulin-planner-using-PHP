<?php
//fetch.php
session_start();
include('db.php');
$UIID=$_SESSION['IID'];
$columns = array('e_institute', 'e_program', 'e_gpa');

$query = "SELECT * FROM jobprofile WHERE refid='$UIID' ";

$number_filter_row = mysqli_num_rows(mysqli_query($mysqli, $query));

$result = mysqli_query($mysqli, $query);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div contenteditable class="update1" data-id="'.$row["id"].'" data-column="e_pcompany">' . $row["e_pcompany"] . '</div>';
 $sub_array[] = '<div contenteditable class="update1" data-id="'.$row["id"].'" data-column="e_psalary">' . $row["e_psalary"] . '</div>';
 $sub_array[] = '<div contenteditable class="update1" data-id="'.$row["id"].'" data-column="e_pnoj">' . $row["e_pnoj"] . '</div>';
 $sub_array[] = '<button type="button" name="delete1" class="btn btn-danger btn-xs delete1" id="'.$row["id"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($mysqli)
{

$UIID=$_SESSION['IID'];
 $query = "SELECT * FROM jobprofile WHERE refid='$UIID'";
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
