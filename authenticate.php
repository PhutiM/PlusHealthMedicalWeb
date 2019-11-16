<?php
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
     $username = $_POST['username'];
     $password =  $_POST['password'];
   require('Config.php');
    //connect to MySQL
      $sql = "SELECT id FROM user WHERE username = '$username' and password = 'password'";
      $result = mysqli_query($db, $sql);

      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         $_SESSION['login_user'] = $username;      
         header("location: welcome.php");
      }else {
      }
   }
?>
<style>
body{color:white;
background: linear-gradient(to bottom, #16222a, #3a6073); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ *                    }
</style>

<!DOCTYPE html>
<html>
<head>
<title>Thank you!</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="TSW WebCoder">
</head>
<body>


<div class="part-five part-four" id="Get-Started" style="display: flex; align-items: center; justify-content: center; background-size: auto !important;">
<h1>Authentication Failed </h1> <br>
</div>
<hr>
<div class="part-five part-four" id="Get-Started" style="display: flex; align-items: center; justify-content: center; background-size: auto !important;">
<p>Your username or password is incorrect, please enter your correct credentials. Please click <a href="/" style="text-decoration: none; color #0986d9 !important;;">here </a> if you are not redirected within a few seconds.</p>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<script>
setTimeout(function () {
           window.location.replace("index.php"); //will redirect to main page (index.html)
           }, 12000); //will call the function after 3 secs.
</script>

</body>
</html>
