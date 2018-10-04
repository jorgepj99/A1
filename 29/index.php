<?php
//funció per saber si  coincideixen
function str2_in_str1($w1, $w2) {
   $p_1 = strlen($w2);
   $p_2 = strlen($w1);
   $w_start = $p_2-$p_1-1;
   if (substr($w1, $p_2-$p_1, $p_1) == $w2) {
      return "true";
   } 
   else 
   {
      return "false";
   }
}
echo str2_in_str1("Xquery","aw")."<br>";
echo str2_in_str1("JavaScript","cript")."<br>";


