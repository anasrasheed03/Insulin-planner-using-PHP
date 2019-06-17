<?php

if ($_SERVER['REQUEST_METHOD'] =='POST'){

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $bloodgroup = $_POST['bloodgroup'];
    $username=$firstName.$lastName.rand(10,100);
    require_once 'connect.php';
    
   
  $sql1 = "SELECT * FROM tbl_login WHERE email='$email'";
    $response = mysqli_query($conn, $sql1);
    $result1 = array();
    $result1['login'] = array();
    if ( mysqli_num_rows($response) !== 1 ) {
    $sql = "INSERT INTO `tbl_login`(username,password,email,role) VALUES('$username','$password','$email',2)";
    
    if ( mysqli_query($conn, $sql) && !empty($password) && !empty($email)) {
        
        $sql2 = "INSERT INTO `User`(firstName,lastName,email,dob,phone,`blood-group`) VALUES('$firstName','$lastName','$email','$dob','$phone','$bloodgroup')";
        
             if ( mysqli_query($conn, $sql2)) {
        $result["success"] = "1";
        $result["message"] = "Registration successful, please login to your account";

        echo json_encode($result);
        mysqli_close($conn);
            }
    } else {

        $result["success"] = "0";
        $result["message"] = "error in registration";

        echo json_encode($result);
        mysqli_close($conn);
    }
    }else{
        
        $result["success"] = "0";
        $result["message"] = "error! You're Already Registered with this email";

        echo json_encode($result);
        mysqli_close($conn);
    }
    
}

?>