<?php
    // Add Database Configs
    require('Config.php');
    // Check connection
    if($db === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
 
//Get Client Data Details

    $query = "SELECT * from booking_info where client_id='". $id . "'";
    $client_result = mysqli_query($db, $query) or die ( mysqli_error());
    $client_row = mysqli_fetch_assoc($client_result);
//
    $email = "mokwenaphuti8@gmail.com";
    $date = $_POST['date'];
    $time = $_POST['time'];
    $id =  $_POST['client'];
    $doctor =  $_POST['doctor'];
    
// the message sent to client after successful booking
    $msg = "Dear, " . $client_row['client_name'] . $client_row['client_surname'] . "Your appointment for". $date . $time . "has been set.";
    
// use wordwrap() if lines are longer than 70 characters
//    $msg = wordwrap($msg,70);

// attempt insert query execution
    $sql = "INSERT INTO booking_info (client_id, staff_id, appointment_date, time, status) VALUES ('$id', '$doctor', '$date', '$time', 'pending')";
    if(mysqli_query($db, $sql)){
   
        mail ($email, "Plus Health Medical Appointment", $msg, $email);
    
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
    }
    
    // close connection
    mysqli_close($db);
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
<body style=>


<div class="part-five part-four" id="Get-Started" style="display: flex; align-items: center; justify-content: center; background-size: auto !important;">
<h1>Appointment successfully created </h1> <br>
</div>
<hr>
<div class="part-five part-four" id="Get-Started" style="display: flex; align-items: center; justify-content: center; background-size: auto !important;">
<p>SUCCESS!! Appointment has been successfully booked. An email will be sent to  . "$email" .  shortly. Please click <a href="appointments.php" style="text-decoration: none; color #0986d9 !important;;">here </a> if you are not redirected within a few seconds.</p>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<script>
setTimeout(function () {
           window.location.replace("appointments"); //will redirect to main page (index.html)
           }, 12000); //will call the function after 3 secs.
</script>
</body>
</html>
