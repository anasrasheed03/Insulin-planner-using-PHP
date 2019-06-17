
<?php
session_start();
include('db.php');
    $post_id = $_GET['id'];

                $veh_query = $mysqli->query("UPDATE  tbl_login SET 
                                                            
                                                                status='1'

                                                                WHERE id='$post_id'");
                            
                            if ($veh_query == TRUE) {
                                                          
                                   
    header('Location: ' . $_SERVER['HTTP_REFERER']);


                                } else {
                                
                                    echo "<script>alert('Error')</script>";
                                                          
                                }
?>