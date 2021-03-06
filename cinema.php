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
    <title>Cinema</title>
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="night.php">Night</a></li>
                        <li><a href="light.php">Light</a></li>
                        <li class="active"><a href="cinema.php">Cinema</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> <?php echo $_SESSION['username'];?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--Detail-->

    <div class="container-fluid p-6 my-3" style="font-family: DilleniaUPC;">
        <div class="row grid-center movie-grid">
            <div class="col-sm-12">
                <p class="head-text">Coming Soon</p>
                <p>หนังที่น่าดู ที่กำลังเข้าฉายเร็วๆนี้</p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/jexMbid3TMk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="container-fluid p-6 my-3" style="font-family: DilleniaUPC;">
        <div class="row grid-center movie-grid">
            <div class="col-sm-12">
                <p class="head-text">แนะนำโรง</p>
                <p>เป็นโรงหนัง imax ดูแล้วสนุก เพิ่มอรรถรสของการดูหนัง แนะนำ!!!</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.5432726270865!2d100.53325725069796!3d13.746079101081587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29ecd64a6ac41%3A0xced5edc25d6f241a!2sIMAX!5e0!3m2!1sth!2sth!4v1617961609432!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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