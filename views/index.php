<?php 
	
	require_once "../controllers/UserControll.php"; 
	require_once '../includes/head.php';

//	UserController::getDataLogin('keinheriri','1234');
?>


	<main id="content">
		<div id="login">
			<h1>Login</h1>
			<input type="text" name="username" placeholder="username">
			<input type="password" name="password" placeholder="password">
			<button>Ingresar</button>
		</div>
	</main>

<?php require_once '../includes/foot.php'; ?>
