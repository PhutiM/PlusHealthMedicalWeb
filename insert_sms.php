<?php
// Check connection
     require('Config.php');

    //connect to MySQL
    
    $json = file_get_contents('php://input');
    
    $obj = json_decode($json, true);

// Check connection

    
    // Check connection
    if($db === false) {
        json_encode("ERROR: Could not able to execute");
    }
// Escape user inputs for security
$name = $obj['name'];
$description = $obj['description'];

// attempt insert query execution

$sql = "INSERT INTO SMS (name, description) VALUES ('$name', '$description')";
if(mysqli_query($db, $sql)){
    echo  json_encode("Successfully Insert");
} else{
    echo  json_encode("ERROR: Could not able to execute $sql. " . mysqli_error($db));
}

// close connection
mysqli_close($db);
?>
