<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/logo_producto_redondeado.png" type="image">
    <link rel="stylesheet" href="estilos/style.css">
    <title>18 horas la familia</title>
</head>

<body class="body_empresa">

    <header class="encabezado_empresa">
        <img src="imagenes/logo.png" alt="">
        <div class="encabezado_empresa_botones_div">
            <button id="estado_empresa">Abierto</button>
            <a href=""></a>
        </div>
    </header>
    
    <main class="contenedor_pedidos_empresa">
        <div class="tarjeta_pedido">

            <div class="encabezado_tarjeta_pedido">
                <p>1</p>
                <div>
                <button class="btn_confirmar_pedido_empresa"></button>
                <button id="eliminar_pedido" class="btn_cancelar_pedido_empresa"></button>
                </div>
            </div>

            <div class="tipo_pedido">
                <p>Mostrador/Pedido/Mesa</p>
            </div>

            <div class="descripcion_tarjeta_pedido">
                <div class="descripcion_tarjeta_pedido_div">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dicta et aliquam animi illo dolorem, impedit hic, eveniet fuga quam itaque, blanditiis quia aperiam! Iure eveniet quibusdam rem excepturi nobis.</p>
                </div>
            </div>

            <div class="direccion_tarjeta_pedido">
                <p>Uruguay 1871 Mongrell esq Ituzaingo</p>
            </div>

            <div class="tipo_pago_y_precio_tarjeta_pedido">

                <div class="tipo_pago_tarjeta_pedido">
                    <p>Efectivo</p>
                </div>

                <div class="tipo_precio_tarjeta_pedido">
                    <p>$280</p>
                </div>

            </div>

            <div class="pie_tarjeta_pedido">

                <div class="hora_pedido_tarjeta_pedido">
                    <p>21:00</p>
                </div>
                 
                <div class="telefo_cliente_tarjeta_pedido">
                    <p>093781585</p>
                </div>

            </div>

        </div>
        
        <section id="modal_borrar" class="modal_eliminar_producto">

            <div class="mensaje_modal_borrar_pedido_empresa">
                <p>¿Seguro que deseas eliminar este pedido?</p>
            </div>

            <div class="botones_modal_borrar_pedido_empresa">
                <button id="cancelar_borrado" class="cancelar_borrado">No quiero borrar este pedido</button>
                <button class="borrar_pedido_btn">Borrar pedido</button>
            </div>
            
        </section>
        <div class="nav_escondido_empresa">
        <div class="encabezado_empresa_botones_div_2">
            <button id="estado_empresa_2">Abierto</button>
            <a href=""></a>
        </div>
        </div>
    </main> 
<script src="script/script.js"></script>
</body>

</html>