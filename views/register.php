<?php require_once '../includes/head.php'; ?>


    <main id="content">
        <form id="login">
            <h1>Registro de Usuario</h1>
            <hr>
            <!-- Name input -->
            <span class="icon name"></span>
            <input type="text" name="name" placeholder="Name">

            <!-- User input -->
            <span class="icon user"></span>
            <input type="text" name="username" placeholder="Username">

            <!-- Email input -->
            <span class="icon email"></span>
            <input type="text" name="email" placeholder="Email">

            <!-- Pass input -->
            <span class="icon pass"></span>
            <input type="password" name="password" placeholder="password">
            <button type="submit">Registrar</button>
        </form>
    </main>

<?php require_once '../includes/foot.php'; ?>