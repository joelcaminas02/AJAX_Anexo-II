<?php
    // database credentials
    $serverName = "localhost";
    $database = "agenda";
    $username = "root";
    $password = "sa";
    $consulta = "SELECT nombre,apellidos FROM contactos;";

    //connection databse
    $database = createConnectionToDB($serverName, $username, $password, $database);
    //Check connection
    checkConnection($database);

    //

    $result = mysqli_query($database, $consulta);
    
    while ($fila = mysqli_fetch_assoc($result)) {

        echo $fila['apellidos'].",".PHP_EOL;
        echo $fila['nombre'].PHP_EOL;
        echo "<br>";
    }

    //
    echo "CONEXIÓN SATISFACTORIA";
    //Close database
    closeDB($database);


    //Create a connection to database
    function createConnectionToDB($serverName, $username, $password, $database) {
        $db = mysqli_connect($serverName, $username, $password, $database);
        return $db;
    }

    //Check connection
    function checkConnection($db) {
        if (!$db) {
            die("CONEXIÓN FALLIDA: ".mysqli_connect_error());
            echo "CONEXIÓN FALLIDA: ".mysqli_connect_error();
        }
    }
    //Close connection with database
    function closeDB($db) {
        mysqli_close($db);
    }
    
?>
Footer