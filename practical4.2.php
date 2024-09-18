<!-- Example 1 of Global Variable  -->
<?php  
    $name = "Sanaya Sharma";        //Global Variable  
    function global_var()  
    {  
        global $name;  
        echo "Variable inside the function: ". $name;  
        echo "</br>";  
    }  
    global_var();  
    echo "Variable outside the function: ". $name;  
?> 


<!-- Example 1 of Global Variable  -->
<?php  
    $num1 = 5;      //global variable  
    $num2 = 13;     //global variable  
    function globalVar()  
    {  
            $sum = $GLOBALS['num1'] + $GLOBALS['num2'];  
            echo "Sum of global variables is: " .$sum;  
    }  
    globalVar();  
?>  