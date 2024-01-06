<?php

function generateFibonacci($n) {
    $fibonacciSequence = array();
    $fibonacciSequence[0] = 0;
    $fibonacciSequence[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }

    return $fibonacciSequence;
}

// Change the value of $n to generate Fibonacci sequence up to a different number
$n = 10;
$fibonacciSequence = generateFibonacci($n);

echo "Fibonacci Sequence up to $n terms: " . implode(", ", $fibonacciSequence) . "\n";

?>

