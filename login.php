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


    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- jQuery -->
    <script src="js/jquery.js"></script>
	
	<!-- Script -->
	<script type="text/javascript">
        $(document).ready(function(){
			$("#login").click(function(){
			    
				email=$("#email").val();
				password=$("#password").val();
				
				$.ajax({
					type: "POST",
					url: "pcheck.php",
					data: "email="+email+"&password="+password,
					success: function(html)
					{
						if(html=='true')
						{
							$("#add_err2").html('<div class="alert alert-success"> \<strong>You successfully loged in</strong> \ \</div>');
							window.location.href = "index.php";
						} 
						else if (html=='false') 
						{
						    $("#add_err2").html('<div class="alert alert-danger"> \<strong>Authentication</strong> failure. \ \</div>');
								
					    } 
					    else 
					    {
					        $("#add_err2").html('<div class="alert alert-danger"> \<strong>Error</strong> processing request. Please try again. \ \</div>');
						 }
					},beforeSend:function()
						{
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
          margin:120px 0;
        
        }
               
        input[type=text] ,input[type=password] ,input[type=email],select
        {
          width:100%;
          padding: 12px 5px;
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
          margin:120px 0;
        
        }
        }
        @media screen and (max-width:605px) {
            .child {
          position: absolute;
          color:white;
          height:auto;
          width:90%;
          left: 5%;
          margin:120px 0;
        
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
		
            <h2 class="text-center">

                <i class="fa fa-user" aria-hidden="true" style="font-size:30px;"></i><strong> Login</strong>
            </h2>
            <br>
            
            <?php
		    if (isset($_GET["logout"]))
		    {
		       if ($_GET["logout"] == "true") 
		       { 
		    ?>
			<div class="alert alert-success">
			    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			    <strong>You have been logged out of the system.</strong>
			</div>   

	        <?php
		       }
	        }
	        ?>
	        <br>
			<div id="add_err2"></div>
           
            <form role="form">
                <div class="row">
                    <div class="form-group col-lg-12">
                        <label><i class="fa fa-envelope" aria-hidden="true" style="font-size:20px;"></i> Email Address</label>
                        <input type="email" id="email" name="email" maxlenght="50" placeholder="name@gmail.com"class="form-control">
                    </div>
                    <div class="form-group col-lg-12">
                        <label> <i class="fa fa-key" aria-hidden="true" style="font-size:20px;"></i> Password</label>
                        <input type="password" id="password" name="password" placeholder="Password should be Minimum of lenght 8"class="form-control">
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-lg-12">
                        <button type="submit" class="btn btn-success" id="login" ><i class="fa fa-paper-plane" aria-hidden="true" style="font-size:20px;"></i> Submit</button>
                    </div>
                </div>
            </form>
            <div class="row">
    			<div class="form-group col-lg-12">
    				<a href="register.php"><button type="submit" class="btn btn-info"><i class="fa fa-sign-in" aria-hidden="true" style="font-size:20px;"></i> Not a Member? Register here</button></a>
    			</div>     
		    </div>
        </div>
    </div>
    

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>