<?php

function registerUser($userName, $password){
    include("Conexion.php");

    try {
        // Usamos "prepare" en lugar de "query" para una sentencia de inserción
        $sql = "INSERT INTO usuarios (user, pass) VALUES (?, ?)";
        $stmt = $db->prepare($sql);

        // Utilizamos "execute" para ejecutar la sentencia preparada
        $stmt->execute([$userName, $password]);

        echo "<script>
            document.getElementById('informationRegister').style.display='flex';
            document.getElementById('informationRegister').innerText='Usuario registrado con éxito';
        </script>";

    } catch (\PDOException $th) {
        $mensaje = $th->getMessage();
        echo "<script>
            document.getElementById('informationRegister').style.display='flex';
            document.getElementById('informationRegister').innerText='$mensaje';
        </script>";
    }
}



function checkUser($userName) {
    include("Conexion.php");

    try {
        $sql = "SELECT user FROM usuarios WHERE user=?";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(1, $userName, PDO::PARAM_STR);
        $stmt->execute();

        // Comprobar si hay algún usuario
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return true; // El usuario existe
        } else {
            return false; // El usuario no existe
        }

    } catch (\PDOException $th) {
        // Manejar la excepción, puedes imprimir un mensaje de error o registrar el error en algún lugar.
        return false; // Retornar false en caso de error.
    }
}


function checkPassword($password){
    // La contraseña debe contener solo números y letras.
    // Exige como mínimo una mayúscula, una minúscula y un número.
    // No admite espacios en blanco.
    $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]+$/';

    if(preg_match($regex, $password)){
        return true;
    } else {
        return false;
    }
}


function openLogin(){
    echo "<script>
            document.getElementById('loginForm').style.display='block';
            document.getElementById('registerForm').style.display='none';
        </script>";
}


function isPasswordCorrect($username, $password){
    include("Conexion.php");
    try {
        
        $sql = "SELECT user,pass,direccion FROM usuarios WHERE user=? AND pass=?";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(1, $username, PDO::PARAM_STR);
        $stmt->bindParam(2, $password, PDO::PARAM_STR);
        $stmt->execute();

        // Comprobar si hay algún usuario
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            saveUserInCookies($result);
            return true; // El usuario existe
        } else {
            return false; // El usuario no existe
        }

    } catch (\Throwable $th) {
        //throw $th;
    }
}





function saveUserInCookies($user){
    setcookie('user_data', serialize($user), time() + 3600, "/");
}


function getUserFromCookies(){
    // Deserializar el objeto guardado en la cookie
    if (isset($_COOKIE['user_data'])) {
        $user = unserialize($_COOKIE['user_data']);
        return $user;
    } else {
        return null;
    }
}


function searchUsers($username){
    include("Conexion.php");
    $sql = "SELECT * FROM personajes WHERE nombre LIKE :search 
            OR anime LIKE :search 
            OR poder LIKE :search 
            OR descripcion LIKE :search 
            OR imagen LIKE :search";
            
    $stmt = $db->prepare($sql);
    $stmt->execute([':search' => "%" . $username . "%"]);

    $results = $stmt->fetchAll(PDO::FETCH_OBJ);

    if(!empty($results)){
        return $results;
    } else {
        return null;
    }
}


