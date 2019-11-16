
<?php
    include("Config.php");
    $completedquery = "SELECT count(*) as completed from booking_info where status='completed'";
    $completedresult = mysqli_query($db, $completedquery) or die ( mysqli_error());
    $completedrow = mysqli_fetch_assoc($completedresult);
    
    $pendingquery = "SELECT count(*) as pending from booking_info where status='pending'";
    $pendingresult = mysqli_query($db, $pendingquery) or die ( mysqli_error());
    $pendingrow = mysqli_fetch_assoc($pendingresult);
    
    $canceledquery = "SELECT count(*) as cancelled from booking_info where status='cancelled'";
    $canceledresult = mysqli_query($db, $canceledquery) or die ( mysqli_error());
    $canceledrow = mysqli_fetch_assoc($canceledresult);
    
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
<div class="col-lg-6 col-sm-6 col-4 header-top-left">
<div id="logo">
<a href="welcome.php"><img src="img/logo.png" width=80px alt="" title="" /></a>
</div>
</div>
<div class="col-lg-6 col-sm-6 col-8 header-top-right">
<a href="appointments.php" class="primary-btn text-uppercase">Appointments</a>
<a href="clients.php" class="primary-btn text-uppercase">Clients</a>
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
<h2 class="pull-left">Reports</h2>
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

              <canvas id="myChart"></canvas>

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
          <div class="card mb-4">

            <!--Card content-->
            <div class="card-body">

              <!-- List group links -->
              <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action waves-effect">Monthly
                  <span class="badge badge-success badge-pill pull-right">22%
                    <i class="fas fa-arrow-up ml-1"></i>
                  </span>
                </a>
                <a class="list-group-item list-group-item-action waves-effect">Weekly
                  <span class="badge badge-danger badge-pill pull-right">5%
                    <i class="fas fa-arrow-down ml-1"></i>
                  </span>
                </a>
                <a class="list-group-item list-group-item-action waves-effect">Daily
                  <span class="badge badge-primary badge-pill pull-right">14</span>
                </a>
             
              </div>
              <!-- List group links -->

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

      </div>

      </div>
      </div>
    </div>
  </main>
  <!--Main layout-->


</section>
<!-- End appointment Area -->


<footer class="footer-area section-gap">

</footer>
<!-- End footer Area -->

 <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

  <!-- Charts -->


    <script>
    // Line

    
    
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Completed", "Pending", "Cancelled"],
        datasets: [{
          label: 'Appointments',
          data: [<?=$completedrow['completed'];?>, <?=$pendingrow['pending'];?>, <?=$canceledrow['cancelled'];?>],
          backgroundColor: [
            'rgba(75, 192, 192, 0.2)',
            'rgba(255, 206, 86, 0.2)',	
            'rgba(255, 99, 132, 0.2)',
            'rgba(153, 102, 255, 0.2)'
          ],
          borderColor: [
            'rgba(75, 192, 192, 1)',
            'rgba(54, 162, 235, 1)',
             'rgba(255,99,132,1)',
            'rgba(255, 159, 64, 1)',

            'rgba(153, 102, 255, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });


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

