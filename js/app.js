$(document).ready(function()
{
	$('#submit').on('click',function()
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
					  	 if (validate.privilegio == 1) 
					  	 {
						  	 window.location.assign("panel.php");
					  	 }
					  	 else
					  	 {
						  	 window.location.assign("panelclient.php");
					  	 }
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

	$('.bgred').on('click',function(){

		$("body").overhang({
		  type: "confirm",
		  primary: "#40D47E",
		  accent: "#27AE60",
		  yesColor: "#3498DB",
		  message: "Quieres desloguearte?",
		  overlay: true,
		  callback: function (value) 
		  {
		    var response = value ? "Si" : "No";
		  
		    if (response == 'Si') 
		    {
		    	window.location.assign('../data/logout.php');
		    }
		  
		  }
		});

	});

	$('#login').submit(function(e)
	{
		e.preventDefault();

		let userRegister = $('#login').serialize();

		$.ajax({
			url: '../data/valiDataReg.php',
			type: 'POST',
			data: { userRegister },
			success: function(response)
			{
				let validate = JSON.parse(response);

				console.log(response);
				if (validate.estado == true) 
				{
					$("body").overhang({
					  type: "success",
					  message: "Se ha registrado correctamente, redirigiendo al panel...",
					  callback: function()
					  {		
					  	 if (validate.privilegio == 1) 
					  	 {
						  	 window.location.assign("panel.php");
					  	 }
					  	 else
					  	 {
						  	 window.location.assign("panelclient.php");
					  	 }
					  }
					});	
				}
				else
				{
					$("body").overhang({
					  type: "error",
					  message: "Campos vacios o usuario ya existe.",
					  closeConfirm: false
					});
				}
			},
			error: function()
			{
				$("body").overhang({
				  type: "error",
				  message: "Algo ha salido mal, intente mas tarde...",
				  closeConfirm: false
				});
			}
		})
		
	})
})