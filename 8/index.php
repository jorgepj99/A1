<?php
$link = 'http://toni.cesnuria.com/php/php-basic-exercises.php';
$link = parse_url($link);
echo 'Scheme : '.$link['scheme'].PHP_EOL;
echo 'Host : '.$link['host']."\n";
echo 'Path : '.$link['path']."\n";



