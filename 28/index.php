<?php
function borrar_duplicat($list) {
  $nums_unique = array_values(array_unique($list));
  return $nums_unique ;
}
$nums = array(1,1,2,2,3,4,5,5);
print_r(borrar_duplicat($nums));
