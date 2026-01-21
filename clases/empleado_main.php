<?php
    require("elempleado.php");
    
    $empleado1=new Empleado("Becario", "En prácticas", 800); // Empleado becario
    $empleado1->revisarSueldo();
    echo "Sueldo final: ".$empleado1->sueldo."\n";

    $empleado2=new Empleado("Jefa", "Directora", 2500); // Empleada jefa
    $empleado2->revisarSueldo();
    echo "Sueldo final: ".$empleado2->sueldo;
?>