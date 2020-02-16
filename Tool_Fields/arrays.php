<?php

//Como contar los arrays?

$meses= 
    array('Enero','Febrero','Marzo','Abril','Mayo','Junio',
    'Julio','Agosto','Setiembre','Octubre','Noviembre','Diciembre'
);


//echo count($meses);

//echo $ultimo_mes = count ($meses) -1;


/*Arrays multidimensionales

$amigos = array(
    array('César', 22),
    array('Laura',32),
    array('Marc',30),
    
);


echo $amigos[2][1];
*/
/* ARRAYS SIMPLES
$alex = array ('telefono' => '3434', 'edad'=>'65', 'apellido'=>'alvarez','mexico' => 'newMexico');

//recordar declarar el array con los corchetes! 
 $alex['telefono'] = '10000';
echo $alex['telefono'];
*/
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