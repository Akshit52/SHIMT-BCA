<!-- WAP to Check whether a number is in a given range using functions. -->

<?php
function check_range($n , $l , $u) {
  
  if ($n > $l && $n < $u){
       echo "The number $n is between the range";
  } else {
    echo "The number is out of range";
  }
}

$n = 10;
$l = 5;
$u = 50;

check_range($n , $l , $u);

?>
