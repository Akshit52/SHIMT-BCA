<?php
$number=10;
$i=0;
$cnt=0;
echo "Fibonacci Series<br><br>";

 for($cnt=0 ;$cnt<=$number;$cnt++)
 {
 echo fibonacci($i) . "<br>";
 $i++;
 }

function fibonacci($number)
{
 if ( $number == 0 )
 return 0;
 else if ( $number == 1 )
 return 1;
 else
 return ( fibonacci($number-1) + fibonacci($number-2) );
} 
?>