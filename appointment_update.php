<?php
// Check connection
    
require('Config.php');
    
    //connect to MySQL
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$client_id = $obj['client_id'];
$status = $obj['status'];
$time = $obj['time'];
$date = $obj['date'];
    
// the message
$msg = "Hi your appointment details have been updtate";

// send email

// attempt insert query execution
$sql = "UPDATE booking_info SET time='$time', status='$status', appointment_date='$date' WHERE client_id='$client_id'";
    
    
if(mysqli_query($db, $sql)){
    echo json_encode("Details Updated Successfully");
} else{
    echo json_encode("Ooops, something went wrong");
}
 
// close connection
mysqli_close($db);
?>
