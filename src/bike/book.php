<?php

include '../config.php';

session_start();
  if( !isset($_SESSION["login_user"]) ){
    header("location:../../index.php");
    exit();
}
$url = $_SERVER["REQUEST_URI"];
$parts = parse_url($url);
parse_str($parts['query'], $query);

$bike_id = $query['bike_id'];
$user_id=$_SESSION['user_id'];
$date = $query['date'];
$time_start = $query['start'];
$time_end = $query['end'];

$query1 = "INSERT INTO reservation (user_id, bike_id, time_start, time_end, date) VALUES ('$user_id','$bike_id', '$time_start', '$time_end', '$date')";
echo $query1;
//echo $query1;
$insert = mysqli_query($con, $query1) ;
/*if ($insert) {
	$user_book = 'bookOne';
	setcookie($user_book, 'true', time()+(3600*24));
}*/
mysqli_close($con);


