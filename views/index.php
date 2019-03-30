<?php 

	require_once '../includes/head.php'; 
	
	if (!isset($_SESSION)) 
    {
        session_start();
    }

    if (isset($_SESSION['usuario']['privilegio'])) 
    {
        $url = ($_SESSION['usuario']['privilegio'] == 0) ? 'client' : '';
      	header("location: panel" . $url . ".php");
    }


?>


	<main id="content">
		<div id="login">
			<h1>Login</h1>
			<hr>
			<span class="icon user"></span>
			<input type="text" name="username" placeholder="username">
			<span class="icon pass"></span>
			<input type="password" name="password" placeholder="password">
			<button id="submit">Ingresar</button>
		</div>
	</main>

<?php require_once '../includes/foot.php'; ?>
