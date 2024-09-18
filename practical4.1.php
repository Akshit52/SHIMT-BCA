<!-- Example 1 of Local Variable -->
<?php  
    function local_var()  
    {  
        $num = 45;  //local variable  
        echo "Local variable declared inside the function is: ". $num;  
    }  
    local_var();  
?>

<!-- Example 2 of Local Variable -->
<?php  
    function mytest()  
    {  
        $lang = "PHP";  
        echo "PHP is Server Site Scripting Language: " .$lang;  
    }  
    mytest();  
    //using $lang (local variable) outside the function will generate an error  
    echo $lang;  
?>  