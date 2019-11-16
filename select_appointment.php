<?php
    // Check connection
    require("Config.php");
    //connect to MySQL
    $json = file_get_contents('php://input');
    $obj = json_decode($json, true);
    
    $response = array();
    
    // Check connection
    if($db === false) {
        json_encode("ERROR: Could not able to execute");
    }
    
    // Escape user inputs for security
    $client_id = $obj['client_id'];
    
    $sql = "SELECT * FROM booking_info where client_id= '$client_id'";
    // attempt insert query execution
    $result = mysqli_query($db, $sql);
    
    while($row = mysqli_fetch_array($result)){
        array_push($response,
                   array('appointment_date'=>$row['appointment_date'],
                         'time'=>$row['time'],
                         'status'=>$row['status']
                         ));
    }
    
    echo json_encode(array("data"=>$response));
    
    ?>
