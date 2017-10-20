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
	        <button id="' . $row['id'] . '" type="button" class="book btn btn-lg btn-book btn-warning" data-toggle="modal" data-target=".book' . $row['id'] . '" data-whatever="bike ' . $row['id'] . '">Book</button>
	  </div>
		<div class="modal fade book' . $row['id'] . '" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Book </h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form>
		          <div class="form-group">
		            <label for="datepicker" class="form-control-label">Date:</label>
		            <input type="text" class="form-control" id="datepicker">
		          </div>
		          <div class="form-group">
					    <select id="startTime" class="sod timeSelect custom-select">
			          		<option value="ph" selected="selected">START</option>
			          		<!-- More options loaded dynamically -->
				        	<option value="08:00" class="time_00">08:00</option>
				        	<option value="09:00" class="time_00">09:00</option>
				        	<option value="10:00" class="time_00">10:00</option>
				        	<option value="11:00" class="time_00">11:00</option>
				        	<option value="12:00" class="time_00">12:00</option>
				        	<option value="13:00" class="time_00">13:00</option>
				        	<option value="14:00" class="time_00">14:00</option>
				        	<option value="15:00" class="time_00">15:00</option>
				        	<option value="16:00" class="time_00">16:00</option>
				        	<option value="17:00" class="time_00">17:00</option>
				        	<option value="18:00" class="time_00">18:00</option>
				        	<option value="19:00" class="time_00">19:00</option>
			        	</select>
			        	<select id="startTime" class="sod timeSelect custom-select">
			          		<option value="ph" selected="selected">END</option>
			          		<!-- More options loaded dynamically -->
				        	<option value="08:00" class="time_00">08:00</option>
				        	<option value="09:00" class="time_00">09:00</option>
				        	<option value="10:00" class="time_00">10:00</option>
				        	<option value="11:00" class="time_00">11:00</option>
				        	<option value="12:00" class="time_00">12:00</option>
				        	<option value="13:00" class="time_00">13:00</option>
				        	<option value="14:00" class="time_00">14:00</option>
				        	<option value="15:00" class="time_00">15:00</option>
				        	<option value="16:00" class="time_00">16:00</option>
				        	<option value="17:00" class="time_00">17:00</option>
				        	<option value="18:00" class="time_00">18:00</option>
				        	<option value="19:00" class="time_00">19:00</option>
			        	</select>
		          </div>
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Send message</button>
		      </div>
		    </div>
		  </div>
		</div>';

mysqli_close($con);