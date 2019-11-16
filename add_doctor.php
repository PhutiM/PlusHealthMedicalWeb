<?php
// Check connection

    
    require('Config.php');
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$staff_name = $_POST['name'];
$designation = $_POST['designation'];

    
// the message
$msg = "Hi , You have logged a ticket successfully. Ticket Number ";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email

// attempt insert query execution
$sql = "INSERT INTO staff (staff_name, designation) VALUES ('$staff_name', '$designation')";
    
if(mysqli_query($db, $sql)){
    
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
<body>


<div class="part-five part-four" id="Get-Started" style="display: flex; align-items: center; justify-content: center; background-size: auto !important;">
<h1>Doctor successfully created </h1> <br>
</div>

<div class="part-five part-four" id="Get-Started" style="display: flex; align-items: center; justify-content: center; background-size: auto !important;">
<p>SUCCESS!!. You have succesfuly added a doctor. Please click <a href="doctors.php" style="text-decoration: none; color #0986d9 !important;;">here </a> if you are not redirected within a few seconds.</p>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<script>
setTimeout(function () {
           window.location.replace("doctors.php"); //will redirect to main page (index.html)
           }, 3000); //will call the function after 3 secs.
</script>
</body>
</html>
