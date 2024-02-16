<?php

if(isset($_POST["register"])){
    include("Functions.php");
    $userName=$_POST["nameRegister"];
    $password=$_POST["passwordRegister"];
    $password2=$_POST["passwordRegister2"];


    //Comprobar que el username no existe
    if(checkUser($userName)){
        echo "<script>
            document.getElementById('informationRegister').style.display='flex';
            document.getElementById('informationRegister').innerText='Ya existe un usuario con ese nombre de usuario';
        </script>";
    }else{
        if(checkPassword($password)){
            if($password==$password2){
                registerUser($userName,$password);
                openLogin();
            }else{
                echo "<script>
                document.getElementById('informationRegister').style.display='flex';
                document.getElementById('informationRegister').innerText='Las dos contraseñas no coinciden';
            </script>";
            }
        }else{
            echo "<script>
                document.getElementById('informationRegister').style.display='flex';
                document.getElementById('informationRegister').innerText='La contraseña no sigue las normas de seguridad';
            </script>";
        }
    }

}   