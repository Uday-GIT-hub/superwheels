<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $email = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logo.png">

    <title>Super wheels</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

   
</head>

<body>
    <div class="brand">Super Wheels<img src="img/img25.png" width="13%"></div>
    <div class="address-bar">Oppisite ESI Hospital | Mills Colony, WGL 506013 | 9996776999</div>  

    
    <!-- Navigation -->
    <?php require_once 'nav.php'?>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item">
                                <span><h2>MOdel X</h2></span>
                                <img class="img-responsive img-full" src="img/img4.jpg" alt="">
                            </div>
                            <div class="item">
                                <span><h2>MOdel P</h2></span>
                                <img class="img-responsive img-full" src="img/img6.jpg" alt="">
                            </div>
                            <div class="item">
                                <span><h2>Model S</h2></span>
                                <img class="img-responsive img-full" src="img/img1.jpg" alt="">
                            </div>
                            <div class="item active">
                                <span><h2>MOdel T</h2></span>
                                <img class="img-responsive img-full" src="img/img9.jpg" alt="">
                            </div>
                            <div class="item">
                                <span><h2>MOdel R</h2></span>
                                <img class="img-responsive img-full" src="img/img3.jpg" alt="">
                            </div>
                        </div>
                        
                         <!-- Left and Right Control Links -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        </a>
                      
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="box">
                <hr>
                <h1 class="intro-text text-center">
                    <strong>All-New Interior</strong>
                </h1>
                <hr>
                <div class="mySlides1"> 
                    <div class="col-lg-7 ">
                        <img class="img-responsive img-left" src="img/img17.png" alt="">
                    </div>
                    <div class="col-lg-5">
                        <br>
                        <h4 class="heading"><strong>Game from Anywhere</strong></h4>
                        <p>Up to 10 teraflops of processing power enables in-car gaming on-par with today’s newest consoles. Wireless controller compatibility lets you game from any seat.</p>
                    </div>
                </div>
                <div class="mySlides1">
                   
                    <div class="col-lg-7 img" >
                        <img class="img-responsive img-left" src="img/img18.png" alt="">
                    </div>
                    <div class="col-lg-5 par">
                        <br>
                        <h4 class="heading"><strong>Stay Connected</strong></h4>
                        <p>Multi-device Bluetooth, wireless and USB-C charging for every passenger, with enough power to fast-charge your tablets and laptop.</p>
                    </div> 

                </div>
                <div class="mySlides1"> 
                    <div class="col-lg-7">
                        <img class="img-responsive img-left width"  src="img/img21.jpg" alt="">
                    </div>
                    <div class="col-lg-5">
                        <br>
                        <h4 class="heading"><strong>Redesigned Second Row</strong></h4>
                        <p>Seating for three adults, with extra legroom, headroom and a stowable armrest with integrated storage and wireless charging.</p>
                    </div>
                </div>
                <div class="mySlides1"> 
                    <div class="col-lg-7 img" >
                        <img class="img-responsive img-left" src="img/img20.png" alt="">
                    </div>
                    <div class="col-lg-5">
                        <br>
                        <h4 class="heading"><strong>Real Storage</strong></h4>
                        <p>With front and rear trunks and fold-flat seats, Model S is a luxury car where you can fit your bike without taking the wheel off, and your luggage too.

                        </p>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row">
            <div class="box">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>Driving Dyanmics</strong>
                </h2>
                <hr>
                <div class="mySlides"> 
                    <div class="col-lg-7">
                        <img class="img-responsive img-left"  id="img" src="img/img13.png" alt="">
                    </div>
                    <div class="col-lg-5">
                        <hr class="visible-xs">
                        <h4 class="heading"><strong>4 Wheel Stiring</strong></h4>
                        <p id="para">In the new Avenger 960T, the exceptional combination between the active steering system (Superwheels Dynamic Steering) and the rear steering system (Superwheels Rear-Wheel Steering) delivers dynamic performance that enhances agility at low speed while optimizing control and stability at high speed..</p>
                    </div>
                </div>
                <div class="mySlides"> 
                    <div class="col-lg-7">
                        <img class="img-responsive img-left"  id="img" src="img/img14.png" alt="">
                    </div>
                    <div class="col-lg-5">
                        <hr class="visible-xs">
                        <h4 class="heading"><strong>4 Active Suspension</strong></h4>
                        <p id="para">With its magnetorheological front and rear shock absorbers and pushrod suspension system—able to adapt the car’s dynamic behavior to the road conditions and selected driving mode—the Avenger 960T Ultimae delivers extraordinary response in every dynamic condition.</p>
                    </div>
                </div>
                <div class="mySlides"> 
                    <div class="col-lg-7">
                        <img class="img-responsive img-left"  id="img" src="img/img16.png" alt="">
                    </div>
                    <div class="col-lg-5">
                        <hr class="visible-xs">
                        <h4 class="heading"><strong>4 wheel Drive</strong></h4>
                        <p id="para">Optimized to work specifically with the new active systems on board—Rear-Wheel Steering in particular—the all-wheel drive system ensures high performance and driving pleasure in poor grip situations..</p>
                    </div>
                </div>
                <div class="mySlides"> 
                    <div class="col-lg-7">
                        <img class="img-responsive img-left"  id="img" src="img/img15.png" alt="">
                    </div>
                    <div class="col-lg-5">
                        <hr class="visible-xs">
                        <h4 class="heading"><strong>Engine</strong></h4>
                        <p id="para"> The heart of the Avenger 960T Ultimae is the most powerful standard-production naturally aspirated V12 in Super Wheels history. </p>
                    </div>
                </div>
                <button class="prev" onclick="plusSlides(-1)"> 
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                </button>
                <button class="next" onclick="plusSlides(1)">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                </button>
            </div>
            
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; SUPER WHEELS 2021</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";

    
}
    </script>

</body>

</html>
<?php

} else {
    header("location:login.php ");
}
?>
