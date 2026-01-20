<?php
    require("juegorol.php");

    // Crear personajes
    $guerrero=new Personaje();
    $guerrero->nombre="Guerrero";
    $guerrero->nivel=1;
    $guerrero->vida=100;
    $guerrero->ataque=20;

    $mago=new Personaje();
    $mago->nombre="Mago";
    $mago->nivel=1;
    $mago->vida=80;
    $mago->ataque=30;
    // MOstrar Personajes
    echo"LOS HEROES: \n";
    $guerrero->mostrarDetalles();
    echo"\n";
    $mago->mostrarDetalles();
    echo"\n";
    // Ataques + curaciones
    echo "BATALLA: \n";
    $guerrero->atacar($mago);
    $mago->atacar($guerrero);

    echo "CURACIÓN: \n";
    $guerrero->curarse();

    echo "SUBIR NIVEL: \n";
    $mago->subirNivel();

    echo "NUEVO ATAQUE: \n";
    $mago->atacar($guerrero);
?>