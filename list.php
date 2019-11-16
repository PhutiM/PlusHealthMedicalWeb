<!DOCTYPE html>
<html>
<body>

<?php
   $dbhost = 'localhost';
   $dbuser = 'id7440948_ticketmanagment';
   $dbpass = 'password';
   $db = 'id7440948_ticketmanagment';

    //connect to MySQL
    $link = mysqli_connect($dbhost, $dbuser, $dbpass,  $db );
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, surname FROM ticket";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " " . $row["surname"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>