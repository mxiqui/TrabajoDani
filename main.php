<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<body>
    <?php
    session_start();
    ?>
    <!-- <div class="containerLogout">
        <img src="./assets/images/salir.png" alt="">
    </div> -->
    <div id="containerLogout">
        <button class="logoutButton">Logout</button>
    </div>
    <button id="btnInicio">Inicio</button>

    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title" id="saludoUsuario">Bienvenido Usuario</h2>

                <label for="username" class="form-label">Username:</label>
                <input type="text" id="username" class="form-control" disabled>

                <label for="password" class="form-label">Password:</label>
                <input type="password" id="password" class="form-control" disabled>

                <label for="direccion" class="form-label">Dirección:</label>
                <input type="text" id="direccion" class="form-control" disabled>

                <button id="btnEditar" class="btn btn-primary mt-3">Editar</button>
                <button id="btnGuardar" class="btn btn-success mt-3" disabled>Guardar</button>
                <button id="btnDarDeBaja" class="btn btn-danger mt-3">Dar de Baja</button>
            </div>
        </div>
    </div>

    <div id="pedido-container" class="container">
    <h2 class="mb-4">Pedidos</h2>

    <div class="pedido-item">
      <span class="mr-2">Nombre del Pedido 1</span>
      <button class="btn btn-success btn-sm" onclick="confirmarPedido(1)">Confirmar</button>
      <button class="btn btn-danger btn-sm" onclick="cancelarPedido(1)">Devolver</button>
    </div>

    <div class="pedido-item">
      <span class="mr-2">Nombre del Pedido 2</span>
      <button class="btn btn-success btn-sm" onclick="confirmarPedido(2)">Confirmar</button>
      <button class="btn btn-danger btn-sm" onclick="cancelarPedido(2)">Devolver</button>
    </div>

    <!-- Puedes agregar más elementos según sea necesario -->

  </div>

    <!-- Enlace al script de Bootstrap (popper.js y jQuery son requeridos) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php
    include("php/Main.php");
    $user = getUserFromCookies();
    $usuario = $user["user"];
    $pass = $user["pass"];
    $direccion = $user["direccion"];
    echo "<script>
    document.getElementById('username').value='$usuario';
    document.getElementById('password').value='$pass';
    document.getElementById('direccion').value='$direccion';
    </script>";
?>


<script>
        document.getElementById("containerLogout").addEventListener("click",(e)=>{
            document.cookie = "user_data=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";

            // Redirige a index.php
            window.location.href = "login.php";
        })

        const saludoUsuario = document.getElementById("saludoUsuario");
        const passwordInput = document.getElementById("password");
        const direccionInput = document.getElementById("direccion");
        const btnEditar = document.getElementById("btnEditar");
        const btnGuardar = document.getElementById("btnGuardar");
        const btnDarDeBaja = document.getElementById("btnDarDeBaja");

        // Evento de clic en el botón "Editar"
        btnEditar.addEventListener("click", () => {
            // Habilitar los inputs
            passwordInput.disabled = false;
            direccionInput.disabled = false;

            // Habilitar el botón "Guardar" y deshabilitar el botón "Editar"
            btnGuardar.disabled = false;
            btnEditar.disabled = true;
        });

        // Evento de clic en el botón "Guardar"
        btnGuardar.addEventListener("click", () => {
            // Deshabilitar los inputs
            usernameInput.disabled = true;
            passwordInput.disabled = true;
            direccionInput.disabled = true;

            // Deshabilitar el botón "Guardar" y habilitar el botón "Editar"
            btnGuardar.disabled = true;
            btnEditar.disabled = false;
        });

        // Evento de clic en el botón "Dar de Baja"
        btnDarDeBaja.addEventListener("click", () => {
            // Implementar lógica para dar de baja al usuario
            alert("Usuario dado de baja");
        });

        document.getElementById("btnInicio").addEventListener("click",(e)=>{
            window.location.href = "/index.php";
        })


        function confirmarPedido(numeroPedido) {
      // Lógica para confirmar el pedido
      console.log(`Pedido ${numeroPedido} confirmado.`);
    }

    function cancelarPedido(numeroPedido) {
      // Lógica para cancelar el pedido
      console.log(`Pedido ${numeroPedido} cancelado.`);
    }


</script>
</body>
</html>