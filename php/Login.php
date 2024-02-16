<?php

if(isset($_POST["login"])){
    include("Functions.php");
    $userName=$_POST["name"];
    $password=$_POST["password"];

    if(isPasswordCorrect($userName,$password)){
        header('Location: main.php');
        exit();
    }else{
        echo "<script>
            document.getElementById('informationLogin').style.display='flex';
            document.getElementById('informationLogin').innerText='Usuario o clave incorecta';
        </script>";
    }

}