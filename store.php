<?php

    include("conexion.php");

    if(!empty($_POST["Clase"])){
        //recibir datos

        $Nombre = $_POST["Nombre"];
        $Genero = $_POST["Genero"];
        $Clase = $_POST["Clase"];
        $Nivel = $_POST["Nivel"];

        //validar datos

        //guardar datos
        $sql = "INSERT INTO Members (Nombre, Genero, Clase, Nivel) VALUES ('$Nombre', '$Genero', '$Clase', $Nivel)";

        $conn->exec($sql);

        header("Location: index.php");

    }else{
        echo "No data";
    }
?>