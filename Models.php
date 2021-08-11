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

    <title>Models - SUPER WHEELS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Super Wheels<img src="img/img25.png" width="13%"></div>
    <div class="address-bar">Oppisite ESI Hospital | Mills Colony, WGL 506013 | 9996776999</div>  

    <!-- Navigation -->
    <?php require_once 'nav.php'?>
    
    <div class=container>
        <div class="row">
            <button class="tablink" onclick="page('ModelX', this, '#82ccdd')" id="defaultOpen">Model X</button>
            <button class="tablink" onclick="page('ModelP', this, '#f6e58d')">Model P</button>
            <button class="tablink" onclick="page('ModelT', this, '#fad390')">Model T</button>
            <button class="tablink" onclick="page('ModelS', this, '#b8e994')">Model S</button>
            <button class="tablink" onclick="page('ModelR', this, '#fcc598')">Model R</button>
        </div>

        <div class="row">
            <div class="tabcontent" id="ModelX">
                
                <div class="col-lg-8">
                    <div><h2 class="intro-text text-center">Model X Specifications</h2></div>
                    <img src="img/img33.png" width="100%" height="auto">
                    <button class="Xbtn button">Order Now</button>
                </div>
                <div class="col-lg-4">
                    <ul class="list list1">
                        <li>
                            <span class="head">Range</span><br>
                            <span>340 mi (est.)</span>
                        </li>
                        <li>
                            <span class="head">1/4 Mile</span><br>
                            <span>9.9 s</span>
                        </li>
                        <li>
                            <span class="head">Peak Power</span><br>
                            <span>1,020 hp</span>
                        </li>
                        <li>
                            <span class="head">Wheels</span><br>
                            <span>20" or 22"</span>
                        </li>
                        <li>
                            <span class="head">Acceleration</span><br>
                            <span>
                                2.5 s 0-60 mph††with rollout subtracted
                            </span>
                        </li>
                        <li>
                            <span class="head">Top Speed</span><br>
                            <span>163 mph</span>
                        </li>
                        <li>
                            <span class="head">Drag Coefficient</span><br>
                            <span>0.24 Cd</span>
                        </li>
                        <li>
                            <span class="head">Weight</span><br>
                            <span>5,390 lbs</span>
                        </li>
                    </ul>
                </div>
            </div>     
        </div>
        <div class="row">
            <div class="tabcontent" id="ModelP">
                <div class="col-lg-8">
                    <div><h2 class="intro-text text-center">Model P Specifications</h2></div>
                    <img src="img/img37.png" width="100%" height="auto">
                    <button class="Pbtn button">Order Now</button>
                </div>
                <div class="col-lg-4">
                    <ul class="list list2">
                        <li>
                            <span class="head">Range</span><br>
                            <span>400 mi (est.)</span>
                        </li>
                        <li>
                            <span class="head">1/4 Mile</span><br>
                            <span>8.2 s</span>
                        </li>
                        <li>
                            <span class="head">Peak Power</span><br>
                            <span>1120 hp</span>
                        </li>
                        <li>
                            <span class="head">Wheels</span><br>
                            <span>20"</span>
                        </li>
                        <li>
                            <span class="head">Acceleration</span><br>
                            <span>
                                2.1s 0-60 mph**with rollout subtracted
                            </span>
                        </li>
                        <li>
                            <span class="head">Top Speed</span><br>
                            <span>186 mph</span>
                        </li>
                        <li>
                            <span class="head">Drag Coefficient</span><br>
                            <span>0.24 Cd</span>
                        </li>
                        <li>
                            <span class="head">Weight</span><br>
                            <span>4,065 lbs</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="tabcontent" id="ModelT">
                <div class="col-lg-8">
                    <div><h2 class="intro-text text-center">Model T Specifications</h2></div>
                    <img src="img/img39.png" width="100%" height="auto">
                    <button class="Tbtn button">Order Now</button>
                </div>
                <div class="col-lg-4">
                    <ul class="list list3">
                        <li>
                            <span class="head">Range</span><br>
                            <span>320 mi (est.)</span>
                        </li>
                        <li>
                            <span class="head">1/4 Mile</span><br>
                            <span>11 s</span>
                        </li>
                        <li>
                            <span class="head">Peak Power</span><br>
                            <span>1042 hp</span>
                        </li>
                        <li>
                            <span class="head">Wheels</span><br>
                            <span>20" 0r 21"</span>
                        </li>
                        <li>
                            <span class="head">Acceleration</span><br>
                            <span>
                                3.2s 0-60 mph**with rollout subtracted
                            </span>
                        </li>
                        <li>
                            <span class="head">Top Speed</span><br>
                            <span>168 mph</span>
                        </li>
                        <li>
                            <span class="head">Drag Coefficient</span><br>
                            <span>0.23 Cd</span>
                        </li>
                        <li>
                            <span class="head">Weight</span><br>
                            <span>3,565 lbs</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="tabcontent" id="ModelS">
                <div class="col-lg-8">
                    <div><h2 class="intro-text text-center">Model S Specifications</h2></div>
                    <img src="img/img38.png" width="100%" height="auto">
                    <button class="Sbtn button">Order Now</button>
                </div>
                <div class="col-lg-4">
                    <ul class="list list4">
                        <li>
                            <span class="head">Range</span><br>
                            <span>324 mi (est.)</span>
                        </li>
                        <li>
                            <span class="head">1/4 Mile</span><br>
                            <span>10.8 s</span>
                        </li>
                        <li>
                            <span class="head">Peak Power</span><br>
                            <span>1098 hp</span>
                        </li>
                        <li>
                            <span class="head">Wheels</span><br>
                            <span>20" 0r 21"</span>
                        </li>
                        <li>
                            <span class="head">Acceleration</span><br>
                            <span>
                                3.0s 0-60 mph**with rollout subtracted
                            </span>
                        </li>
                        <li>
                            <span class="head">Top Speed</span><br>
                            <span>718 mph</span>
                        </li>
                        <li>
                            <span class="head">Drag Coefficient</span><br>
                            <span>0.19 Cd</span>
                        </li>
                        <li>
                            <span class="head">Weight</span><br>
                            <span>3,965 lbs</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
       
        <div class="row">
            <div class="tabcontent" id="ModelR">
                <div class="col-lg-8">
                    <div><h2 class="intro-text text-center">Model R Specifications</h2></div>
                    <img src="img/img40.png" width="100%" height="auto">
                    <button class="Rbtn button">Order Now</button>
                </div>
                <div class="col-lg-4">
                    <ul class="list list5">
                        <li>
                            <span class="head">Range</span><br>
                            <span>330 mi (est.)</span>
                        </li>
                        <li>
                            <span class="head">1/4 Mile</span><br>
                            <span>10.1 s</span>
                        </li>
                        <li>
                            <span class="head">Peak Power</span><br>
                            <span>1086 hp</span>
                        </li>
                        <li>
                            <span class="head">Wheels</span><br>
                            <span>20"</span>
                        </li>
                        <li>
                            <span class="head">Acceleration</span><br>
                            <span>
                                2.8s 0-60 mph**with rollout subtracted
                            </span>
                        </li>
                        <li>
                            <span class="head">Top Speed</span><br>
                            <span>172 mph</span>
                        </li>
                        <li>
                            <span class="head">Drag Coefficient</span><br>
                            <span>0.24 Cd</span>
                        </li>
                        <li>
                            <span class="head">Weight</span><br>
                            <span>4,545 lbs</span>
                        </li>
                    </ul>
                </div>
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

    <script>
        function page(pageName,elmnt,color) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
          }
          document.getElementById(pageName).style.display = "block";
          elmnt.style.backgroundColor = color;
        }
        
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>

</body>

</html>
<?php

} else {
    header("location:login.php ");
}
?>