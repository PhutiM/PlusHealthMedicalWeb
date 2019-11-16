ope<?php
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
    $name = $obj['name'];
    $description = $obj['description'];
    
    $sql = "SELECT * FROM SMS";
    // attempt insert query execution
    $result = mysqli_query($db, $sql);
    
    while($row = mysqli_fetch_array($result)){
        array_push($response,
                   array('label'=>$row['description'],
                         'value'=>$row['name']
                         ));
    }
    
    echo json_encode(array("data"=>$response));
    
    ?>
