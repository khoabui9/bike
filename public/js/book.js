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
	        	console.log(html);
	        	$(html).appendTo(document.body);
	        },
	        error: function () {
	        }
		})
	})
}