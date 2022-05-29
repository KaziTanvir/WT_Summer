<?php

    $num1= (float)$_POST["num1"];
    $num2= (float)$_POST["num2"];
    $operator = $_POST["operator"];
    if($operator == '+'){

        echo "The result is ". ($num1 + $num2);
        
    }
    elseif($operator=='-'){
        echo "The result is ".($num1 - $num2);
    }
    elseif($operator=='*'){
        echo "The result is ".($num1 * $num2);
    }
    else{
        echo "The result is ".($num1 / $num2);
    }

?>