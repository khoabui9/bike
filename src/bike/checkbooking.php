<?php

include '../config.php';

$url = $_SERVER["REQUEST_URI"];
$parts = parse_url($url);
parse_str($parts['query'], $query);

$bike_id = $query['id'];
/*$user_id = $query['session'];*/

$query1 = "SELECT * FROM reservation WHERE bike_id = " . $bike_id;

$result = mysqli_query($con, $query1);


while($row = mysqli_fetch_array($result)){
    $diff = $row['time_end'] - $row['time_start'];
	$time_start = $row['time_start'];
	$time_end = $row['time_end'];
	$date = $row['date'];

	echo '
	<script>
		$(".date'. $bike_id .'").change(function() {
			var date = $(this).val();
			   $("#start'. $bike_id .'").val($(this).attr("defaultvalue"));
			   $("#end'. $bike_id .'").val($(this).attr("defaultvalue"));

			/*console.log(date);*/
			if (date === "'. $date .'") {
			$("#start'. $bike_id .'").each(function(){
			   /*console.log(this.val());*/
						   for (var i = 0; i < '.$diff.';i++) {
			   		var time = '. $time_start .' + i;
			   		$("#start'. $bike_id .' option[value=" + time + "]").attr("disabled", "disabled");
			   		$("#end'. $bike_id .' option[value=" + time + "]").attr("disabled", "disabled");
			   		$("#start'. $bike_id .' option[value=" + time + "]").css("background", "#c43235");
			   		$("#end'. $bike_id .' option[value=" + time + "]").css("background", "#c43235");
			   
			}
			});
			}
			else {
				$("#start'. $bike_id .'").each(function(){
			   /*console.log(this.val());*/
			   
			   for (var i = 0; i < '.$diff.';i++) {
			   		var time = '. $time_start .' + i;
			   		$("#start'. $bike_id .' option[value=" + time + "]").removeAttr("disabled");
			   		$("#end'. $bike_id .' option[value=" + time + "]").removeAttr("disabled");
			   		$("#start'. $bike_id .' option[value=" + time + "]").css("background", "white");
			   		$("#end'. $bike_id .' option[value=" + time + "]").css("background", "white");
			   
			}
			});
			}
	});
	</script>';
}


/*$row = $result->fetch_assoc();


/*if ($date == date("Y-m-d")) {
	$check = true;
}
else 
	$check = false;*/


