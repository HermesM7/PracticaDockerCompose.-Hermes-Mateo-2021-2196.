<!DOCTYPE html>
<html>
<head>
    <title> Docker Compose Hermes Mateo </title>
</head>
    <body>
        <h1>Esta es la practica de Docker Compose de Hermes Mateo, 2021-2196.</h1>

            <?php
            $host = getenv('MYSQL_HOST');
            $usern = getenv('MYSQL_USER');
            $passw = getenv('MYSQL_PASSWORD');
            $datab = getenv('MYSQL_DATABASE');

            
            $connection = new mysqli($host, $usern, $passw, $datab);

            if ($connection->connect_error) {
                die("No se pudo realizar la conexion a la base de datos" . $connection->connect_error);
            }

            echo "Se ha realizado la conexion a base de datos exitosamente";
            ?>
    </body>
</html>