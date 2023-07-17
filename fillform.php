<?php
$databaseHost = 'localhost';
$databaseName = 'register';
$databaseUsername = 'root';
$databasePassword = '';
$conn = mysqli_connect($databaseHost, $databaseUsername,$databasePassword, $databaseName);
session_start(); 

include "config.php";
$cname = $_POST['cname'];
$cemail = $_POST['cemail'];
$roll = $_POST['roll'];
$course = $_POST['course'];
$gender = $_POST['gender'];
if(isset($_POST['submit'])) 
{
$result = mysqli_query($mysqli, "INSERT INTO fillform values ('$cname','$cemail','$roll','$course','$gender')");

}

header ("Location:index1.html");
?>