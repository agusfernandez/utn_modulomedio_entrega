<?php include 'header.php'?>
<body>

    <?php include 'menu.php'?>

    <div class="container">
        <div class="row">
            <?php 

                $fecha_hoy = date('l/M/Y');

                $text_datos = '<span>Fecha:' . $fecha_hoy . '</span>' . '<br>' . '<span>Nombre:' . $_POST['nombre'] . '</span>' . '<br>' . '<span>Apellido:' . $_POST['apellido'] . '</span>' .  '<br>' . '<span>Email: ' . $_POST['email'] . '</span>' . '<br>' . '<span>Comentario: ' . $_POST['comentario'] . '</span>'.  '<br>';

                $archivo= fopen('info.txt', "a");
                fputs($archivo,$text_datos);
                echo '<div class="alert alert-success" role="alert">Informacion Enviada</div>';

                
            ?>
        </div>
    </div>
</body>
<?php include 'footer.php'?>
