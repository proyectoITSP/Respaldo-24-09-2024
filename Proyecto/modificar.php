<?php
session_start();
if (!isset($_SESSION['correo'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/logo_producto_redondeado.png" type="image">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Modificar Datos</title>
</head>

<body>
    <section class="encabezado">
        <a href="perfil.php">
            <div class="boton_volver_inicio"></div>
        </a>
    </section>

    <section class="container">
        <div class="cuerpo_modificar_datos_usuario">
            <div class="mitad1_cuerpo">
                <div class="foto_usuario"></div>
            </div>

            <div class="mitad2_cuerpo">
                <h1 class="titulo_datos_usuarios">Modificar Datos</h1>
                <div class="div_escondido_perfil">
                    <div class="foto_usuario"></div>
                </div>
                <form class="formulario_modificar" action="BASEDEDATOS/modificar.php" method="post">
                    <input id="nombreMod" name="nuevoNombre" type="text" placeholder="Nuevo Nombre" required>
                    <input id="correoMod" name="nuevoEmail" type="email" placeholder="Nuevo Correo" required>
                    <input id="contraseñaVieja" name="oldPassword" type="password" placeholder="Contraseña Vieja" required>
                    <input id="contraseñaMod" name="nuevaPassword" type="password" placeholder="Contraseña Nueva" required>
                    <input id="direccionMod" name="nuevaDireccion" type="text" placeholder="Nuevo Domicilio" required>
                    <input id="numeroMod" name="nuevoNumero" type="number" placeholder="Número de Celular" required>
                    <div class="botones_modificar">
                        <button class="modificar" type="submit">Modificar</button>
                        <button class="boton_reset" type="reset">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>

</html>