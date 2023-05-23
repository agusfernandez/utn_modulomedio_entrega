<?php include 'header.php'?>
<body>
    <?php include 'menu.php'?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="cargardatos.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="apellido" placeholder="Ingrese su apellido">
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label"> Cargar una imagen</label>
                        <input type="text" class="form-control" name="imagen">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <textarea class="form-control" aria-label="With textarea" name="descripcion"></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark" value="cargar personaje">Submit</button>
                </form>
                <?php 
                    if (isset($_GET['oka'])){
                        echo "<div class='alert alert-success' role='alert'>
                            Mensaje recibido</div>";
                    };
                ?>

            </div>
        </div>
    </div>

</body>
<?php include 'footer.php'?>
