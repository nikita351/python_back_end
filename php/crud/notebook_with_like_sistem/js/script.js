$(document).ready(function() {
	$(".like").bind("click", function() {
		let link = $(this);
		let id = link.data('id');
		$.ajax({
			url: "../crud/get_likes.php",
			type: "POST",
			data: {id:id},
			dataType: "json",
		});
	});
});