<?php
echo php_uname()."\n";
echo PHP_OS."\n";
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
echo 'Estàs utilitzant Windows!';
} else {
echo 'No estás utilitzant Windows!'."\n";
}