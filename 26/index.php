<?php
function armstrong_number($num) {
  $sl = strlen($num);
  $sum = 0;
  $num = (string)$num;
  for ($i = 0; $i < $sl; $i++) {
    $sum = $sum + pow((string)$num{$i},$sl);
  }
  if ((string)$sum == (string)$num) {
    return "True";
  } else {
    return "False";
  }
}
echo "Es 153 un número Armstrong ? ".armstrong_number(153);
echo "<br>Es 21  un número Armstrong? ".armstrong_number(21);
echo "<br>Es 4587 un número Armstrong? ".armstrong_number(4587);"<br>";



