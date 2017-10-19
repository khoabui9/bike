<?php
include './config.php';

$url = $_SERVER["REQUEST_URI"];
$parts = parse_url($url);
parse_str($parts['query'], $query);
//echo $query['description'];
$id = $query['id'];
$query1 = "SELECT * FROM bike WHERE id = " . $id;
//echo $query1;
$result = mysqli_query($con, $query1);

$row = $result->fetch_assoc();

echo '<div id="' . $row['id'] . '" class="col-sm-12 bike_detail" style="padding: 0;  background-image: url(../public/img/' . $row['img'] . ');">
	    </div>
	    <div class="col-sm-6">
	        <h1>' . $row['name'] . '</h1>
	        <h5>Model: ' . $row['model'] . ' bike</h5>
	        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
	    </div>
	    <div class="col-sm-6 text-center button-book-container">
	        <button id="' . $row['id'] . '" type="button" class="btn btn-lg btn-book btn-warning">Book</button>
	  </div>';

mysqli_close($con);