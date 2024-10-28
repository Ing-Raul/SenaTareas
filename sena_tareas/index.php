<?php
include 'includes/header.php';
?>


<div class="hero">
    <div class="negro">
        <div class="texto">

            <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tAVDZbtwcJ4?si=8kPeKLeXFScvrsM1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    
            </div>
            <?php
            include 'includes/conexion_bd.php';
            include './frases.php';
            echo $fraseAleatoria
            ?>

        </div>

    </div>
</div>


<?php include 'includes/footer.php' ?>