<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$imagen = $_POST['imagen'];
$descripcion = $_POST['descripcion'];

include ("conexion.php");

mysqli_query($conexion_db, "INSERT INTO harry_potter VALUE (DEFAULT, '$nombre' , '$apellido' , '$imagen', '$descripcion')");
mysqli_close($conexion_db);

header("Location:index.php?oka");