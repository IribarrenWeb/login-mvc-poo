$(document).ready(function(){
	$('button').on('click',function(){
		let username = $(':text').val()
		let password = $(':password').val()

		$.ajax({
			url: '../data/valiData.php',
			type: 'POST',
			data: { username, password },
			success: function()
			{
				alert('loggeado');
			},
			error: function()
			{
				alert('error');
			}
		})
		.done(function() {
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	
	})
})