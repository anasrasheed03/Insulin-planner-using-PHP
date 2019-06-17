<?php
session_start();

include('config/db.php');
if(!isset($_SESSION["useraccess"])){
header("Location: login.php");
exit(); }

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
    <title>Dashboard Insulin Planner System</title>
    <!-- Custom CSS -->
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="assets/libs/morris.js/morris.css" rel="stylesheet">
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
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <div class="card-group">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg bg-danger">
                                        <i class="mdi mdi-account-multiple text-white"></i>
                                    </span>
                                </div>
                                <div>
                                    Total User
                                </div>
                                <div class="ml-auto">
                                    <h2 class="m-b-0 font-light">
                                      <?php
      
                                        $check_query="SELECT * FROM User";

                                                                if ($check_result=mysqli_query($mysqli,$check_query))
                                                                  {
                                                                  // Return the number of rows in result set
                                                                  $check_rowcount=mysqli_num_rows($check_result);
                                                                  echo $check_rowcount;   
                                                                  }
                                        ?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg btn-info">
                                        <i class="mdi mdi-account-convert text-white"></i>
                                    </span>
                                </div>
                                <div>
                                    Total Doctors
                                </div>
                                <div class="ml-auto">
                                    <h2 class="m-b-0 font-light">
                                        <?php
      
                                        $checkCS_query="SELECT * FROM doctor";

                                                                if ($checkCS_result=mysqli_query($mysqli,$checkCS_query))
                                                                  {
                                                                  // Return the number of rows in result set
                                                                  $checkCS_rowcount=mysqli_num_rows($checkCS_result);
                                                                  echo $checkCS_rowcount;   
                                                                  }
                                        ?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg bg-success">
                                        <i class="mdi mdi-account-convert text-white"></i>
                                    </span>
                                </div>
                                <div>
                                    Total Foods

                                </div>
                                <div class="ml-auto">
                                    <h2 class="m-b-0 font-light">
                                        <?php
      
                                        $checkSE_query="SELECT * FROM `diet-chart`";

                                                                if ($checkSE_result=mysqli_query($mysqli,$checkSE_query))
                                                                  {
                                                                  // Return the number of rows in result set
                                                                  $checkSE_rowcount=mysqli_num_rows($checkSE_result);
                                                                  echo $checkSE_rowcount;   
                                                                  }
                                        ?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg bg-warning">
                                        <i class="far fa-list-alt text-white"></i>
                                    </span>
                                </div>
                                <div>
                                    Total E-Books

                                </div>
                                <div class="ml-auto">
                                    <h2 class="m-b-0 font-light">
                                        <?php
                                        $checkEvent_query="SELECT * FROM pharma_login";

                                                                if ($checkEvent_result=mysqli_query($mysqli,$checkEvent_query))
                                                                  {
                                                                  // Return the number of rows in result set
                                                                  $checkEvent_rowcount=mysqli_num_rows($checkEvent_result);
                                                                  echo $checkEvent_rowcount;   
                                                                  }
                                        ?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <!-- Column -->


                </div>
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Top Selliing Products -->
                <!-- ============================================================== -->
                <div class="row"> 
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Recent E-Books</h4>
                                        
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">

                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">Title</th>
                                            <th class="border-top-0">Short Description</th>
                                            <th class="border-top-0">View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                            $search_query="SELECT * FROM medi ORDER BY id ASC";

                                               $view_veh_result = $mysqli->query($search_query);
                                               $sr=0;

                                                 if ($view_veh_result->num_rows > 0) {
                                                                                            // output data of each row
                                                    while($row = $view_veh_result->fetch_assoc()) {

                                                    $med_name = $row['med_name'];
                                                    $med_price = $row['med_price'];
                                                    $med_generic = $row['med_generic'];
                                                    $alt_med = $row['alt_med'];
                                                    $alt_med_price = $row['alt_med_price'];
                                                    $alt_med_generic = $row['alt_med_generic'];

                                                                                                

                                            ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16"><?php echo $med_name;?></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo $med_price; ?></td>
                                            <td><?php echo $med_generic; ?></td>
                                            </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    
                    
                    <div class="row"> 
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Recent Diet Foods</h4>
                                        
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">

                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">Food Name</th>
                                            <th class="border-top-0">Quantity</th>
                                            <th class="border-top-0">Calorie</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                            $search_query="SELECT * FROM `diet-chart` ORDER BY id ASC limit 5";

                                               $view_veh_result = $mysqli->query($search_query);
                                               $sr=0;

                                                 if ($view_veh_result->num_rows > 0) {
                                                                                            // output data of each row
                                                    while($row = $view_veh_result->fetch_assoc()) {

                                                    $food_name = $row['foodName'];
                                                    $food_quantity = $row['foodQuantity'];
                                                    $food_calorie = $row['foodCalorie'];

                                                                                                

                                            ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16"><?php echo $food_name;?></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo $food_quantity; ?></td>
                                            <td><?php echo $food_calorie; ?></td>
                                            </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    
                    
                
                <div class="row"> 
                    <?php
                        if($_SESSION["useraccess"]==0){
                        ?>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Recent Registered Doctors</h4>
                                        
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">

                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">First Name</th>
                                            <th class="border-top-0">Last Name</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Phone</th>
                                            <th class="border-top-0">Hospital</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                            $search_query="select tbl_login.email,tbl_login.username,tbl_login.datecreated,doctor.firstName,doctor.lastName,doctor.phone,doctor.hospital from tbl_login INNER JOIN doctor where tbl_login.email = doctor.email ORDER by tbl_login.id ASC";

                                               $view_veh_result = $mysqli->query($search_query);
                                               $sr=0;

                                                 if ($view_veh_result->num_rows > 0) {
                                                                                            // output data of each row
                                                    while($row = $view_veh_result->fetch_assoc()) {

                                                    $f_name = $row['firstName'];
                                                    $l_name = $row['lastName'];
                                                    $email = $row['email'];
                                                    $phone = $row['phone'];
                                                    $hospital = $row['hospital'];

                                                                                                

                                            ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16"><?php echo $f_name;?></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo $l_name; ?></td>
                                            <td><?php echo $email; ?></td>
                                            <td><?php echo $phone; ?></td>
                                            <td><?php echo $hospital; ?></td>
                                            </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php
                                        
                                        }
                                        ?>
                </div>
                <div class="row"> 
                    <?php
                        if($_SESSION["useraccess"]==0){
                        ?>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Recent Registered Users</h4>
                                        
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">

                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">First Name</th>
                                            <th class="border-top-0">Last Name</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Phone</th>
                                            <th class="border-top-0">BloodGroup</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                            $search_query="select tbl_login.email,tbl_login.username,tbl_login.datecreated,User.firstName,User.lastName,User.phone,User.`blood-group` from tbl_login INNER JOIN User where tbl_login.email = User.email ORDER by tbl_login.id ASC";

                                               $view_veh_result = $mysqli->query($search_query);
                                               $sr=0;

                                                 if ($view_veh_result->num_rows > 0) {
                                                                                            // output data of each row
                                                    while($row = $view_veh_result->fetch_assoc()) {

                                                    $f_name = $row['firstName'];
                                                    $l_name = $row['lastName'];
                                                    $blood_group = $row['blood-group'];
                                                    $email = $row['email'];
                                                    $phone = $row['phone'];

                                                                                                

                                            ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16"><?php echo $f_name;?></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo $l_name; ?></td>
                                            <td><?php echo $email; ?></td>
                                            <td><?php echo $phone; ?></td>
                                            <td><?php echo $blood_group; ?></td>
                                            </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php
                                        
                                        }
                                        ?>
                </div>
                
               </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Insulin Planner System
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
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 charts -->
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <!--chartjs -->
    <script src="assets/libs/raphael/raphael.min.js"></script>
    <script src="assets/libs/morris.js/morris.min.js"></script>

    <script src="dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>