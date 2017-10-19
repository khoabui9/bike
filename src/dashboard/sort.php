<?php
include '../config.php';
	
$url = $_SERVER["REQUEST_URI"];
$parts = parse_url($url);
parse_str($parts['query'], $query);
//echo $query['description'];
$model = $query['model'];
$size = $query['size'];
$location = $query['location'];

if ($model == "null")
	$model = "model IS NOT NULL";
else
	$model = "model = " . "'" . $query['model'] . "'";
if ($size == "null")
	$size = "size IS NOT NULL";
else
	$size = "size = " . "'" .$query['size'] . "'";
if ($location == "null")
	$location = "place IS NOT NULL";
else
	$location = "place = " . "'" . $query['location'] . "'";

$query = "SELECT * FROM bike JOIN location ON location.id = bike.ref_location WHERE " . $model . " AND " . $size . " AND " . $location;
/*echo $query;*/
$results = mysqli_query($con,$query);
while($row = mysqli_fetch_array($results)) { 
	 echo '<a class="" href="./bike_details.php?id='.$row['id'].'">
   				<div id="' . $row['id'] . '" class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="card" style="width: 15rem;">
                       <img class="card-img-top" src="../public/img/' . $row['img'] . '">
                        <div class="card-block">
                            <h5 id="' . $row['id'] . '" class="text text-bold">' . $row['name'] . '</h5>
                            <p id="' . $row['id'] . '" class="text">' . $row['model'] . '</p>
                        </div>
                    </div>
                </div>
            </a>';
}