<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/logo_producto_redondeado.png" type="image">
    <link rel="stylesheet" href="estilos/Catalogo.css">
    <title>Catalogo</title>
</head>
<body>
    <main class="Contenedor">

        <section class="Encabezado">
            <article class="TituloCatalogo">
                Catálogo
            </article>
            <article class="TituloVersatil">
                Secciones
            </article>
        </section>

        <section class="Carrito" id="Carrito">
            <article class="CarritoContenedor">
                <div class="TituloCarrito">
                    Carrito
                </div>
                <article class="CarritoDisplay">
                    <div class="CarritoProductos">
                        <div class="ProductosSeleccionados">

                            <div class="ProductoSeleccion">
                                <div class="CantidadProducto">
                                    <div class="CantidadBotonA">
                                        <div class="AumentarBoton">+</div>
                                    </div>
                                    <div class="CantidadIndicador">x1</div>
                                    <div class="CantidadBotonB">
                                        <div class="ReducirBoton">-</div>
                                    </div>
                                </div>
                                <div class="NombreProductoSeleccionados">
                                    <div class="NombreProductoSeleccionado">
                                        Hamburguesa
                                    </div>
                                </div>
                                <div class="PrecioProducto">
                                    <div class="PrecioProductoSeleccionado">
                                        $280
                                    </div>
                                </div>
                                <div class="BotonComentarioContenedor">
                                    <div class="BotonComentario" id="BotonComentario">
                                        <div class="ImagenBotonComentario">
                                        </div>
                                        <div class="IndicadorEscritura">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                          

                        </div>
                        <div class="CarritoTotal">
                            Total: $0
                        </div>
                </article>
                <div class="CarritoBotonContenedor">
                    <div class="CarritoBoton">
                        Mandar Pedido
                    </div>
                </div>
                <div class="ContenedorBotonCerrar">
                    <div class="BotonCerrarCarrito" id="BotonCerrarCarrito">
                        <div class="ImagenCerrarCarrito">
                        </div>
                    </div>
                </div>

                
                            <article class="DescripcionProductoSeleccion" id="DescripcionProductoSeleccion">
                            <div class="TituloDescripcionSeleccion">Descripción:</div>
                            <textarea class="InputDescripcionSeleccion">Escribe preferencias acerca del producto. Ejemplo: Pizza sin Aceitunas</textarea>
                            <div class="BotonesDescripcionSeleccion">
                            <div class="BotonAceptarDescripcion" id="BotonAceptarDescripcion">Aceptar</div>
                            <div class="BotonCancelarDescripcion" id="BotonCancelarDescripcion">Cancelar</div>
                            </div>
                            </article>
            </article>

        </section>
        <section class="Catalogo">

            <div id="VolverAtrasEleccion" class="VolverAtrasEleccion">
                   <div class="ImagenVolverAtrasEleccion"></div>
            </div>

            <div class="VentanaModalProducto" id="VentanaModalProducto">

                <div class="ContainerVMNyI">
                <div class="ImagenVMProducto">
                 <div class="CargarImagenVMProducto">

                 </div>
                </div>
                <div class="NombreVMProducto">
                    <div class="NombreVMProductoTexto">
                     Hamburguesa
                    </div>
                </div>
                </div>
                <div class="DescripcionVMProducto">
                <textarea class="DescripcionVMProductoTexto"  readonly> Contiene lechuga, tomate, jamon, queso, huevo frito, aceitunas, morron, pickles, hongos, cebolla, arveja, choclo, mayonesa y de guarnición fritas</textarea>
                </div>
                 <div class="CerrarVM" id="CerrarVM">
                  X
                 </div>
            </div>

        </section>
        <section class="ContenedorBotonAbrirCarrito">
            <div class="BotonAbrirCarrito" id="BotonAbrirCarrito">
                <div class="ImagenAbrirCarrito">
                </div>
            </div>
        </section>
    </main>
</body>
<script src="script/Catalogo.js"></script>

</html>