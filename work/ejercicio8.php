<table border=1 style="width: 300px; height: 300px; background:#f9f9ff; border-collapse:collapse;"> <!-- Border collapse hace que se parezca el borde mas al ejemplo !-->
    <?php
    $numero=8;
    echo"<tr><th colspan=4>Tabla del $numero</th></tr>";
    for ($i=1; $i<=10; $i++){
        $resultado=$numero*$i;
        echo"<tr style='background:#eef2ff;'><td colspan=2>$numero <td> x $i</td> <td style='background:#dfe7ff;'> = $resultado <br></td></tr>";
    }
    ?> 
</table>