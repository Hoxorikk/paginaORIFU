<?php
        $db_host = '127.0.0.1';
        $db_user = 'alumno';
        $db_password = 'alumnoipm';
        $db_name = 'Orifu';
    ?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../HTML/CSS/productos.css" />
        <?php
                $db = mysqli_connect($db_host, $db_user, $db_password, $db_name);
                if(isset( $_GET['ID'])){
                $idCat = $_GET['ID'];
                $resultado = mysqli_query($db,"select nombre from platos where ID = $idCat;");
                $categoria=mysqli_fetch_assoc($resultado);
                }
        ?>
        <title>
        <b><?php echo $categoria['nombre']?></b>
        </title>
    </head>
    <body>
        
        <?php
            if(isset( $_GET['ID'])){
                $db = mysqli_connect($db_host, $db_user, $db_password, $db_name);
                $idCat = $_GET['ID'];
                $resultado = mysqli_query($db,"select nombre from platos where ID = $idCat;");
                $categoria=mysqli_fetch_assoc($resultado);
             }
        ?>
        <?php
        
            $platos = mysqli_query($db,"select * from platos where ID = $idCat;");
        $fila=mysqli_fetch_assoc($platos)
            ?>
            <div class="items">
                <img class="imagen1" src="../HTML/Imagenes/imagenes_comida/<?php echo $fila['foto']?>"></img>
                <div class="margen">
                    <div id="titulo"><?php echo $categoria['nombre']?></div>
                    <p class="texto1"><?php echo $fila['precio']?></p>
                    <p class="texto"><?php echo $fila['restaurantes']?></p>
                    <p class="texto"><?php echo $fila['descripcion']?></p>
                    <button class="comprar" type="submit" value="comprar">
                        <a>COMPRAR</a>
                    </button>
                </div>
            </div>
    </body>
</html>