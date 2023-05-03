<?php
// error_reporting(0);
$servername = "localhost";
$username ="root";
$password ="";
$dbname ="singup";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn==true)
{
	// echo "Connection ok";

}
else
{
	echo "Connection failed";
}
?>