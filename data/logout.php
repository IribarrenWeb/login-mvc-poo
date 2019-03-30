<?php 
    
    session_start();

    if (isset($_SESSION['usuario'])) {
        session_destroy();
        session_unset();
    }
    
    header('location: ../views/index.php');
