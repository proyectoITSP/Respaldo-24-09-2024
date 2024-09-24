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
    <link rel="stylesheet" href="estilos/main5.css">
    <title>Confirmar pedido</title>
</head>
<body>

    <header class="encabezado">
        <a href="index.php">
            <div class="boton_volver_inicio"></div>
        </a>
    </header>

    <main class="container">

        <section class="principal">
            <h1>¡Muchas gracias por tu pedido!</h1>
            <p>Para colaborarnos, aprieta el botón confirmar pedido cuando tu pedido halla llegado, esto nos enviara un aviso a nosotros de que se recibió correctamente
            ¡Muchas gracias!</p>
            <button class="btn_confirmar_llegada">Confirmar <br> llegada</button>
            <div class="pie_principal_botones">
                <form action="index.php">
                    <button class="btn_volver_atras">Volver para <br> atras</button>
                </form>
                <button class="btn_cancelar_pedido">Cancelar <br> pedido</button>
            </div>
        </section>

    </main>

</body>
</html>