
<?php
include('config/db.php');

if (isset($_POST['submit'])) {
    $f_name=$_POST['fname'];
    $l_name=$_POST['lname'];
    $password=$_POST['pasw'];
    $email=$_POST['email'];
    $phone_number=$_POST['phone_number'];
    $hospital=$_POST['hospital'];
    $username=$f_name.$l_name.rand(10,100);
    $specialization=$_POST['specialization'];   
    

            $veh_query = "INSERT INTO tbl_login(username,password,email,role) VALUES ('$username','$password','$email',1)";
            $veh_query1 = "INSERT INTO `doctor`(firstName,lastName,email,hospital,phone,specialization) VALUES('$f_name','$l_name','$email','$hospital','$phone_number','$specialization')";
            
            if ($mysqli->query($veh_query) == TRUE) {
                
                if ($mysqli->query($veh_query1) == TRUE) {

                             echo "<script>window.location = 'dashboard.php';</script>";;
                }                               
                
            }
                else
                {
                    echo "<script>alert('Data not inserted');</script>";
                }
            }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Add Doctor - Insulin Planner System</title>
    <!-- This page plugin CSS -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
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
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php 

                include ("config/header.php");

            ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        <!-- SIDEBAR -->
    <?php 

                include ("config/sidebar.php");

            ?>

    <!-- SIDEBAR -->
        
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Add New Doctor</h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="dashboard.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Add New Doctor</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- File export -->
                <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal m-t-20" method="POST"  enctype="multipart/form-data">
                                <div class="form-group row ">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" name="fname" id="firstname" type="text" required=" " placeholder="Enter First Name">
                                        <div id="msg" class=""></div>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" name="lname" id="lastname" type="text" required=" " placeholder="Enter last Name">
                                        <div id="msg" class=""></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" id="email" name="email" type="text" required=" " placeholder="Email">
                                        <div id="msg1" class=""></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" name="pasw" type="password" required=" " placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" id="phone-number" name="phone_number" type="text" required=" " placeholder="Enter Phone Number">
                                        <div id="msg1" class=""></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" id="hospital" name="hospital" type="text" required=" " placeholder="Enter the hospital">
                                        <div id="msg1" class=""></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" id="specialization" name="specialization" type="text" required=" " placeholder="Enter the Specialization">
                                        <div id="msg1" class=""></div>
                                    </div>
                                </div>
                                
                                <div class="form-group text-center ">
                                    <div class="col-xs-12 p-b-20 ">
                                        <button class="btn btn-block btn-lg btn-info " id="submit" name="submit" type="submit ">Register Doctor</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                
                
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by AFLS
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    
    


    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="dist/js/app.min.js"></script>
    <script src="dist/js/app.init.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page plugins -->
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-advanced.init.js"></script>
    <script>
    $('[data-toggle="tooltip "]').tooltip();
    $(".preloader ").fadeOut();
    </script>
    <script type="text/javascript">
        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
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
                    url: "config/validate.php",
                    data: {username: uname},
                    type: "POST",
                    success: function(data) {
                        if(data > '0') {
                            $("#msg").html('<span class="text-danger">Username Already Registered!</span>');
                            $("#submit").attr("disabled", true);
                        } else {
                            $("#msg").html('<span class="text-success">Username available!</span>');
                            $("#submit").attr("disabled", false);
                        }
                    }
                });
            }
        });
        $("#usermail").blur(function(e) {
            var uname = $(this).val();
            if (uname == "")
            {
                $("#msg1").html("");
                $("#submit").attr("disabled", true);
            }
            else
            {
                $("#msg1").html("checking...");
                $.ajax({
                    url: "config/validateemail.php",
                    data: {username: uname},
                    type: "POST",
                    success: function(data) {
                        if(data > '0') {
                            $("#msg1").html('<span class="text-danger">Email Already Registered!</span>');
                            $("#submit").attr("disabled", true);
                        } else {
                            $("#msg1").html('');
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