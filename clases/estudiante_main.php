<?php
    require("estudiante_class.php");

    $estudiante1 = new Estudiante("Luis", 20, "Informática");// Creacion del estudiante
    // Mostramos los datos
    echo"Nombre: ".$estudiante1->nombre."\n";
    echo"Edad: ".$estudiante1->edad."\n";
    echo"Curso: ".$estudiante1->curso;
?>
