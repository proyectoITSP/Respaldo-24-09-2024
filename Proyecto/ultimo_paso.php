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
    <link rel="stylesheet" href="estilos/main4.css">
    <title>Paso final</title>
</head>
<body>
    <section class="encabezado">
        <a href="index.php">
        <div class="boton_volver_inicio"></div>
        </a>
    </section>

    <section class="container">

        <main class="principal">
            <h1>Últimos pasos</h1>
            <form class="form" id="finalForm" action="#">
                <input name="nombre" id="nombre" type="text" placeholder="Nombre">
                <input name="ubicacion" id="ubicacion" type="text" placeholder="Dirección">
                <input name="telefono" id="telefono" type="text" placeholder="Número de celular">
                <select name="select">
                    <option value="value1">Mostrador</option>
                    <option value="value2" selected>Pedido</option>
                    <option value="value3">Comer local</option>
                  </select>
                  <div class="pie_principal">
                    <input type="time" placeholder="Hora del pedido">
                    <select name="select">
                        <option value="value1">Efectivo</option>
                        <option value="value2" selected>Tarjeta</option>
                    </select>
                  </div>
                  <button class="boton_confirmar_pedido" type="submit">Confirmar pedido</button>
            </form>
        </main>

    </section>
    <script src="script/script2.js"></script>
</body>
</html>