<?php

function swapNumbers($num1, $num2) {
    echo "Before swapping: num1 = $num1, num2 = $num2\n";

    // Swapping using a temporary variable
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;

    echo "After swapping: num1 = $num1, num2 = $num2\n";
}

// Example usage
$num1 = 5;
$num2 = 10;

swapNumbers($num1, $num2);

?>

