<?php

/**
 * Swap two numbers.
 *
 * This function takes two numbers as input, swaps them, and prints the result.
 *
 * @param int $num1 The first number to be swapped.
 * @param int $num2 The second number to be swapped.
 */
function swapNumbers($num1, $num2) {
    echo "Before swapping: num1 = $num1, num2 = $num2\n";

    // Swapping without a temporary variable
    list($num1, $num2) = array($num2, $num1);

    echo "After swapping: num1 = $num1, num2 = $num2\n";
}

// Example usage
$number1 = 5;
$number2 = 10;

// Call the function to swap numbers
swapNumbers($number1, $number2);

?>

