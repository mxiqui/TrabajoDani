<?php
include("Functions.php");


if(isset($_GET["eliminar"])){
    eliminarPersonaje($_GET["nombreData"]);
}

if(isset($_POST["actualizar"])){
    actualizarPersonaje($_POST["nombre"], $_POST["anime"], $_POST["poder"], $_POST["descripcion"]);
    //Falta Añadir popup cuando se elimine el ususario
}



function eliminarPersonaje($nombre){
    try {
        include("Conexion.php");
        $sql="DELETE from personajes WHERE nombre=?";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(1, $nombre, PDO::PARAM_STR);
        $stmt->execute();
    } catch (\PDOException $th) {
        $text=$th->getMessage();
        echo "$text";
        echo "<script>
        document.getElementById('informacion').innerText='Error al actualizar el personaje,$text';
        document.getElementById('informacion').style.display='block';
        setTimeout(()=>{
            document.getElementById('informacion').style.display='none';
            },2500);
        </script>";
    }
}



function actualizarPersonaje($nombre, $anime, $poder, $descripcion){
    include("Conexion.php");

   try {
        $sql="UPDATE personajes Set anime=?, poder=?, descripcion=? WHERE nombre=?";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(1, $anime, PDO::PARAM_STR);
        $stmt->bindParam(2, $poder, PDO::PARAM_STR);
        $stmt->bindParam(3, $descripcion, PDO::PARAM_STR);
        $stmt->bindParam(4, $nombre, PDO::PARAM_STR);
        $stmt->execute();
        echo "<script>
        document.getElementById('informacion').innerText='Personaje actualizado con exito';
        document.getElementById('informacion').style.display='block';
        setTimeout(()=>{
            document.getElementById('informacion').style.display='none';
            },2500);
        </script>";
   } catch (\PDOException $th) {
    $text=$th->getMessage();
    echo "<script>
    document.getElementById('informacion').innerText='Error al actualizar el personaje,$text';
    document.getElementById('informacion').style.display='block';
    setTimeout(()=>{
        document.getElementById('informacion').style.display='none';
        },2500);
    </script>";
   }
}



