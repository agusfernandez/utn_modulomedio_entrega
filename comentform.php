<?php include 'header.php'?>
<body>
    <?php include 'menu.php'?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="comment.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="apellido" placeholder="Ingrese su apellido">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"> Ingrese su email</label>
                        <input type="email" class="form-control" name="email" placeholder="Ingrese su email">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Deje su comentario</label>
                        <textarea class="form-control" aria-label="With textarea" name="comentario"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" value="cargar personaje">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>
<?php include 'footer.php'?>