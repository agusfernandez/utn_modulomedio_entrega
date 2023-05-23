<?php include 'header.php'?>
<body>

    <?php include 'menu.php'?>

    <div class="container">
        <div class="row">
            <div class="col">

                <?php

                    $archivo = fopen('info.txt' , 'r');
                    echo fread($archivo, 450);

                ?>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php'?>
