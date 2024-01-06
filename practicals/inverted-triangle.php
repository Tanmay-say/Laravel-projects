<?php

/**
 * Display an inverted triangle pattern.
 *
 * This function prints an inverted triangle pattern to the console.
 *
 * @param int $rows The number of rows in the inverted triangle.
 */
function invertedTrianglePattern($rows) {
    for ($i = $rows; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "\n";
    }
}

/**
 * Display an inverted triangle pattern with numbers.
 *
 * This function prints an inverted triangle pattern with numbers to the console.
 *
 * @param int $rows The number of rows in the inverted triangle.
 */
function invertedTrianglePatternWithNumbers($rows) {
    $number = 1;
    for ($i = $rows; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $number++ . " ";
        }
        echo "\n";
    }
}

// Example usage
$numberOfRows = 5;

// Display inverted triangle pattern
echo "Inverted Triangle Pattern:\n";
invertedTrianglePattern($numberOfRows);

// Display inverted triangle pattern with numbers
echo "\nInverted Triangle Pattern with Numbers:\n";
invertedTrianglePatternWithNumbers($numberOfRows);

?>

