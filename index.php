<?php 
  include "config.php";
  include "session.php";

  if(isset($_GET['logout'])) {
    session_destroy();
    header('Location:index.php');
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishes</title>
    <link href="external.css" rel="stylesheet" />
</head>
<body id="index">
    <div id="head">
    </div>
    <div id="header">
        <h1>This is For You</h1>
        <p>..Open Only with given inputs otherwise it will not open..</p>
        <?php if(!isset($_SESSION['username'])) { ?>
            <div id="login-dropdown">
            <button>Login/Register</button>
            <div id="dropdown-content">
                <a href="athentication/login.php">Login</a>
                <a href="athentication/register.php">Register</a>
            </div>
        </div> <?php } ?>
        <div id="menubar">
            <h2>Fully Secure By Anonymous</h2>
        </div>
        <div id="image-section">
            <img src="assets/images/image1.png"/>
        </div>
    </div>
</body>
</html>