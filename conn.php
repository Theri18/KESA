<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="kesa";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

//Check connection
/*you can also use 
if(!$conn){
  die("connection failed:" .mysqli_connection_error());
} 


*/
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

?>