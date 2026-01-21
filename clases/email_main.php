<?php
    require("email_clases.php");

    $email1 = new Email("Hola que tal estas, te escribo un email.", "El profe"); // Creamos el Email
    $email1->enviar();
?>