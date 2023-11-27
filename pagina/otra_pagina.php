<?php
        $db_host = '127.0.0.1';
        $db_user = 'alumno';
        $db_password = 'alumnoipm';
        $db_name = 'Orifu';

        $db = mysqli_connect($db_host, $db_user,$db_password, $db_name);
    ?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../HTML/CSS/otra_pagina2.css" />
        <title>ORIFU</title>

    </head>
    <body>
        <nav class="Barra">
            <h1 id="titulo">ORIFU</h1>
                <div class="dropdown">
                  <button class="dropbtn">Menú</button> 
                  <div class="dropdown-content">
                  <img id="icon" src = "../HTML/Imagenes/fotos/icon.png"></img>
                  <a href="../HTML/HTML_Codes/iniciar_secion.html">User</a>
                  <a href="#">Carrito</a>
                  <a href="#contactos">Contacto</a>  
                </div>
                </div>
                <form action="/pagina/platos.php?ID=" class="search-container">
                    <input id = "barrabuscar" class="search-input" name="buscar" type="text" placeholder="Buscar...">
                    <button id = "botonbuscar" type="submit" class="search">Buscar</button>
                </form>
              <?php
              if(isset( $_GET['ID'])){
                $id2 = $_GET['ID'];
                $platos = mysqli_query($db,"select * from platos where ID = $id2;");
              }
                 
                ?>
        </nav>
        <div>
            <div class="linea-separadora"></div>
            <script src="botonesComida.php"></script>
                <div class="botones">
                    <?php
                    $resultado = mysqli_query($db,"select * from categoria;");
                while($fila=mysqli_fetch_assoc($resultado))
                    { 
                        ?>
                        <a href="./platos.php?ID=<?php echo $fila['idbotones']?>"><button title=<?php echo $fila['nombre']?> id="botones"><?php echo $fila['nombre']?></button></a>
                    <?php
                    }
                    ?>
                </div>
                
                <div id="recomendaciones">RECOMENDACIONES</div>
        </div>
        <div id= "fotos" display: block>

            <button id="mostrar">
                <img id="imagen1" src="../HTML/Imagenes/imagenes restaurantes/lovepik-korean.jpg">
            <img id="imagen12" src="../HTML/Imagenes/im_resto_desenfocadas/lovepik-korean.jpg">
            </button>
            
            <img id="imagen2" src="../HTML/Imagenes/imagenes restaurantes/buenos-aires-mercat-3jpg.webp"></img>
            <img id="imagen3" src="../HTML/Imagenes/imagenes restaurantes/baumesteir.jpg"></img>
            <img id="imagen4" src="../HTML/Imagenes/imagenes restaurantes/restaurant4.jpg"></img>
            <img id="imagen5" src="../HTML/Imagenes/imagenes restaurantes/restaurante_indio.jpg"></img>
            <img id="imagen6" src="../HTML/Imagenes/imagenes restaurantes/restaurat6.jpeg"></img>
            <img id="imagen7" src="../HTML/Imagenes/imagenes restaurantes/restaurant7.jpg"></img>
            <img id="imagen8" src="../HTML/Imagenes/imagenes restaurantes/restaurante_indio2.jpg"></img>
            <img id="imagen9" src="../HTML/Imagenes/imagenes restaurantes/restaurante9.png"></img>
        </div>
        <img id="contactos" src="../HTML/Imagenes/CONTACTO.png"></img>
    </body>
</html>