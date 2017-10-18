<?php
	include './config.php';
    //$db = new Db();
    $query = "SELECT * FROM bike";
    $results = mysqli_query($con,$query);
    /*$rowcount =mysqli_num_rows($results);*/
    /*setcookie("numList", $rowcount, time() + 3600);*/
    while($row = mysqli_fetch_array($results)){
       echo ' <a href="./bike_details.php?id='.$row['id'].'">
	       				<div id="' . $row['id'] . '" class="col-sm-6 col-md-4 col-lg-3 mt-4">
	                        <div class="card" style="width: 15rem;">
	                           <img class="card-img-top" src="../public/img/' . $row['img'] . '">
	                            <div class="card-block">
	                                <h5 id="' . $row['id'] . '" class="text-bold">' . $row['model'] . '</h5>
	                            </div>
	                        </div>
	                    </div>
                    </a>';
    }
?>