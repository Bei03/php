<?php
/*creamos 3 variables en PHP y luego lo mostramos en html*/

        $nombre= 'Bei';
        $hora=date('H:i:s');
        $fecha=date ('d-m-Y');
        $precio=5;
        $cantidad=10;
        $_edad=20;
        $Edad=25;
        define('NOMBRE', 'BEITA MENA');
        const OTRONOMBRE="Estefanía Escudero";


?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<p>Hola <?=$nombre;?> </p>
<p>Hoy es <?=$fecha?></p>
<p>Son las <?=$hora;?></p>
<p>El total es <?= $precio+ $cantidad; ?> €</p>


<?php echo "Mi nombre es ",NOMBRE, "<br/>", "El nombre de mi compi es ",OTRONOMBRE;
?>
</body>
</html>
