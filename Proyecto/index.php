<?php 
session_start();

$loged = isset($_SESSION['correo']);
$email = isset($_SESSION['correo']) ? $_SESSION['correo'] : '';
$nombre = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : '';
$direccion = isset($_SESSION['direccion']) ? $_SESSION['direccion'] : '';
?>
<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>18 Horas la familia</title>
    <link rel="icon" href="imagenes/logo_producto_redondeado.png" type="image">
    <link rel="stylesheet" href="estilos/main.css" />
  </head>
  
  <body>
    
      <header class="encabezado">
        <div class="logo">
          <img src="imagenes/logo.png" alt="Logo" />
        </div>

        <nav class="botones_nav">
          
          <div class="signup_div">
            <a id="signup" href="signup.php" class="signup">Registrarse</a>
            <a id="perfil_escondido" class="perfil_usuario_escondido mostrar" href="perfil.php"></a>
          </div>
          
          <div class="login_div">
            <p id="nombre_usuario" class="nombre_usuario_escondido">  <?php echo htmlspecialchars($nombre)?></p>
            <a id="login" href="login.php" class="login">Ingresar</a>
          </div>

          <div class="darkmode_div">
            <div class="darkmode" id="Mode">
              <div id="luna" class="icon1"></div>
              <div id="sol" class="icon2 hidden"></div>
            </div>
          </div>

        </nav>
    </header>

      <div class="contenedor">
        <div class="principal_primer_mitad border_1">
          <div class="nombre_pizzeria_escondido">
          <h1>18 Horas y Pizzeria La Familia</h1>
          </div>
          <div class="imagen_pizzeria_div">
          </div>
          <div class="direccion_pizzeria_div">
            <div class="palabra_direccion">
              <p>Dirección:</p>
            </div>

            <div class="direccion">
              <div class="direccion_pizzeria">
                <p>Uruguay 1871 entre Felipe Argento y Vicente Mongrell</p>
              </div>
            </div>
          </div>
        </div>

        <div class="principal_segunda_mitad border_2">
          <div class="nombre_pizzeria">
            <h1>18 Horas y Pizzeria La Familia</h1>
          </div>
          <section class="carrusel_container">
            <div class="carrusel">
              <div class="slides">
                <div class="slide"><img src="imagenes/producto1.jpeg" alt="Imagen 1" /></div>
                <div class="slide"><img src="imagenes/producto2.jpeg" alt="Imagen 2" /></div>
                <div class="slide"><img src="imagenes/producto3.jpeg" alt="Imagen 3" /></div>
                <div class="slide"><img src="imagenes/producto4.jpeg" alt="Imagen 4" /></div>
                <div class="slide"><img src="imagenes/producto5.jpeg" alt="Imagen 5" /></div>
              </div>
            </div>
          </section>
          <div class="frase_precio_almacen">
            <h1>¡Precios de almacen en pedidos!</h1>
          </div>
          <div class="hacer_pedido">
            <a class="boton_hacer_pedido" href="Catalogo.php">Hacer pedido</a>
          </div>
        </div>
        </div>
      <footer class="pie">
        <a class="sobre_nosotros" href="sobrenosotros.php">About us...</a>
        <a class="cambiar_lenguaje" href="">Change language...</a>
      </footer>

      <section class="div_escondido">
      
      <div class="signup_div2">
            <a id="signup2" href="signup.php" class="signup2">Registrarse</a>
            <a id="perfil_escondido2" class="perfil_usuario_escondido mostrar" href="perfil.php"></a>
          </div>
          
          <div class="login_div2">
            <p id="nombre_usuario" class="nombre_usuario_escondido2"><?php echo htmlspecialchars($nombre)?></p>
            <a id="login2" href="login.php" class="login2">Ingresar</a>
          </div>
      </section>
  
    <script>
      const loged = <?php echo json_encode($loged); ?>;
    </script>
    <script src="script/script.js"></script>
  </body>
</html>
