<!-- WAP to Count total number of vowels in a word “Develop & Empower Individuals”. -->
<!DOCTYPE html>  
<html>  
<body>  
<?php  
    $vCount = 0;  
    $str = "Develop and Empower Individuals";  
    $str = strtolower($str);  

    for($i = 0; $i < strlen($str); $i++) {  
    if( $str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u') {  
        $vCount++;  
    }   
}
    echo "Number of vowels : " , $vCount;  
    echo "<br>";  
    
?>  
</body>  
</html>  