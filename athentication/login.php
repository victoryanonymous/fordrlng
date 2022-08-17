<?php 
session_start();
include "../config.php";
$message="";

if($_SERVER["REQUEST_METHOD"]=="POST") {
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pwd = mysqli_real_escape_string($conn,$_POST['password']);
    $sql="SELECT email FROM users WHERE email='$email' and password='$pwd'";
    $result=mysqli_query($conn,$sql);
    $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
    //$active=$row['email'];
    $count= mysqli_num_rows($result);
    if($count==1){
        //session_register("email");
        $_SESSION['login_user']=$email;
        header("location:../WelCome.php");
    }else{
        $message="Your Login Name or Password is invalid";
    }
    /*if($email!="" && $pwd!="") {
        $sql_query = "SELECT count(*) as UserCount FROM users WHERE email = '$email';";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['UserCount'];
        if($count==1) {
            $sql_query = "SELECT name as UserName,email as UserEmail,password as PassWord FROM users WHERE email = '$email';";
            $result = mysqli_query($conn,$sql_query);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            if(password_verify($pwd,$row['PassWord'])==true) {
                $_SESSION['username'] = $row['UserName'];
                $_SESSION['useremail'] = $row['UserEmail'];
                header('location:../index.php');
            }
            else {
                $message="Username or password did not match";
            } 
        }
        else {
            $message="Username or password did not match";
        }
    }
    else {
        $message="Username or password not entered";
    }*/
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login For Wishes</title>
    <link href="../external.css" rel="stylesheet" />
    <style>
         body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; margin-top: 20px; margin-left: auto; margin-right: auto; border: 2px solid grey; border-radius: 20px;}
        .help-block { color:red;}

    </style>
</head>
<body id="head">
    <div id="header">
        <h1>This is For You</h1>
        <p>..Open Only with given inputs otherwise it will not open..</p>
        <div id="login-dropdown">
            <button>Login/Register</button>
            <div id="dropdown-content">
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            </div>
        </div>
        <div id="menubar">
            <h2>Fully Secure By Anonymous</h2>
        </div>
    </div>
    <div class="wrapper">
        <h2>Login</h2>
        <h4>Please fill in your credentials to login.</h4>
        <form action="" method="post">
            <span class="help-block"><?php echo $message; ?></span>
            <div class="form-group">
                <label>Emaill Address</label>
                <input type="email" name="email" class="form-control">
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login" name="submit">
            </div>
            <h5>Don't have an account? <a href="register.php">Sign up now</a>.</h5>
        </form>
    </div>
</body>
</html>