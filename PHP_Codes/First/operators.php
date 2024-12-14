<?php
    // Operators
    
    // Arithmatic Operators +, -, *, /, **
    $var1=5;
    $var2=5;
    echo "Variable 1: {$var1}<br>Variable 2: {$var2}<br>";
    $total=null;
    $total=$var1+$var2;
    // $total=$var1-$var2;
    // $total=$var1*$var2;
    // $total=$var1/$var2;
    // $total=$var1**$var2;
    // $total=$var1%$var2;
    echo "Total is: {$total}";

    // Increment & Decrement Operators ++, --
    // There are also Pre-Increment, Post-Increment, Pre-Decrement and Post-Decrement
    $counter=0;
    echo "<br>Initial counter: {$counter}";
    $counter++;
    echo "<br>After Increment counter: {$counter}";

    // Operator Precedence
    // ()
    // **
    // *, /, %
    // +, -
?>