<?php
session_start();
if (!isset($_SESSION['loggedin'])) { // เช็คว่า login หรือยัง)
	header('Location:index.html'); // 
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Favorite</title>
    <link rel="icon" type="images/png" href="images/web.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>

<body>
    <header class="navbox">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand">My Favorite</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="night.php">Night</a></li>
                        <li><a href="light.php">Light</a></li>
                        <li><a href="cinema.php">Cinema</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> <?php echo $_SESSION['username'];?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--Detail-->

    <div class="container p-6 my-3" style="font-family: DilleniaUPC;">
        <div class="row">
            <div class="col-sm-12 grid-center">
                <p class="head-text">MY FAVORITE</p>
                <img src="images/profile.jpg" class="profile">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 grid-center">
                <p class="head-detail">Web จัดทำโดย</p>
                <p>ชื่อ: นายปกรณ์ คุณเลี้ยง</p>
                <p>อายุ: 21</p>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-12 grid-center">
                <p class="head-detail">จัดทำขึ้นเพื่อ</p>
                <p>แนะนำหนังต่างๆ ที่น่าสนใจและที่ตนเองชื่นชอบ</p>
                <p>ทั้งในและนอกประเทศ</p>
            </div>
        </div>
    </div>


    <!--footer-->
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>ติดตามผมได้ที่</h3>
                        <a href="https://www.facebook.com/pakorn.khunleang/" target="_blank"><img
                                src="images/facebook.png" class="icon-footer"></a>
                        <a href=" https://www.instagram.com/newtonpakorn/" target="_blank"><img
                                src="images/instagram.png" class="icon-footer"></a>
                    </div>
                    <div class="col-sm-6">
                        <h3>My Web</h3><br>
                        <h4>เป็นเว็ปที่จัดทำขึ้นเพื่อ แนะนำหนังต่างๆที่ตัวเองดูแล้วชอบ</h4>
                        <p style="font-size: 20px;">"เพราะหนังที่ดีของแต่ละคนไม่เหมือนกัน"</p>
                    </div>
                </div>
                <div class="row" style="padding: -10px 0px 0px 0px;">
                    <hr>
                    <div class="col-sm-12 grid-center">
                        <p class="p-footer">My Favorite © 2020</p>
                    </div>
                </div>
        </footer>
    </div>
</body>