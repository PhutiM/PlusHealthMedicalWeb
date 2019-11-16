<?php
    require('Config.php');
    $json = file_get_contents('php://input');
    $obj = json_decode($json,true);
    $email = $obj['email'];
    $password = $obj['password'];

    if($obj['email']!=""){
        $results=$db->query("SELECT * FROM client_data where client_email='$email' and client_pass='$password'");
        
        if($results->num_rows==0){
            echo json_encode("Wrong Details");
        }
        else{
            $row = mysqli_fetch_array($results);
            echo json_encode($row['client_id']);
        }
    }
    else{
        echo json_encode("Ooops, something went wrong");
    }
    ?>



