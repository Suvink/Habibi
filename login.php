<?php
session_start();

$username = $_POST['username'];
$pw = $_POST['pw'];
$role = $_POST['role'];

echo $username;
echo pw;
echo role;

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "partymania";
// // Create connection
// $con = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($con->connect_error) {
//     die("Connection failed: " . $con->connect_error);
// } 

// $result = mysqli_query($con, 'SELECT id FROM users WHERE email="'.$email.'" AND password="'.$pw.'"');
//     //echo $result;
//     if(mysqli_num_rows($result) == 1){
//         $row = mysqli_fetch_assoc($result);
//         echo $row["id"];
//         $_SESSION['userid'] = $row["id"];
//         //header('Location: ../profile.php');
//     }
//     else{
//         echo "Wade awl";
//         //header('Location: ../login.html');
//     }

?>