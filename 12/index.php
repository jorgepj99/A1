<?php
$texto = file('http://www.youtube.com/');
foreach ($texto as $numerolinea => $linea)
 {
 	echo "Line No.-{$numerolinea }: " . htmlspecialchars($linea) . "\n";
 }

