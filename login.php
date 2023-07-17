<?php
$databaseHost = 'localhost';
$databaseName = 'register';
$databaseUsername = 'root';
$databasePassword = '';
$conn = mysqli_connect($databaseHost, $databaseUsername,
$databasePassword, $databaseName);
session_start(); 

include "config.php";

if (isset($_POST['email']) && isset($_POST['pswd'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);

    $pswd = validate($_POST['pswd']);

    if (empty($email)) {

        echo '<script>alert("Enter Email and Password")</script>';

        exit();

    }else if(empty($pswd)){

        echo '<script>alert("Enter Email and Password")</script>';

        exit();

    }else{

        $sql = "SELECT * FROM user_data WHERE email='$email' AND pswd='$pswd'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['pswd'] === $pswd) {

                echo '<script>alert("You have logged in !")</script>';

                header("Location: fillform.html");

                exit();

            }else{

                echo '<script>alert("Enter Correct Email and Password")</script>';

                exit();

            }

        }else{

            echo '<script>alert("Enter Correct Email and Password")</script>';

            exit();

        }

    }

}else{

    header("Location: index.html");

    exit();

}
?>
