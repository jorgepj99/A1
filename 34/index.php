<?php
    $primero = array(10,20,30,40,50);
    $segundo = array (6,5,4,3,2);
    $resultado = array();
    for($i=0;$i<count($primero);$i++) {
        $resultado[] = $primero[$i] * $segundo[$i]; }
    foreach($resultado as $datosResultado) {
    echo $datosResultado . " "; }
