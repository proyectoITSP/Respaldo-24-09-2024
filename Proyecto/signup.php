<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/logo_producto_redondeado.png" type="image">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Registrarse</title>
</head>
<body>

<section class="encabezado">
    <img src="imagenes/logo.png" alt="" style="cursor: pointer;" onclick="window.location.href='index.php';">
</section>

<main class="container_signup">
    <div class="mitad_1_signup">
        <div class="volver_atras">
            <a href="index.php"></a>
        </div>
        <div>
        <p>Registrarte te permite autocompletar datos al realizar un pedido</p>
        <form class="formulario_login" action="">
            <input id="nombre_autocompletar" type="text" readonly>
            <input id="email_autocompletar" type="text" readonly>
            <input id="direccion_autocompletar" type="text" readonly>
        </form>
        <div class="pie_mitad_1">
            <h4>¿No tienes una cuenta?</h4>
            <a class="boton_registrarse_mitad_1" href="login.php">Ingresar</a>
        </div>
    </div>
    </div>

    <div class="mitad_2_signup">
        <h1>Signup</h1>
        <p>Registrate para acceder a características nuevas!</p>
        <form class="form" action="BASEDEDATOS/signup.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="email" name="email" placeholder="Correo electrónico">
            <input type="password" name="password" placeholder="Contraseña">
            <input type="text" name="telefono" placeholder="Número de teléfono">
            <input type="text" name="ubicacion" placeholder="Domicilio">

            <div class="pie_mitad_2">
                <div class="google_mayor">
                    <div class="google"></div>
                </div>
                <button class="boton_registrarse_mitad_2" type="submit" name="envio">Registrarse</button>
                <div class="facebook_mayor">
                    <div class="facebook"></div>
                </div>
            </div>
            <div class="error_mensaje">
            <?php
            if (isset($_GET['error_signup'])) {
                echo '<p>' . htmlspecialchars($_GET['error_signup']) . '</p>';
            }
            ?>
            </div>
        </form>
    </div>
    </main>
<script src="script/script2.js"></script>
<?php 
    include('footer.html');
?>
</body>
</html>
