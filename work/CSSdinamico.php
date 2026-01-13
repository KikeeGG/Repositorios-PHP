<?php //PARTE PHP
// VALORES POR DEFECTO
$color="#ffffff";
$tamano=32;
$titulo="Mi página";
$alineacion="center";
// SI RECIVIMOS POST
if ($_POST) {
    $color=$_POST["color"];
    $tamano=$_POST["tamano"];
    $titulo=$_POST["titulo"];
    $alineacion=$_POST["alineacion"];
}
?>
<!-- PARTE HTML -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Diseñar web</title>
</head>
<!-- FORMULARIO CON INYECCION DE PHP, DONDE HAYA ? -->
<body style="background-color: <?= $color?>;">
<form method="post">
    <p>Color de fondo:</p>
    <input type="color" name="color" value="<?= $color ?>">
    <br>
    <p>Tamaño letra:</p>
    <input type="number" name="tamano" value="<?= $tamano ?>">
    <br>
    <p>Título:</p>
    <input type="text" name="titulo" value="<?= $titulo ?>">
    <br>
    <p>Alineación:</p>
    <select name="alineacion">
        <option value="left" <?=$alineacion=="left" ? "selected": ""?>>Izquierda</option>
        <option value="center" <?=$alineacion=="center" ? "selected": ""?>>Centro</option>
        <option value="right" <?=$alineacion=="right" ? "selected": ""?>>Derecha</option>
    </select>
    <br>
    <br>
    <button>Aplicar</button>
</form>
<!-- H1 QUE MUESTRA LAS EDICIONES DE USUARIO -->
<h1 style="font-size: <?= $tamano ?>px;text-align: <?= $alineacion ?>;"><?= $titulo ?></h1>
</body>
</html>