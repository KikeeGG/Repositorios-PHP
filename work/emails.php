<?php
    if($_POST){
        $nombre=trim($_POST["nombre"]);
        $apellido=trim($_POST["apellido"]);
        $dominio=trim($_POST["dominio"]);
        echo "<h3>Resultado:</h3>";
        // a minusculas
        $nombre=strtolower($nombre);
        $apellido=strtolower($apellido);
        $dominio=strtolower($dominio);
        // pillar primera letra del nombre para email
        $inicial=substr($nombre, 0, 1);
        // limpiar todo antes del =
        $posicion=strrpos($dominio, "=");
        if($posicion!==false){
            $dominio=substr($dominio, $posicion +1);
        }
        // generar email
        $email=$inicial.$apellido."@".$dominio;
        echo "Tu nuevo email es: ".$email;
    }
?>
<!--FORMULARIO-->
<form method="post">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br>
    <label>Apellido:</label><br>
    <input type="text" name="apellido" required><br>
    <label>Dominio:</label><br>
    <input type="text" name="dominio" placeholder="campusfp.es"><br><br>
    <button type="submit">GENERAR EMAIL</button>
</form>