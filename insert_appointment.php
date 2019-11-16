
<?php
    include("Config.php");

    // Get the client who will be assigned to the appointment

    $id=$_REQUEST['client_id'];
    $query = "SELECT * from client_data where client_id='". $id. "'";
    $result = mysqli_query($db, $query) or die ( mysqli_error());
    $row= mysqli_fetch_assoc($result);
    
    // Get a list of doctors
  

//    $docresult = mysqli_query($db, $docquery) or die ( mysqli_error());
//    $docrow = mysqli_fetch_assoc($docresult);
//
    
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
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$(function() {
    $("#datepicker").datepicker();
              });
</script>
</head>
<body>
<header id="header">
<div class="header-top">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-5 col-sm-5 col-4 header-top-left">
<div id="logo">
<a href="welcome.php"><img src="img/logo.png" width=80px alt="" title="" /></a>
</div>
</div>
<div class="col-lg-7 col-sm-7 col-8 header-top-right">
<a href="clients.php" class="primary-btn text-uppercase">Clients</a>
<a href="appointments.php" class="primary-btn text-uppercase">Appointments</a>
<a href="doctors.php" class="primary-btn text-uppercase">Doctors</a>
<a href="index.php" class="primary-btn text-uppercase">Logout</a>

</div>
</div>
</div>
</div>
<div class="container main-menu">
<div class="row align-items-center justify-content-between d-flex">
<nav id="nav-menu-container">
<ul class="nav-menu">
<li><a href="index.html"></a></li>
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

<div id="message"><?php if(isset($success)){ echo $message; } ?></div>
<form class="form-wrap" action="add_appointment.php"  <?=$row['client_id'];?>    method = "post">
<h5 class="pb-20 text-center mb-30">Add Appointment For  <?=$row['client_name'];?>   <?=$row['client_surname'];?>  </h5>
<input type="client" class="form-control" name="client" id="client" placeholder="Client ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Client ID'" value=<?=$row['client_id'];?> >
<input type="date" class="form-control" name="date" id="datepicker" placeholder="Date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date'" oninvalid="InvalidField(this);" oninput="InvalidField(this);"  required>
<input type="time" class="form-control" name="time" placeholder="Time: Format 00:00:00" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Format 00:00:00'" oninvalid="InvalidField(this);" oninput="InvalidField(this);"  required>

<?php
 $sql = "SELECT * from staff";
 $docs = mysqli_query($db, $sql);
 echo "<select name='doctor' class='form-control'>";
    while ($docsrow = mysqli_fetch_array($docs)) {
        echo "<option value='" . $docsrow['staff_id'] ."'>" . $docsrow['staff_name'] ."</option>";
    }
    echo "</select>";
?>

<button class="primary-btn text-uppercase">Add Client</button>
</form>
<span id="sucessMessage"> </span>

</div>
</div>
</div>
</section>
<footer class="footer-area section-gap">

</footer>

<script>
function InvalidField(textbox) {
    
    if (textbox.value === '') {
        textbox.setCustomValidity
        ('Please enter the required input');
    } else if (textbox.validity.typeMismatch) {
        textbox.setCustomValidity
        ('Please enter a valid input!');
    } else {
        textbox.setCustomValidity('');
    }
    
    return true;
}


</script>

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
