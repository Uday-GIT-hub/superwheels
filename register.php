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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

   <!-- jQuery -->
   <script src="js/jquery.js"></script>
   <script type="text/javascript">
        $(document).ready(function () {

            $("#register").click(function () {

                fname = $("#fname").val();
                lname = $("#lname").val();
                email = $("#email").val();
                password = $("#password").val();

                $.ajax({
                    type: "POST",
                    url: "adduser.php",
                    data: "fname=" + fname + "&lname=" + lname + "&email=" + email + "&password=" + password,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
                                                    <strong>Account</strong> Created. \ \
                                                    </div>');

                            window.location.href = "index.php";

                        } else if (html == 'false') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                    <strong>Email Address</strong> already Registered .Use different email Id\ \
                                                    </div>');                    

                        } else if (html == 'fname') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                    <strong>First Name</strong> is required. \ \
                                                    </div>');
                                                    
                        } else if (html == 'lname') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                    <strong>Last Name</strong> is required. \ \
                                                    </div>');

                        } else if (html == 'eshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                    <strong>Email Address</strong> is required. \ \
                                                    </div>');

                        } else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                    <strong>Email Address</strong> format is not valid. \ \
                                                    </div>');
                                                    
                        } else if (html == 'pshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                    <strong>Password</strong> must be at least 8 characters . \ \
                                                    </div>');

                        } else {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                    <strong>Error</strong> processing request. Please try again. \ \
                                                    </div>');
                        }
                    },
                    beforeSend: function () {
                        $("#add_err2").html("loading...");
                    }
                });
                return false;
            });
        });
    </script>
    <style>
        body{
            font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
            background : url('img/img45.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
        .parent {
          position: relative;
          
        }
        
        .child {
          position: absolute;
          color:white;
          height:auto;
          width:40%;
          left: 30%;
          margin:50px 0;
        
        }
               
        input[type=text] ,input[type=password] ,input[type=email],select
        {
          width:100%;
          padding: 10px 5px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid rgb(163, 163, 163);
          border-radius: 4px;
          box-sizing: border-box;
          background-color: #ffffff;
        }
        button[type=submit]
        {
            font-size: 18px;
            font-weight:600;
            color:black;
            width:100%;
        }
        label{
            color:white;
            font-size: 20px;
        }
        @media screen and (max-width:905px) {
            .child {
          position: absolute;
          color:white;
          height:auto;
          width:60%;
          left: 20%;
          margin:50px 0;
        
        }
        }
        @media screen and (max-width:605px) {
            .child {
          position: absolute;
          color:white;
          height:auto;
          width:90%;
          left: 5%;
          margin:20px 0;
        
        }
        label{
            color:white;
            font-size: 15px;
        }
        button[type=submit]
        {
            font-size: 14px;
            font-weight:600;
            color:black;
            width:100%;
        }
        .child>h2{
            font-size: 25px;
        }
     
        }
    </style>    
</head>
<body>
    <div class="parent">
        <div class="col-lg-12 child">
            <br>
            <h2 class="text-center"><strong>Registration Form</strong></h2>
            <br>
            <div id="add_err2"></div>
            <form role="form">
                <div class="row">
                    <div class="form-group col-lg-12">
                        <label><i class="fa fa-user" aria-hidden="true" style="font-size:20px;"></i> First Name</label>
                        <input type="text" id="fname" name="firstname" maxlenght="50" placeholder="Your First name" class="form-control">
                    </div>
                    <div class="form-group col-lg-12">
                        <label><i class="fa fa-user" aria-hidden="true" style="font-size:20px;"></i> Last Name</label>
                        <input type="text" id="lname" name="lastname" maxlenght="50" placeholder="Your Last name"class="form-control">
                    </div>
                    <div class="form-group col-lg-12">
                        <label><i class="fa fa-envelope" aria-hidden="true" style="font-size:20px;"></i> Email Address</label>
                        <input type="email" id="email" name="email" maxlenght="50" placeholder="name@gmail.com"class="form-control">
                    </div>
                    <div class="form-group col-lg-12">
                        <label><i class="fa fa-key" aria-hidden="true" style="font-size:20px;"></i> Password</label>
                        <input type="password" id="password" placeholder="Password should be Minimum of lenght 8"class="form-control">
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-lg-12">
                        <button type="submit" class="btn btn-success" id="register" ><i class="fa fa-paper-plane" aria-hidden="true" style="font-size:20px;"></i> Submit</button>
                    </div>
                    
                </div>
            </form>
            <div class="row">
                <div class="form-group col-lg-12">
                    <a href="login.php"><button type="submit" class="btn btn-info"><i class="fa fa-sign-in" aria-hidden="true" style="font-size:20px;"></i> Already have an account?Login In</button></a>  
                </div>
            </div>
        </div>        
   </div>
   
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
</body>
</html>