<?php


include("con_bd.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["aceptar"]) && $_POST["aceptar"] === "aceptar") {
        $dato = "aceptar";

        // Realizar la conexión a la base de datos y realizar la inserción en la tabla 'proyecto'


        if (!$conex) {
            die("La conexión ha fallado: " . mysqli_connect_error());
        }

        // Ejemplo de inserción
        $sql = "INSERT INTO proyecto (aceptar) VALUES ('$dato')";

        if (mysqli_query($conex, $sql)) {
            echo "Inserción exitosa";
        } else {
            echo "Error en la inserción: " . mysqli_error($conex);
        }

        mysqli_close($conex);
    } elseif (isset($_POST["rechazar"]) && $_POST["rechazar"] === "rechazar") {
        $dato = "rechazar";

        // Aquí puedes hacer lo que quieras con el valor $dato cuando se presiona el botón "rechazar"
        echo "Se presionó el botón: " . $dato;
    } else {
        $dato = "ninguno";

        // Aquí puedes hacer lo que quieras con el valor $dato cuando no se presiona ninguno de los botones
        echo "Se presionó el botón: " . $dato;
    }
}
?>
