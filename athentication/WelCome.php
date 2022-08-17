<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WelCome Page</title>
    <link href="external.css" rel="stylesheet" />
    <style>
        .mySlides {display:none;}
    </style>
</head>
<body id="index">
    <div id="head">
    </div>
    <div id="header">
        <h1>This is For You</h1>
        <p>..Open Only with given inputs otherwise it will not open..</p>
        <?php if(!isset($_SESSION['username'])) { ?>
            <div id="login-dropdown">
            <button>Signing Off</button>
            <div id="dropdown-content">
                <a href="logout.php">Log Out</a>
            </div>
        </div> <?php } ?>
        <div id="menubar">
            <h2>Fully Secure By Anonymous</h2>
        </div>
        <div id="wishes">
            <h3>Happy Birthday To You Darling</h3>
            <p class="para">manam inthakanna akkuva pettodhu malli bagodhu</p>
        </div>
    <div id="animation" style="max-width:500px">
        <img class="mySlides" src="assets/images/img1.jpg" style="width:100%">
        <img class="mySlides" src="assets/images/img2.jpg" style="width:100%">
        <img class="mySlides" src="assets/images/img3.jpg" style="width:100%">
        <img class="mySlides" src="assets/images/img4.webp" style="width:100%">
    </div>
    </div>
    <script>
    var myIndex = 0;
    carousel();
    function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 3000); // Change image every 3 seconds
    }
    </script>
</body>
</html>