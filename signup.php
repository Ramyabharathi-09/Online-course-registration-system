<?php
$databaseHost = 'localhost';
$databaseName = 'register';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername,$databasePassword, $databaseName);
$name = $_POST['name'];
$email = $_POST['email'];
$pswd = $_POST['pswd'];
echo "$name";
echo "$email";
echo "$pswd";
if(isset($_POST['Submit'])) {
$result = mysqli_query($mysqli, "INSERT INTO users_data values ('$name','$Email','$Pswd')");
echo "Succefully Signed Up!";
header ("Location:fillform.html");
}
?>