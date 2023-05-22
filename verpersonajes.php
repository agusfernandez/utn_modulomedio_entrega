<?php include 'header.php'?>
<body>
    <?php include 'menu.php'?>
    <div class="container">
        <div class="row">

            <!--Add query to get all characters-->
            <?php include ('conexion.php');
        
            $consulta_db = mysqli_query($conexion_db, "SELECT * FROM harry_potter ");

            /* show data -> mysql_fetch_assoc to show array /mientras suceda esto me vas a mostrar esto*/
            while($mostrardatos = mysqli_fetch_assoc($consulta_db)){

            ?>

            <!-- html structure-->
            <div class="card" style="width: 18rem;">
                <img src="imagenes/<?php echo $mostrardatos['imagen']?>" class="card-img-top" alt="<?php echo $mostrardatos['nombre']?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $mostrardatos['nombre'] . " " . $mostrardatos['apellido'];?></h5>
                    <p class="card-text"><?php echo $mostrardatos['descripcion']?></p>
                </div>
                <a href="eliminarpersonaje.php?id=<?php echo $mostrardatos['id'];?>" class="btn btn-primary">Eliminar Personaje</a>
            </div>

            <?php }?>

        </div>
    </div>



</body>
<?php include 'footer.php'?>
