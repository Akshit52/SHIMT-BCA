<!-- WAP to Determine whether a string is palindrome or not? -->

<?php
function Palindrome($string){
	if (strrev($string) == $string){
		return 1;
	}
	else{
		return 0;
	}
}
$original = "SoS";
if(Palindrome($original)){
	echo "Palindrome";
}
else {
echo "Not a Palindrome";
}
?>