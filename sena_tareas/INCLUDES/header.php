<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SenaTareas</title>
    <link rel="stylesheet" href="/CSS/styles.css">

</head>
<div class="div">
<p>FUTUROS PROGRAMADORES SI NUESTRO DIOS LO PERMITE</p>
</div>

<body>

    <header>

        <div class="navbar">
            <div class="titulo">
                <a href="../index.php">
                    <h1>
                        SenaTareas
                    </h1>
                </a>
            </div>
            <div class="enlaces">
                <?php
            
                if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
                    ?>
                    <a href="/FUNCIONES/cerrar_seccion.php">cerrar session</a>
                    <?php
                }else {
                    echo '<a href="/login.php">Iniciar Seccion</a>';
                    echo '<a href="/FUNCIONES/insertar_registro.php">Crear cuenta</a>';
                }
                ?>
            </div>
        </div>

    </header>