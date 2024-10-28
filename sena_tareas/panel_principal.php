<div class="panel">
    <?php
    include 'includes/header.php';
    session_start();
    ?>

    <div class="p">
        <p> Bienvenido <?php echo $_SESSION['rol'] . ' ' . $_SESSION['nombre']; ?></p>
    </div>
    <div class="a">
        <a href="./FUNCIONES/cerrar_seccion.php">Cerrar session</a>
    </div>
    <?php
    if ($_SESSION['rol'] == 'Instructor') {
        require __DIR__ . '/includes/panel_instructor.php';
    } else {
        require __DIR__ . '/includes/panel_aprendiz.php';
    }

    ?>
</div>