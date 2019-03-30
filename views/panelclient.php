<?php 

    if (!isset($_SESSION)) 
    {
        session_start();
    }

    if (!isset($_SESSION['usuario'])) 
    {
        header('location:index.php');
    }

    if ($_SESSION['usuario']['privilegio'] == 1) {
        header('location:panel.php');
    }

    require_once '../includes/head.php'; 

?>

    <main id="content">
        <div id="login">
            <h1>Bienvenido | <span class="text-yellow"><?= ucwords($_SESSION['usuario']['nombre']); ?></span></h1>
            <hr>
            <h3>Panel de control <strong>Cliente</strong></h3>
            <br>
            <p>
                <strong>Email:</strong> <?= $_SESSION['usuario']['email'] ?>
            </p>
            <p>
                <strong>Privilegio:</strong> <span class="tag"><?= ($_SESSION['usuario']['privilegio'] == 1) ? 'Admin' : 'Usuario';  ?></span>
            </p>
            <p>
                <strong>usuario:</strong>   <?= $_SESSION['usuario']['usuario'] ?>
            </p>
            <p>
                <strong>Fecha de creacion:</strong>   <?= $_SESSION['usuario']['date'] ?>
            </p>

            <button class="bgred">Logout</button>
        </div>
    </main>

<?php 

        require_once '../includes/foot.php'; 

?>
