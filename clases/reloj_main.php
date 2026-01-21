<?php
    require("reloj_clase.php");

    $reloj1 = new SmartWatch("Samsung", "Android"); // Creamos el smartwatch
    echo "Tengo un reloj ".$reloj1->marca." con ".$reloj1->sistemaOperativo; // Mostramos la información
?>