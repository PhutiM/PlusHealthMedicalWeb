<?php
// Check connection
   $dbhost = 'localhost';
   $dbuser = 'id7440948_ticketmanagment';
   $dbpass = 'password';
   $db = 'id7440948_ticketmanagment';

    //connect to MySQL
    $link = mysqli_connect($dbhost, $dbuser, $dbpass,  $db );
    

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = $_POST['name'];
$surname = $_POST['surname'];
$ticketnumber = $_POST['ticketnumber'];
$category = $_POST['category'];
$status = $_POST['status'];
$email = $_POST['email'];
$id = 1;
 
    
// the message
$msg = "Hi , You have logged a ticket successfully. Ticket Number ";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email


// attempt insert query execution
$sql = "INSERT INTO ticket (name, surname, status, category, email, ticketnumber, UserID ) VALUES ('$name', '$surname','$status', $category, '$email', '$ticketnumber', '$id')";
if(mysqli_query($link, $sql)){
     mail($email,"My subject",$msg);
    echo "Ticket successfully created.";
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
