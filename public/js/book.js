$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var bike = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Book ' + bike)
})

$(document).ready(function() {
	book();
	bookBike();
}) 

$( function() {
	$( "#datepicker" ).datepicker({
		dateFormat: "yy-mm-dd"
	});
} );

function book() {
	$('.book').click(function() {
		var id = $(this).attr('id');
			$.ajax({
	        method: 'GET',
	        url: 'bike/checkbooking.php?' + 'id=' + id,
	        success: function (html) {	        
	        	$(html).appendTo(document.body);
	        },
	        error: function () {
	        }
		})
	})
}

function bookBike() {
	$('.book-bike').click(function() {
		var bike_id = $(this).attr('id');
		var date = document.getElementById('datepicker').value
		var time_start = document.getElementById('start' + bike_id).value;
		var time_end = document.getElementById('end' + bike_id).value;
		console.log(time_start);
		console.log(time_end);
		console.log(date);
		console.log(bike_id);
/*		var sessionValue = '<%=Session["user_id"]%>';
	    var cookie = Cookies.get('bookOne');
	    console.log(cookie);*/
		if (parseInt(time_end) < parseInt(time_start)) {
            alert('wrong date');
        }
        else {
			$.ajax({
		        method: 'POST',
		        url: 'bike/book.php?' + 'bike_id=' + bike_id + '&date=' + date + '&start=' + time_start + '&end=' + time_end,
		        data:'bike_id=' + bike_id + '&date=' + date + '&start=' + time_start + '&end=' + time_end,
		        success: function () {      
		        	window.location.reload();
		        },
		        error: function () {
		        	console.log('deo dc haha');
		        }
			})
		}
	})
}