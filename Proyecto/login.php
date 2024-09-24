<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/logo_producto_redondeado.png" type="image">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Ingresar</title>
</head>
<body>

    <header class="encabezado">
            <img src="imagenes/logo.png" alt="" style="cursor: pointer;" onclick="window.location.href='index.php';">
    </header>

    <section class="container">
        <div class="mitad_1">
            <div class="volver_atras">
                <a href="index.php"></a>
            </div>
            <div>
            <h1 class="titulo_ingresar">Login</h1>
            <p class="frase_mitad_1">Entra para disfrutar de todas las características</p>
            <form class="form_login" action="BASEDEDATOS/login.php" method="post">
                <input id="email" name="email" type="email" placeholder="Correo electrónico">
                <input id="password" name="password" type="password" placeholder="Contraseña">
                <button type="submit" name="envio">Log in</button>
                <hr>
            </form>
            <?php
                if (isset($_GET['error'])) {
                echo '<p class="error_mensaje">' . htmlspecialchars($_GET['error']) . '</p>';
                    }
            ?>
            <section class="botones_login">
                <div class="google_contenedor">
                    <div class="google"></div>
                </div>
                <div class="facebook_contenedor">
                    <div class="facebook"></div>
                </div>
            </section>
        </div>
        </div>
        <div class="mitad_2">
            <p>Loguearte te permite autocompletar datos al realizar un pedido</p>
            <form class="formulario_signup" action="">
                <input id="nombre_autocompletar" type="text" readonly>
                <input id="email_autocompletar" type="text" readonly>
                <input id="direccion_autocompletar" type="text" readonly>
            </form>
            <div class="pie_mitad_2">
                <h4>¿No tienes una cuenta?</h4>
                <a class="boton_registrarse_mitad_2" href="signup.php">Registrarse</a>
            </div>
        </div>
    </section>
    <script src="script/script2.js"></script>
    <?php 
        include('footer.html');
    ?>
</body>
</html>
