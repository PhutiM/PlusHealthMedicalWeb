<?php
    include("Config.php");
    $id=$_REQUEST['id'];
    $query = "SELECT * from client_data where client_id='".$id."'";
   
    $result = mysqli_query($db, $query) or die ( mysqli_error());
    $row = mysqli_fetch_assoc($result);
    ?>


<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Favicon-->
<link rel="shortcut icon" href="img/fav.png">
<!-- Author Meta -->
<meta name="author" content="colorlib">
<!-- Meta Description -->
<meta name="description" content="">
<!-- Meta Keyword -->
<meta name="keywords" content="">
<!-- meta character set -->
<meta charset="UTF-8">
<!-- Site Title -->
<title>Plus Health</title>

<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
<!--
CSS
============================================= -->
<link rel="stylesheet" href="css/linearicons.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/nice-select.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<header id="header">
<div class="header-top">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-sm-6 col-4 header-top-left">
<a href="tel:+9530123654896"> <span class="text"><span class="text"></span></span></a>
<a href="mailto:support@colorlib.com"> <span class="text"><span class="text"></span></span></a>
</div>
<div class="col-lg-6 col-sm-6 col-8 header-top-right">

<a href="clients.php" class="primary-btn text-uppercase">Client</a>
<a href="appointments.php" class="primary-btn text-uppercase">Appointments</a>
<a href="index.php" class="primary-btn text-uppercase">Logout</a>

</div>
</div>
</div>
</div>
<div class="container main-menu">
<div class="row align-items-center justify-content-between d-flex">
<div id="logo">
<a href="index.html"><img src="img/logo.png" width=100px alt="" title="" /></a>
</div>
<nav id="nav-menu-container">
<ul class="nav-menu">
<li><a href="index.html"></a></li>
<li><a href="about.html">Learn More about Plus Health</a></li>
<li><a href="features.html">Contact Plus Health</a></li>
<li><a href="doctors.html"></a></li>
<li><a href="departments.html"></a></li>
<li class="menu-has-children"><a href=""></a>

</li>
<li class="menu-has-children"><a href=""></a>
</li>
<li><a href="contact.html"></a></li>
</ul>
</nav><!-- #nav-menu-container -->
</div>
</div>
</header><!-- #header -->

<!-- start banner Area -->
<section class="banner-area relative" id="home">
<div class="overlay overlay-bg"></div>
<div class="container">
<div class="row fullscreen d-flex align-items-center justify-content-center">
<div class="banner-content col-lg-8 col-md-12">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</div>
</div>
</div>
</section>
<!-- End banner Area -->

<!-- Start appointment Area -->
<section class="appointment-area">
<div class="container">
<div class="row justify-content-between align-items-center pb-120 appointment-wrap">
<div class="col-lg-5 col-md-6 appointment-left">

</div>
<div class="col-lg-6 col-md-6 appointment-right pt-60 pb-60">
<form class="form-wrap" action="edit_client.php"  method = "post">
<h3 class="pb-20 text-center mb-30">Edit a Client</h3>
<input type="text" class="form-control" name="name"  value="<?=$row['client_name'];?>" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required>
<input type="text" class="form-control" name="surname"  value="<?=$row['client_surname'];?>" placeholder="Surname" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Surname'" required>


<input type="text" class="form-control" name="tel" placeholder="Tel " value="<?=$row['client_tel_work'];?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tel'" >
<input type="email" class="form-control" name="email" value="<?=$row['client_email'];?>" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" >
<input id="age" name="age" class="form-control" value="<?=$row['client_age'];?>" placeholder="Age" type="text" required>
<input id="id" name="id" class="form-control" value="<?=$row['client_id'];?>"  placeholder="ID Number" type="text" required>

<div class="form-select" id="service-select">
<select>
<option valuedata-display=""> <?=$row['client_gender'];?> </option>
<option value="1">Male</option>
<option value="2">Female</option>

</select>
</div>
<input name="address" class="form-control" rows="5" placeholder="Address"  value="<?=$row['client_address'];?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required></<input>
<button class="primary-btn text-uppercase">Update Client</button>
</form>
</div>
</div>
</div>
</section>
<!-- End appointment Area -->


<!-- End team Area -->

<!-- Start feedback Area -->


<!-- start footer Area -->
<footer class="footer-area section-gap">

</footer>
<!-- End footer Area -->


<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/easing.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.tabs.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/main.js"></script>
</body>
</html>
