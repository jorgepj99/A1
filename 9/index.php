<?php
if (!empty($_SERVER['HTTPS'])) 
{
  echo 'https';
}
else
{
echo 'http'."\n";
}


