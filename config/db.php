<?php  
    date_default_timezone_set("Asia/Karachi");
    $dbhost = 'localhost';
    $dbuser = 'logicalh_farwa';
    $dbpass = 'Racespeed@#!@';
    $dbname = 'logicalh_farwa';
    
    //Connect
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if (mysqli_connect_errno()) {
        printf("MySQLi connection failed: ", mysqli_connect_error($mysqli));
        exit();
    }

    // Change character set to utf8
    if (!$mysqli->set_charset('utf8')) {
        printf('Error loading character set utf8: %s\n', $mysqli>error);
        
    }

?>