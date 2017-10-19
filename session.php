<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db($connection, "bike");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
echo $user_check;
// SQL Query To Fetch Complete Information Of User
$query1 = "SELECT email FROM user WHERE email = '$user_check'";
echo $query1;
$result = mysqli_query($connection, $query1);

$row = $result->fetch_assoc();

$login_session =$row['email'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
// header('Location: index.php'); // Redirecting To Home Page
}
?>