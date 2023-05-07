<?php
$servername = "localhost";
$username = "root";
$password = ""; //localhost password is always blank if you are not change
$dbname = "test"; //database name
 
// Create connection in mysqli
 
$con = mysqli_connect($servername, $username, $password, $dbname);
 
//Check connection in mysqli
if(!$con){
die("Error on the connection" .mysqli_error());  //mysqli_error to show error
}
else
{
//echo "<h3>Wow! You're Connected Sucessfully</h3> ";
}
?>