<!--  Write a PHP program to demonstrate the use of array.  -->
<?php
/*Indexed Array*/
// Indexed Array using Method-1
$arr=array("BCA","PGDCA","MSCIT");
echo "I like " . $arr[0] . ", " . $arr[1] . " and " . $arr[2] . ".";
echo "<br>";
//Indexed Array using Method-2
$arr[0]="BCA";
$arr[1]="PGDCA";
$arr[2]="MSCIT";
echo "I like " . $arr[0] . ", " . $arr[1] . " and " . $arr[2] . ".";
echo "<br>Elements in Array:";
$arrsize=count($arr);
for($cnt=0;$cnt<$arrsize;$cnt++)
{
echo "<br>";
echo "<b>" . $arr[$cnt] . "</b>";
}
echo "<br>";
/*Associative Array*/
// Associative Array using Method-1
$arr=array("d1"=>"BCA","d2"=>"PGDCA","d3"=>"MSCIT");
echo "Degree is " . $arr['d1'] ;
echo "<br>";
//Associative Array using Method-2
$arr['d1']="BCA";
$arr['d2']="PGDCA";
$arr['d3']="MSCIT";
echo "Degree is " . $arr['d2'] ;
echo "<br>";
foreach($arr as $x=>$x_value)
 {
 echo "Key=" . $x . ", Value=" . $x_value;
 echo "<br>";
 }
?>