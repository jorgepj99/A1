<?php
$primers = array();
$flag_no_primer = false;
for ($i = 2; $i<100; $i++) {
     $flag_no_primer = true; 
        for ($j = 2; $j<=($i/2); $j++) {
                if ($i%$j==0) {
                          $flag_no_primer = false;
                                  break;
                                }
                   }
        if ($flag_no_primer) {
               array_push($primers,$i);
                  }
        if (count($primers)==100) {
               break;
                  }
}
echo array_sum($primers)."\n";
?>