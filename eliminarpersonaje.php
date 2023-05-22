<?php

include ('conexion.php');

$id_personaje = $_GET['id'];

mysqli_query($conexion_db, "DELETE FROM harry_potter WHERE id=$id_personaje");

header('Location:verpersonajes.php');