
<?php
    include("Config.php");
  
    $query = "SELECT client_name, client_surname, time from booking_info, consultation, client_data where booking_info.consult_id = consultation.consult_id AND booking_info.client_id = client_data.client_id  AND date_format( appointment_date, '%Y-%m,%d') = date_format(now(),'%Y-%m,%d') AND booking_info.status='pending'";
    $result = mysqli_query($db, $query) or die ( mysqli_error());
    $row = mysqli_fetch_assoc($result);
    
    
    $queryoutstanding =
    "SELECT sum(price) as outstanding from booking_info, consultation where booking_info.consult_id = consultation.consult_id AND date_format(appointment_date, '%Y-%m,%d') = date_format(now() ,'%Y-%m,%d')";
    
    $outstandingresults = mysqli_query($db, $queryoutstanding) or die ( mysqli_error());
    $rowoutstanding = mysqli_fetch_assoc($outstandingresults);
    
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

<!--
CSS
============================================= -->
<link rel="stylesheet" href="css/linearicons.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/nice-select.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
                  $('#example').DataTable();
                  } );

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
<a href="appointments.php" class="primary-btn text-uppercase">Appointments</a>
<a href="clients.php" class="primary-btn text-uppercase">Clients</a>
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
<li><a href="about.html">View Reports</a></li>
<li><a href="features.html">View Client</a></li>
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
<div class="col-lg-12 col-md-12">
<h2 class="pull-left">Plus Health Medical Dashboard</h2>
</div>
<br>
<br>

<br>

<br>
<br>

<!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

    
      <!-- Heading -->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-9 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <div class="card-body">


<?php
  
        if(mysqli_num_rows($result) > 0){
            echo "<table id='example' class='table table-bordered table-striped'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Client Name</th>";
            echo "<th>Client Surname</th>";
            echo "<th>Appointment Time</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['client_name'] . "</td>";
                echo "<td>" . $row['client_surname'] . "</td>";
                echo "<td>" . $row['time'] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            // Free result set
            
        } else{
            echo "<p class='lead'><em>No records were found.</em></p>";
        }
    
    // Close connection
    mysqli_close($db);
    ?>
            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 mb-4">

          <!--Card-->
          <div class="card mb-4">

            <!-- Card header -->
            <div class="card-header text-center">
            	<br>
            	<br>
            	<br>
            </div>

            <!--Card content-->
            <div class="card-body">


            </div>

          </div>
          <!--/.Card-->

          <!--Card-->
          <div class="card mb-6">

            <div class="card-body">

              <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action waves-effect">Outsanding
                  <span class="badge badge-success badge-pill pull-right"> R  <?=$rowoutstanding ['outstanding'];?>,
                    <i class="fas fa-arrow-up ml-1"></i>
                  </span>
                </a>

              </div>
            </div>
         </div>
        </div>
      </div>
     </div>
      </div>
      </div>
  </main>

</section>

<footer class="footer-area section-gap">

</footer>

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

