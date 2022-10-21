<?php 
include "DataBaseConnection.php";
$DBC = new DataBaseConnection();
$Connection = $DBC->Connect();
  global $Connection;
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Startbox">
    <meta name="author" content="RunWebRun">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- Favicon-->
    <link rel="icon" type="image/png" href="assets/img/root/favicon.png"><!-- Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap"><!-- Style-->
    <!-- build:css -->
    <link rel="stylesheet" href="assets/vendors/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/vendors/css/swiper-bundle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"><!-- endbuild -->
    <link rel="stylesheet" href="assets/css/main.css"><!-- endbuild -->
    <!-- jQuery-->
    <script src="assets/vendors/js/jquery.min.js"></script>
</head>

<body class="">
    <!-- Header-->
    <!-- Navbar top-->
    <nav class="navbar navbar-expand-lg navbar-top  bg-white">
        <div class="container">
        <a class="navbar-brand" href="index.php">
        	<img src="assets/img/logo.png" />
        </a>
        <a class="navbar-toggle order-4 popup-inline" href="#navbar-mobile-style-1"><span></span><span></span><span></span></a>
            <ul class="nav navbar-nav order-2 ms-auto nav-no-opacity">
                 <li class="nav-item "><a class="nav-link" href="about.php" ><span>About Us</span></a></li>
                <li class="nav-item navbar-dropdown"><a class="nav-link" href="categories.php"><span>Our Product Range</span></a>
                    <div class="dropdown-menu rounded-2 shadow">
                        <ul class="nav navbar-nav">
                        <?php 
                        $Query = "SELECT * FROM category";
  						$Result = mysqli_query($Connection, $Query);
  						while($Data= mysqli_fetch_assoc($Result)){
  						?>	
                            <li class="nav-item"><a class="nav-link" href="<?php echo 'products.php?CategoryId='.$Data["Id"] ; ?>"><span><?php echo $Data["Name"] ; ?></span></a></li>
                        <?php } ?>   
                           
                        </ul>
                    </div>
                </li>
                <li class="nav-item "><a class="nav-link" href="about.php" ><span>Our Services</span></a></li>
                <li class="nav-item "><a class="nav-link" href="about.php" ><span>Contact Us</span></a></li>
                <li class="nav-item "><a class="nav-link" href="about.php" ><span>Recipe Hub</span></a></li>
            </ul>
        </div>
    </nav><!-- Navbar mobile-->
    <div class="navbar navbar-mobile navbar-mobile-style-1 bg-white mfp-hide" id="navbar-mobile-style-1">
        <div class="navbar-wrapper">
            <div class="navbar-head"><a class="navbar-brand d-block d-md-none" href="index.php"><img src="assets/img/logo.png" /></a><a class="navbar-toggle popup-modal-dismiss" href="#"><span></span><span></span><span></span></a></div>
            <div class="navbar-body">
                <ul class="nav navbar-nav navbar-nav-collapse">
                    <li class="nav-item "><a class="nav-link" href="about.php" ><span>About Us</span></a></li>
                    <li class="nav-item navbar-collapse" style="position: relative;"><a class="nav-link" href="categories.php" ><span>Our Product Range</span> <a href="#navbarCollapseServices" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbarCollapseServices"><span class="arrow_icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
              </svg>
              
            </span>
            </a>
            </a>
                        <div class="navbar-collapse-menu collapse" id="navbarCollapseServices">
                            <ul class="nav navbar-nav">
                               <?php 
		                        $Query = "SELECT * FROM category";
		  						$Result = mysqli_query($Connection, $Query);
		  						while($Data= mysqli_fetch_assoc($Result)){
		  						?>	
		                            <li class="nav-item"><a class="nav-link" href="<?php echo 'products.php?CategoryId='.$Data["Id"] ; ?>"><span><?php echo $Data["Name"] ; ?></span></a></li>
		                        <?php } ?> 
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item "><a class="nav-link" href="about.php" ><span>Our Services</span></a></li>
	                <li class="nav-item "><a class="nav-link" href="about.php" ><span>Contact Us</span></a></li>
	                <li class="nav-item "><a class="nav-link" href="about.php" ><span>Recipe Hub</span></a></li>
                </ul>
            </div>
           
        </div>
    </div><!-- Topbar-->
