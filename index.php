<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=600px, initial-scale=1.0">
    <title>Match Solidario</title>
    <?php include 'estilos.php'; ?>
</head>
<body>
    <div class="cuerpo">
        <?php
        include 'menu.php'
        ?>

        <header>
            <div class="comic-bubble">
                <img class="logo-ppal" src="assets/imgs/logo-match-solidario.png" alt="logotipo de Match Solidario">
                <h1>Hackaton solidario</h1>
            </div>
        </header>

        <main>

            <div class="llamada_accion cb-dcha">
                <p>¡Encuentra tu match más solidario!</p>
                <p>¿A QUÉ ESPERAS?</p>
                <p>¡Tu asociación perfecta está esperando para empezar a cambiar el mundo juntos!</p>

                <a class="boton" href="haz-match.php">¡Haz Match!</a>

            </div>
        </main>

        <!-- 
<div class="comic-bubble">
    Tu texto aquí
</div> -->


        <?php
        include 'footer.php';
        ?>
    </div>
</body>

</html>