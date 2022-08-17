<?php
    include('config.php');
    session_start();
    /*$user_check=$_session['email'];
    $ses_sql=mysqli_query($conn,"select email from users where email='$user_check'");
    $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    $login_session=$row['email'];
    if(!isset($_SESSION['login_user'])){
        header("location: athentication/login.php");
        die();
    }
    <?php } else if(isset($_SESSION['username'])){ ?>
            <div id="login-dropdown">
            <button><?php echo $_SESSION['username'] ?></button>
            <div id="dropdown-content">
                <a href="changepwd.php">Change password</a>
                <a href="athentication/logout.php">Logout</a>
            </div>
        </div>
        <?php } ?>*/
?>