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

    <title>About - SUPER WHEELS</title>

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
    
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">About Us
                    </h2>
                    <hr>
                </div>
                <div class="col-md-12 about">
                    <p><strong>NO RESTRAINTS. NO LIMITATIONS. WE DON’T SIMPLY PUSH BOUNDARIES. WE COMPLETELY RETHINK THEM</strong></p>
                    <p>
                        Super Wheels exists to create breathtaking performance road cars. And deliver the most thrilling driving experiences imaginable.
                        With innovation at the core of all we do, every challenge starts with the same question.<br> How can we do it better? This restless spirit runs right through Super Wheels. And the search for perfection is evident in everything we design.
                    </p>
                    <P>Pioneering new technology. Breaking industry norms. Pushing the envelope in speed, performance and dynamic engineering. This approach has created cars with astounding track performance that are astonishingly easy to drive on the road.</P>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="box">
                <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/gZGOz6sir40' frameborder='0' allowfullscreen ></iframe></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Gallery</h2>
                    <hr>
                </div>
                <div class="col-lg-6 container1">
                    <img src="img/img7.jpg" class="image">
                    <div class="overlay"><div class="text">Mighty 620R</div></div>
                </div>
                <div class="col-lg-6 container1">
                    <img src="img/img34.jpg" class="image">
                    <div class="overlay"><div class="text">McLaren X</div></div>
                </div>
                <div class="col-lg-6 container1">
                    <img src="img/img31.jpg" class="image">
                    <div class="overlay"><div class="text">Avenger 960T</div></div>
                </div>
                <div class="col-lg-6 container1">
                    <img src="img/img5.jpg" class="image">
                    <div class="overlay"><div class="text">DC 570X</div></div>
                </div>
                <div class="col-lg-6 container1">
                    <img src="img/img32.jpg" class="image">
                    <div class="overlay"><div class="text">McLaren Nitro</div></div>
                </div>
                <div class="col-lg-6 container1">
                    <img src="img/img10.jpg" class="image">
                    <div class="overlay"><div class="text">Cool Boost</div></div>
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
    
  
</body>

</html>
<?php

} else {
    header("location:login.php ");
}
?>
