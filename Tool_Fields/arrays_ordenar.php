<?php

$meses= 
    array('Enero','Febrero','Marzo','Abril','Mayo','Junio',
    'Julio','Agosto','Setiembre','Octubre','Noviembre','Diciembre'
);
//Para ordenar alfabéticamente utilizamos sort
//sort($meses);

//Para ordenar al revés
rsort($meses);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del año</title>
</head>
<body>
    <?php
    //Con foreach recorremos toda una array.
    foreach ($meses as $mes){
        echo  '<li>' .$mes . '</li>';
    }
    //COMO PODEMOS ORDENARLO?
    
    ?>
</body>
</html>