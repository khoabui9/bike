$(document).ready(function() {
	sort();
})

function sort() {
	$('.apply').click(function(event) {
		event.preventDefault();
		var $model = $('.model').val();
		var $size = $('.size').val();
		var $location = $('.location').val();
		if ($('.model').val() === 'undefined')
			$model = 'null';
		if ($('.size').val() === 'undefined')
			$size = 'null';
		if ($('.location').val() === 'undefined')
			$location = 'null';
		
		$.ajax({
	        method: 'GET',
	        url: 'dashboard/sort.php?' + 'model=' + $model + '&size=' + $size + '&location=' + $location,
	        success: function (html) {
	        	$('.card-container').html(html);
	        },
	        error: function () {
	        }
    })
	})
}

