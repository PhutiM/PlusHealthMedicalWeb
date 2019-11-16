<?php
// Check connection

    
    require('Config.php');
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = $_POST['name'];
$surname = $_POST['surname'];
$tel = $_POST['tel'];
$cell = $_POST['cell'];
$email = $_POST['email'];
$address = $_POST['address'];
$age = $_POST['age'];
$id = $_POST['id'];
$password = $_POST['password'];
    
// the message
$msg = "Hi , You have logged a ticket successfully. Ticket Number ";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email

// attempt insert query execution
$sql = "INSERT INTO client_data (client_id, client_name, client_surname,client_tel_home,client_cell, client_email, client_address, client_age, client_pass) VALUES ('$id','$name', '$surname', $cell, '$tel', '$email', '$address', '$age', '$password')";
    
if(mysqli_query($db, $sql)){
    echo "Client successfully created.";
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 
// close connection
mysqli_close($db);
?>

<style>

body{   background: linear-gradient(to right, #0f0c29, #302b63, #24243e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */}
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
<h1>Client successfully created </h1> <br>
</div>
<hr>
<div class="part-five part-four" id="Get-Started" style="display: flex; align-items: center; justify-content: center; background-size: auto !important;">
<p>SUCCESS!!. You have succesfuly added a client. Please click <a href="clients.php" style="text-decoration: none; color #0986d9 !important;;">here </a> if you are not redirected within a few seconds.</p>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<script>
setTimeout(function () {
           window.location.replace("clients.php"); //will redirect to main page (index.html)
           }, 12000); //will call the function after 3 secs.
</script>
</body>
</html>
