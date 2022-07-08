<?php

include 'admin/functions.php';
session_start();
$conn = mysqli_connect("localhost","root","","trashbank");
$dnt=date("m/d/Y, h:s A"); 

$_POST['datereceived']=$dnt;

if (isset($_POST["submit"])) { 
     
     if(addmessage($_POST) > 0){
          echo "<script>
alert('Message Sent');
          </script>
          ";
          
     } else {echo "<script>
          alert('Failed When Sending The Message');
                    </script>;"
          ;}
}
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Bank Sampah | Bank Sampah</title>
    <link rel="shortcut icon" href="assets/images/logo.png" type="image">

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <style>
    .welcome-area {
        overflow: hidden;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: url(assets/images/banner-bg-new.png);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        height: 100vh;
    }
    </style>
</head>

<body>

    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.1s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">

                        <a href="index.html" class="logo">
                            <h4 style="color:lightgreen"> Bank Sampah</h4>
                        </a>

                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#Home" class="active">Home</a></li>
                            <!-- <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"><a href="#portfolio">Things We Do</a></li> -->
                            <li class="scroll-to-section"><a href="#contact">Contact Us</a></li>
                            <li class="scroll-to-section"><a href="admin/login.php">Login</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>

                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="welcome-area" id="Home">

        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1 style="color:black">Selamat Datang di <br><strong>Bank Sampah</strong></h1>
                        <p style="color:black">Perkaya diri anda dengan Sampah</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <br><br>

    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <div class="section-heading">
                        <h2>Jika anda memiliki pertanyaan, kita tidak keberatan untuk merespon.</h2>
                        <p>Anda bisa mengisi form di samping ini bila memiliki pertanyaan</p>
                        <div class="phone-info">
                            <h4>atau, anda bisa menghubungi saya di : <span>&nbsp&nbsp&nbsp<img
                                        src="assets/images/phoneicon.png" style="width:5%;height:5%;"></i>&nbsp&nbsp <a
                                        href="#">085155412128</a></span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="text" name="mname" id="name" placeholder="Nama" autocomplete="off"
                                        required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="memail" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Email" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" type="text" class="form-control" id="message"
                                        placeholder="Kritik dan Saran" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" name="submit" class="main-button ">Kirim</button>
                                </fieldset>
                            </div>
                        </div>
                        <div class="contact-dec">
                            <img src="assets/images/contact-decoration.png" alt="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
                    <p><a rel="nofollow" href="admin/login.php" style="color:black;">©</a> ~2022 Baskara Co.~
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/templatemo-custom.js"></script>

</body>

</html>