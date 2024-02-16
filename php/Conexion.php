<?php

try {
    $db= new PDO("mysql:host=localhost;dbname=tienda;charset=utf8","root","");
    echo "<script>console.log('Exito al conectarse en la BBDD')</script>";
} catch (Exception $e) {
    echo"". $e->getMessage() ."";
}