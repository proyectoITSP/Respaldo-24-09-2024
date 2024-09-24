<?php 
session_start();
 if (!isset($_SESSION['correo'])) {
   
    header('Location: login.php');
    exit();
}
$email = $_SESSION['correo'];
$nombre = $_SESSION['nombre'];
$telefono = $_SESSION['telefono'];
$direccion = $_SESSION['ubicacion'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/logo_producto_redondeado.png" type="image">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Perfil usuario</title>
</head>
<body>
    <header class="encabezado">
        <a href="index.php">
            <div class="boton_volver_inicio"></div>
        </a>
    </header>

    <main class="container">
        <section class="cuerpo">

            <div class="mitad1_cuerpo">
                <div class="foto_usuario"></div>
            </div>

            <div class="mitad2_cuerpo">
            <h1 class="titulo_datos_usuarios">Tu cuenta</h1>
            <div class="div_escondido_perfil">
                <div class="foto_usuario"></div>
            </div>
                <p class="campo_dato_usuario"><?php echo $nombre?></p>
                <p class="campo_dato_usuario"><?php echo $email?></p>
                <p class="campo_dato_usuario"><?php echo $direccion?></p>
                <p class="campo_dato_usuario"><?php echo $telefono?></p>
            <div class="pie_cuerpo_perfil">
                <a class="cerrar_sesion" href="BASEDEDATOS/logout.php">Cerrar sesión</a>
                <a class="modificar" href="modificar.php">Modificar</a>
            </div>

            </div>
        </section>
    </main>

</body>
</html>