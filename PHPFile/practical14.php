<!-- Write a program accepts a string and calculates number of upper case letters
and lower case letters available in that string.-->

<?php

function count_case($str)
{
	$upper = 0;
	$lower = 0;
	for ($i = 0; $i < strlen($str); $i++)
	{
		if ($str[$i] >= 'A' && $str[$i] <= 'Z'){
			$upper++;

        }
		else if ($str[$i] >= 'a' &&	$str[$i] <= 'z')  {

			$lower++;
        }
		else {}
	}
	echo "Upper case letters: " , $upper,"<br>" ;
	echo "Lower case letters : " ,$lower,"<br>" ;
}

	$str = "This Is PHP Class";
	count_case($str);
?>