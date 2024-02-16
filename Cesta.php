<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .containerCompra {
            width: 750px;
            height: 500px;
            padding: 20px;
            border-radius: 20px;
            background: #000;
            color: #fff;
        }
        .producto {
            margin-bottom: 10px;
        }
        .producto button {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="containerCompra">
        <div class="containerProductosCompra" id="containerProductosCompra">
            <!-- Aquí se mostrarán los productos -->
        </div>
        <input type="text" placeholder="Direccion de envio">
        <button onclick="hacerCompra()">Hacer Compra</button>
        <button onclick="vaciarCesta()">Vaciar Cesta</button>
    </div>

    <script>
        // Función para obtener los productos de la sesión "Cesta"
        function obtenerProductosDeSesion() {
            // Simulamos una sesión con productos
            var cesta = JSON.parse(sessionStorage.getItem("Cesta"));
            return cesta ? cesta : [];
        }

        // Función para guardar los productos en la sesión "Cesta"
        function guardarProductosEnSesion(productos) {
            sessionStorage.setItem("Cesta", JSON.stringify(productos));
        }

        // Función para generar el HTML de los productos en la cesta
        function mostrarProductosEnCesta() {
            var container = document.getElementById("containerProductosCompra");
            container.innerHTML = ""; // Limpiar el contenido previo

            var productosEnCesta = obtenerProductosDeSesion();

            productosEnCesta.forEach(function(producto, index) {
                var productoHTML = '<div class="producto">' +
                                    '<span>' + producto.name + '</span>' +
                                    '<span>' + producto.precio + '</span>' +
                                    '<button onclick="eliminarProducto(' + index + ')">Eliminar</button>' +
                                    '</div>';
                container.innerHTML += productoHTML;
            });
        }

        // Función para realizar la compra
        function hacerCompra() {
            // Aquí podrías escribir el código para procesar la compra
            alert("Compra realizada correctamente");
        }

        // Función para vaciar la cesta
        function vaciarCesta() {
            guardarProductosEnSesion([]); // Vaciar la sesión "Cesta"
            mostrarProductosEnCesta(); // Actualizar la visualización
        }

        // Función para eliminar un producto de la cesta
        function eliminarProducto(index) {
            var productosEnCesta = obtenerProductosDeSesion();
            productosEnCesta.splice(index, 1); // Eliminar el producto del array
            guardarProductosEnSesion(productosEnCesta); // Actualizar la sesión
            mostrarProductosEnCesta(); // Actualizar la visualización
        }

        // Mostrar los productos al cargar la página
        mostrarProductosEnCesta();
    </script>
</body>
</html>
