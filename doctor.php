<?php 
     
    date_default_timezone_set("Asia/Karachi");
    $dbhost = 'localhost';
    $dbuser = 'logicalh_haya';
    $dbpass = 'Racespeed@#!@';
    $dbname = 'logicalh_haya';

    //Connect
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if (mysqli_connect_errno()) {
        printf("MySQLi connection failed: ", mysqli_connect_error());
        exit();
    }

    // Change character set to utf8
    if (!$mysqli->set_charset('utf8')) {
        printf('Error loading character set utf8: %s\n', $mysqli>error);
    }


if (isset($_POST['submit'])){
                                            // removes backslashes
                                         $email = stripslashes($_REQUEST['uname']);
                                            //escapes special characters in a string
                                        $email = mysqli_real_escape_string($mysqli,$email);
                                        $password = stripslashes($_REQUEST['upass']);
                                        $password = mysqli_real_escape_string($mysqli,$password);
                                        
                                        
                                        //Checking is user existing in the database or not

                                        $query = "SELECT * FROM doc_login where email='$email'";
                                        $result = mysqli_query($mysqli,$query);
                                        $rows = mysqli_num_rows($result);
                                        if($rows==1){

                                        while($row = $result->fetch_assoc()) {
                                            $setname = $row['doc_name'];
                                            $setrole = $row['role'];
                                            $uid = $row['id'];
                                            $email = $row['email'];                                        }
                                        
                                        
                                          session_start();
                                            $_SESSION['uid']=$uid;
                                            $_SESSION['setname']=$setname;
                                            $_SESSION['email']=$email;
                                            $_SESSION['password']=$password;
                                            $_SESSION["useraccess"]=$setrole;
                                            
                                        header("Location: index.php");  
                                            
                                        
                                        
                                        
                                    }


                                        else{
                                        echo "<div class='form'>
                                    <h3>Username/password is incorrect.</h3>
                                    <br/>Click here to <a href='index.php'>Login</a></div>";
                                        }
                                        }else{



?>
<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Login - Pharma Doc Info System</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(/portal2/assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box">
                <div id="loginform">
                    <div class="logo">
                        <span class="db"><img src="http://haya.logicalhive.com/images/logo.png" alt="logo" width="45" height="45" /></span>
                        <span class="db"><h3>Pharma Doc Info System</h3></span>
                        <h5 class="font-medium m-b-20">Doctor Sign In</h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            
                            <form class="form-horizontal m-t-20"  method="POST">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Email" id="username" name="uname" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                
                                    <div id="msg" class=""></div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" placeholder="Password" name="upass" aria-label="Password" aria-describedby="basic-addon1">
                                </div>
                                
                                <div class="form-group text-center">
                                    <div class="col-xs-12 p-b-20">
                                        <button class="btn btn-block btn-lg btn-info" type="submit" value="login" id="submit" name="submit" >Log In</button>
                                    </div>
                                </div>
                                
                            </form>
                            <?php
                
                             }

                              ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $("#username").blur(function(e) {
            var uname = $(this).val();
            if (uname == "")
            {
                $("#msg").html("");
                $("#submit").attr("disabled", true);
            }
            else
            {
                $("#msg").html("checking...");
                $.ajax({
                    url: "config/validateauth.php",
                    data: {username: uname},
                    type: "POST",
                    success: function(data) {
                        if(data > '0') {
                            $("#msg").html('<span class="text-danger">Email not verified yet!</span>');
                            $("#submit").attr("disabled", true);
                        } else {
                            $("#msg").html('');
                            $("#submit").attr("disabled", false);
                        }
                    }
                });
            }
        });
    });
    </script>
</body>

</html>