<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo '$nombre_asociacion'; ?> : Match Solidario</title>
    <?php include 'estilos.php'; ?>
</head>
<body>

<?php
    include 'menu.php'
?>

<head class="ficha-asociacion">
    <h1>Has hecho</h1>
    <img src="logo_match.png" alt="logotipo de Match Solidario">
    <img src="assets/imgs/<?php echo '$logo-asociacion'; ?>.png" alt="Logo de <?php echo '$nombre_asociacion'; ?>">
</head>


<main>
<div class="cuerpo-asociacion">

    <div class="llamada_accion">
        <a class="boton" href="<?php echo '$url-asociacion' ?>" target="_blank">Visitar Web</a>
        
        <div class="bocadillo">
            <?php echo '$descripcion-asociacion' ?>
        </div>

        <div class="rrss">
            <a href="mailto:<?php echo '$email_asociacion'?>"><img src="assets/imgs/mail.png" alt="Enviar mail"></a>
            <a href="mailto:<?php echo '$facebook_asociacion'?>"><img src="assets/imgs/facebook.png" alt="Facebook de la asociación"></a>
            <a href="mailto:<?php echo '$twitter_asociacion'?>"><img src="assets/imgs/twitter.png" alt="Twitter de la asociación"></a>
            <a href="mailto:<?php echo '$instagram_asociacion'?>"><img src="assets/imgs/instagram.png" alt="Instagram de la asociación"></a>
        </div>
    </div>
</main>

</div>

<?php
    include 'footer.php';
?>
    
</body>
</html>