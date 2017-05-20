<?php
session_start();

//connect to database
$db=mysqli_connect("localhost","root","","signup");


?>






<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sahayak</title>

    <!-- Bootstrap Core CSS -->
    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
    <!-- Navigation -->
    
   <!--Navbar-->
     <nav id="header-nav" class="navbar navbar-default">
     <!--Container-->
       <div class="container">
         <div class="navbar-header ">
         <a href="awareness.html" class="pull-left visible-lg visible-md">
           <div id="logo-img" ></div>
         </a>
            <div class="navbar-brand" >
              <a href="awareness.html" ><h1>SAHAYAK</h1></a>
              <span>one stop solution</span>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

 
         </div>
         <div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
             <li>
               <a href="#">
                 <span class="glyphicon glyphicon-home"></span><br class="hidden-xs">Home
               </a>
             </li>
             <li>
               <a href="#">
                 <span class="glyphicon glyphicon-bookmark"></span><br class="hidden-xs">About
               </a>
             </li>
            

             <li>
               <button  ><a href="logout.php" id="logout-btn">Log Out </a></button>
             </li>
           </ul>
         </div>
        </div>
       <!--End container-->
     </nav>
     <!--NAVBAR-->
  
    <header >
        <img class="img-responsive img-center" src="sahayak1.png"  alt="">
    </header>


    <!-- Content Section -->
    

   



    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </footer>



<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
