<?php
        $db_host = '127.0.0.1';
        $db_user = 'alumno';
        $db_password = 'alumnoipm';
        $db_name = 'Orifu';
    ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../HTML/CSS/plato.css" />
        <?php
            if(isset($_GET['ID'])){
                $db = mysqli_connect($db_host, $db_user, $db_password, $db_name);
                $idCat = $_GET['ID'];
                $resultado = mysqli_query($db,"select nombre from categoria where idbotones = $idCat;");
                $categoria=mysqli_fetch_assoc($resultado);
            }
        ?>
        <title><?php echo $categoria['nombre']?></title>
    </head>
    <body>
        
        <?php
            $db = mysqli_connect($db_host, $db_user, $db_password, $db_name);
            if(isset( $_GET['ID'])){
                $idCat = $_GET['ID'];
                $resultado = mysqli_query($db,"select nombre from categoria where idbotones = $idCat;");
                $categoria=mysqli_fetch_assoc($resultado); 
                ?>
                <div id="titulo"><?php echo $categoria['nombre']?></div> <?php
            }
        ?>
        <div class="linea-separadora"></div>
        <?php
            if(isset( $_GET['ID'])){
                $platos = mysqli_query($db,"select * from platos where categoria_idbotones = $idCat ;");
            }  
            if(isset( $_GET['buscar'])){              
                $busqueda = $_GET['buscar'];
                $platos = mysqli_query($db,"select * from platos where nombre like '%$busqueda%'"); 
         ?>
         <nav class="Barra">
            <a id="tit" href = "../pagina/otra_pagina.php">ORIFU</a>
                <div class="dropdown">
                  <button class="dropbtn">Menú</button> 
                  <div class="dropdown-content">
                  <img id="icon" src = "../HTML/Imagenes/fotos/icon.png"></img>
                  <a href="../HTML/HTML_Codes/iniciar_secion.html">User</a>
                  <a href="#">Carrito</a>
                  <a href="#">Ofertas</a>
                  <a href="#">Contacto</a>  
                </div>
                </div>
                </div>
                <form action="/pagina/platos.php?ID=" class="search-container">
                    <input class="search-input" name="buscar" type="text" placeholder="Buscar...">
                    <button type="submit" class="search">Buscar</button>
                </form>
              <?php
              if(isset( $_GET['ID'])){
                $id2 = $_GET['ID'];
                $platos = mysqli_query($db,"select * from platos where ID = $id2;");
              }
                 
                ?>
            </nav><?php
            }
            while($fila=mysqli_fetch_assoc($platos))
            { 
            ?>
             <img class="imagen1" src="../HTML/Imagenes/imagenes_comida/<?php echo $fila['foto']?>" onclick="window.location.href='Productos.php?ID=<?php echo $fila['ID']?>'"></img>
            <?php
            }
            ?>
    </body>
</html>