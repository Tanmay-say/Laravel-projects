<?php

/**
 * Calculate the factorial of a number.
 *
 * This function calculates the factorial of a given number.
 *
 * @param int $number The number for which the factorial is calculated.
 * @return int The factorial of the given number.
 */
function calculateFactorial($number) {
    if ($number < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($number == 0 || $number == 1) {
        return 1;
    } else {
        $factorial = 1;
        for ($i = 2; $i <= $number; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}

/**
 * Display the factorial result.
 *
 * This function prints the result of the factorial calculation to the console.
 *
 * @param int $number The number for which the factorial is calculated.
 * @param int $result The calculated factorial result.
 */
function displayFactorialResult($number, $result) {
    echo "Factorial of $number is: $result\n";
}

// Example usage
$numberToCalculateFactorial = 5;

// Calculate the factorial
$factorialResult = calculateFactorial($numberToCalculateFactorial);

// Display the factorial result
displayFactorialResult($numberToCalculateFactorial, $factorialResult);

?>

