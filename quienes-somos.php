<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=600px, initial-scale=1.0">
    <title>Quiénes somos : Match Solidario</title>
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
            </div>
        </header>

        <main>
            <div class="quienes_somos">
                <p class="texto">
                    Nuestro equipo formado por estudiantes del Centro de Formación Profesional de la Universidad Alfonso X El Sabio, concienciado con las acciones de Red Innicia promueve esta campaña solidaria en la que todos pueden participar. </p>
                <p class="texto">Potenciamos y visibilizamos las acciones de la Red Innicia mediante este proyecto social en conjunto con diversas asociaciones y personalidades que trabajan a favor de la inclusión social.
                </p>
                <div class="cb-dcha">
                    <img class="logo_para_texto" src="./assets/imgs/red-innicia.png" alt="Logo Red Innicia">
                </div>
                <p class="texto">
                    La Red Innicia es una iniciativa impulsada cuyo objetivo común que es aunar sus recursos en el impulso de acciones y proyectos innovadores comunes que den respuestas a las necesidades de la sociedad".
                </p>
            </div>
            <div class="llamada_accion comic-bubble">
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