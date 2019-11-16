<?php

//connect to MySQL
require('Config.php');
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// attempt insert query execution
$sql = "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email')";
if(mysqli_query($db, $sql)){
          header('location: index.php');
          } else{
            
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 
// close connection
mysqli_close($db);
?>

