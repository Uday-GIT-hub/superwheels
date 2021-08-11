<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class="navbar-brand" href="index.php">Super Wheels</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>
                <li>
                    <a href="Models.php">Models</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                 <li>
                    <a href="logout.php"  style="color:black;"><i class="fa fa-user" aria-hidden="true" style="font-size:20px;"></i> <?php echo $fname; echo " "; echo $lname; ?> - Logout</a>
                </li>
            </ul>
            
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>