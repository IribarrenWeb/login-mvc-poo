$(document).ready(function()
{
	$('button').on('click',function()
	{

		let username = $(':text').val()
		let password = $(':password').val()

		$.ajax({
			url: '../data/valiData.php',
			type: 'POST',
			data: { username, password },
			success: function(response)
			{
				let validate = JSON.parse(response);

				if (validate.estado == true) 
				{
					$("body").overhang({
					  type: "success",
					  message: "Conectado correctamente, redirigiendo...",
					  callback: function()
					  {
					  	 // window.location.assign("panel.php");
					  	 console.log(validate.nombre);
					  }
					});
				}
				else
				{
					$("body").overhang({
					  type: "error",
					  message: "Credenciales incorrectas",
					  closeConfirm: false
					});
				}
			},
			error: function()
			{
				$("body").overhang({
				  type: "error",
				  message: "Algo ha salido mal",
				  closeConfirm: true
				});
			}
		})
	
	})
})