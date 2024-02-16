<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/styles/login.css">
</head>
<body>

<?php
    if (isset($_COOKIE['user_data'])) {
        // Redirige al usuario a main.php enviando la cookie
        header('Location: main.php');
        exit();
    }
?>

    <form action="" method="POST" class="loginForm" id="loginForm">
        <h2>Login</h2>
        <div class="contenedor">
            <div class="input-container">
                <input type="text" name="name" id="name" required placeholder="Name">
                <label for="name">Username</label>
            </div>
        </div>

        <div class="contenedor">
            <div class="input-container">
                <input type="password" name="password" id="password" required placeholder="Password">
                <label for="password">Password</label>
            </div>
        </div>
        <div class="informationLogin" id="informationLogin">
            Usuario creado con exito
        </div>
        <input type="submit" value="Login" id="login" name="login">
        <p class="noTengoCuenta">Don't have account? <a href="#" id="btnn">Sign up</a></p>
    </form>






    <form action="" method="POST" class="registerForm" id="registerForm" style="display: none;">
        <h2>Register</h2>
        <div class="contenedor">
            <div class="input-container">
                <input type="text" name="nameRegister" id="nameRegister" required placeholder="Name">
                <label for="name">Username</label>
            </div>
        </div>

        <div class="contenedor">
            <div class="input-container">
                <input type="password" name="passwordRegister" id="passwordRegister" required placeholder="Password">
                <label for="password">Password</label>
            </div>
        </div>

        <div class="contenedor">
            <div class="input-container">
                <input type="password" name="passwordRegister2" id="passwordRegister2" required placeholder="Repeat password">
                <label for="password">Repeat password</label>
            </div>
        </div>

        <div class="informationRegister" id="informationRegister">
            Usuario creado con exito
        </div>
        <input type="submit" value="Register" id="register" name="register">
    </form>
    
    <?php

        include("php/Register.php");
        include("php/Login.php");

    ?>
    <script src="./php.js"></script>
</body>
</html>