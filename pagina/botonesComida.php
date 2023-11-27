<?php
    $db_host = '127.0.0.1';
    $db_user = 'alumno';
    $db_password = '';
    $db_name = 'Orifu';

    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
        function mostrarComidas() {
            if(id == "botonPO"){
                $query = 'SELECT nombre, precio, foto FROM postres;';
                $result = $db->query($query);
            }

            foreach ($result as $row) {
                echo '<div class="comida">';
                echo '<h2>' . $row['nombre'] . '</h2>';
                echo '<h2>' . $row['precio'] . '</h2>';
                echo '<img src="../imagenes_comida/postres/dango.jpg' . $row['foto'] . '" alt="' . $row['nombre'] . '">';
                echo '</div>';
            }
    }
?>