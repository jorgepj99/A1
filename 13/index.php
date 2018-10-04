<?php
//ultima modificación
$nombreactual = basename($_SERVER['PHP_SELF']);
$fichero_modificado = filemtime($nombreactual); 
echo "Última modificación " . date("l, dS F, Y, h:ia", $fichero_modificado)."\n";
