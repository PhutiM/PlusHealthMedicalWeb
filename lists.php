<!DOCTYPE html>
<html>
<body>
   <ul id="nav">
	<li><a href="ticket.php">Log Ticket</a></li>
	<li><a href="lists.php">List My Tickets</a></li>
	<li><a href="#"></a></li>
	<li><a href="#"></a></li>
	<li><a href = "login.php">Logout</a></li>
   </ul>
   
<?php
   $dbhost = 'localhost';
   $dbuser = 'id7440948_ticketmanagment';
   $dbpass = 'password';
   $db = 'id7440948_ticketmanagment';

    //connect to MySQL
    $link = mysqli_connect($dbhost, $dbuser, $dbpass,  $db );
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, surname, ticketnumber FROM ticket";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Details: ". $row["id"]. " - Name: ". $row["name"]. " " . $row["surname"] . "<br>" . $row["ticketnumber"] . "<br>";
    }
} else {
    echo "0 results";
}

$link->close();
?> 

<style>
#nav {
	width: 100%;
	float: left;
	margin: 0 0 0em 0;
	padding: 0;
	list-style: none; }
#nav li {
	float: left; }
	#nav {
	width: 100%;
	float: left;
	margin: 0 0 0em 0;
	padding: 0;
	list-style: none;
	background-color: #f2f2f2;
	border-bottom: 1px solid #ccc; 
	border-top: 1px solid #ccc; }
#nav li a {
	display: block;
	padding: 8px 15px;
	text-decoration: none;
	font-weight: bold;
	color: #069;
	border-right: 1px solid #ccc; }
</style>   
</body>
</html>