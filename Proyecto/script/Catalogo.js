
document.getElementById('BotonAbrirCarrito').addEventListener('click', function() {
    this.style.display = 'none';
    const carrito = document.getElementById('Carrito');
    carrito.style.display = 'grid'; 
    setTimeout(function() {
        carrito.classList.add('show'); 
    }, 10); 
});

document.getElementById('BotonCerrarCarrito').addEventListener('click', function(event) {
    event.stopPropagation();
    const carrito = document.getElementById('Carrito');
    carrito.classList.remove('show'); 
    setTimeout(function() {
        carrito.style.display = 'none';
    }, 500);
    document.getElementById('BotonAbrirCarrito').style.display = 'grid';
});

function actualizarDisplayCarrito() {
    const carrito = document.getElementById('Carrito');
    
    if (window.innerWidth > 1250) {
      carrito.style.display = 'grid';
    } else {
      carrito.style.display = ''; 
    }
  }

  actualizarDisplayCarrito();
  window.addEventListener('resize', actualizarDisplayCarrito);




  document.querySelectorAll('.BotonComentario').forEach(button => {
    button.addEventListener('click', function() {
        const descripcion = document.getElementById('DescripcionProductoSeleccion');
        descripcion.classList.remove('hide');
        descripcion.style.display = 'flex'; 
        setTimeout(() => {
            descripcion.classList.add('show'); 
        }, 10); 
    });
});

  document.getElementById('BotonCancelarDescripcion').addEventListener('click', function(event) {
    const descripcion = document.getElementById('DescripcionProductoSeleccion');
    descripcion.classList.remove('show'); 
    descripcion.classList.add('hide'); 
    setTimeout(() => {
      descripcion.style.display = 'none'; 
    }, 500); 
    event.stopPropagation();
  });

  document.addEventListener('mousemove', (event) => {
    const elements = document.querySelectorAll('.Eleccion, .VolverAtrasEleccion, .Eleccion2');
    elements.forEach(element => {
        const elementRect = element.getBoundingClientRect();
        const mouseX = event.clientX;
        const mouseY = event.clientY;
        const centerX = elementRect.left + elementRect.width / 2;
        const centerY = elementRect.top + elementRect.height / 2;
        const offsetX = mouseX - centerX;
        const offsetY = mouseY - centerY;
        // Limita el desplazamiento a 10px
        const maxShadowOffset = 15;
        const boxShadowX = Math.min(Math.max(-offsetX / 10, -maxShadowOffset), maxShadowOffset);
        const boxShadowY = Math.min(Math.max(-offsetY / 10, -maxShadowOffset), maxShadowOffset);
        // Aplica una sombra con difuminado
        element.style.boxShadow = `${boxShadowX}px ${boxShadowY}px 15px rgba(0, 0, 0, 0.4)`;
    });
});



// Selecciona todos los elementos con el nombre 'Eleccion2'
const elecciones = document.querySelectorAll('[id="Eleccion2"]');

elecciones.forEach(eleccion => {
    // Encuentra el hijo con el id 'InfoEleccion2'
    const infoEleccion2 = eleccion.querySelector('#InfoEleccion2');
    
    // Asegúrate de que 'InfoEleccion2' existe antes de agregar los event listeners
    if (infoEleccion2) {
        eleccion.addEventListener('mouseenter', () => {
            infoEleccion2.style.display = 'grid';
        });
        
        infoEleccion2.addEventListener('mouseenter', () => {
            infoEleccion2.style.display = 'grid';
        });
        
        eleccion.addEventListener('mouseleave', () => {
            const isOverInfo = infoEleccion2.matches(':hover');
            if (!isOverInfo) {
                infoEleccion2.style.display = 'none';
            }
        });
        
        infoEleccion2.addEventListener('mouseleave', () => {
            infoEleccion2.style.display = 'none';
        });
    }
});


const infoElecciones = document.querySelectorAll('#InfoEleccion2');
infoElecciones.forEach(infoEleccion2 => {
    infoEleccion2.addEventListener('click', function() {
        // Encuentra el modal asociado con este elemento
        var modal = document.getElementById('VentanaModalProducto');
        modal.classList.remove('hide');
        modal.classList.add('show');
    });
});
const cerrarVMs = document.querySelectorAll('#CerrarVM');
cerrarVMs.forEach(cerrarVM => {
    cerrarVM.addEventListener('click', function() {
        var modal = document.getElementById('VentanaModalProducto');
        modal.classList.remove('show');
        modal.classList.add('hide');
        setTimeout(function() {
        }, 500);
    });
});

document.getElementById("VolverAtrasEleccion").onclick = function () {
    window.location.href = "index.php";
};
