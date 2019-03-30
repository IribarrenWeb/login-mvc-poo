<?php 
	if (!isset($_SESSION)) 
    {
        session_start();
    } 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<title>LOGIN MVC POO</title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/overhang.min.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<header id="header" class="">
		<div id="logo">
			LOGO
		</div>
		<div id="nav">
			<ul>
				<?php if (!isset($_SESSION['usuario'])): ?>

					<li><a href="index.php" title="">Login</a></li>
					<li><a href="register.php" title="">Register</a></li>
				
				<?php else : ?>

					<li><a href="<?= ($_SESSION['usuario']['privilegio'] == 1) ? 'panel.php' : 'panelclient.php'?>" title="">Home</a></li>
					<li><a href="#" title="">Panel Control</a></li>
				<?php endif ?>
			</ul>
		</div>
	</header><!-- /header -->