<?php

function calculateFactorial($n) {
    if ($n < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($n == 0 || $n == 1) {
        return 1;
    } else {
        $factorial = 1;
        for ($i = 1; $i <= $n; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}

// Change the value of $number to calculate the factorial of a different number
$number = 5;
$result = calculateFactorial($number);

echo "Factorial of $number is: $result\n";

?>
