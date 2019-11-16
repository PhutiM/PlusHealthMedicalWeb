<?php
// Check connection
    
require('Config.php');
    
    //connect to MySQL
$json = file_get_contents('php://input');
$obj = json_decode($json, true);

// Escape user inputs for security
$client_id = $obj['client_id'];
$name = $obj['name'];
$surname = $obj['surname'];
$email = $obj['email'];
$password = $obj['password'];
$address = $obj['address'];
$cell = $obj['cell'];
    
// the message
$msg = "Hi your appointment details have been updtate";

$msg = wordwrap($msg,70);

// attempt insert query execution
    $sql = "UPDATE client_data SET client_name='$name', client_surname='$surname', client_email='$email', client_pass='$password', client_address='$address', client_cell='$cell' WHERE client_id='$client_id'";
    
 if(mysqli_query($db, $sql)){
        echo json_encode("Details Updated Successfully");
    } else{
        echo json_encode("Ooops, something went wrong");
    }
    
    // close connection
    mysqli_close($db);
    ?>
