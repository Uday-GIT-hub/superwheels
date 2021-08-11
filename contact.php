<?php
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

    <title>Contact - SUPER WHEELS</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box maps">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Location </strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d30361.36407679835!2d79.61174948176274!3d17.970802393936577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1626332030711!5m2!1sen!2sin" width="100%" height="450" style="border:3px solid black;" allowfullscreen="" loading="lazy" class="maps"></iframe>
                </div>    
                    
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class=" text-center">Contact
                        <strong>Us</strong>
                    </h2>
                    <hr>
                    <p>Super Wheels is pleased to assist you with an attentive multi-channel service: 
                       
                       please scroll down and get in touch with our dedicated Customer Contact Center via phone or email.
                    </p>
                </div>
                <div class="col-lg-7">
                    <p style="font-size:20px;"><i class="fa fa-phone" aria-hidden="true" style="font-size:20px;"></i>  Phone:
                            <strong>9996776999</strong>
                    </p>
                    <p style="font-size:20px;"><i class="fa fa-envelope" aria-hidden="true" style="font-size:20px;"></i>  Email:
                        <strong><a href="mailto:info@theperfectcup.com">SuperWheels967@gmail.com</a></strong>
                    </p>
                    <p style="font-size:20px;"><i class="fa fa-map-marker" aria-hidden="true" style="font-size:20px;"></i>  Address:
                        <strong style="color:green;">Oppisite ESI Hospital
                        Mills Colony, WGL 506013</strong>
                    </p>
                </div>
                <div class="col-lg-5">
                    <p style="font-weight:600;font-size:25px;"><strong>Around the Web</strong></p>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!" target="_blank"><i class="fa fa-facebook-official" style="font-size:45px"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!" target="_blank"><i class="fa fa-linkedin-square" style="font-size:45px"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!" target="_blank"><i class="fa fa-instagram" style="font-size:45px"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!" target="_blank"><i class="fa fa-twitter-square" style="font-size:45px"></i></a>                      
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

    <script src="js/jquery.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php

} else {
    header("location:login.php ");
}
?>

