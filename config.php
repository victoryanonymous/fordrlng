<?php 
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "skillvertex_wd";
    $conn = mysqli_connect($db_server,$db_username,$db_password,$db_database);
    if(!$conn) {
        echo "Database connection error",mysqli_connect_error();
    }
?>