<?php
$file = basename($_SERVER['PHP_SELF']); 
$no_of_lines = count(file($file)); 
echo "Hay $no_of_lines lineas en el fichero $file"."\n";