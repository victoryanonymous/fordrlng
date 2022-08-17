<?php
    function user_exists($username){
        $query=mysqli_query(mysqli_connect($db_server,$db_username,$db_password,$db_database),"SELECT COUNT('username') from users where username='$username'");
        return (mysqli_fetch_array($query));
    }
?>