<?php

function invertedTrianglePattern($rows) {
    for ($i = $rows; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "\n";
    }
}

// Change the value of $rows to control the size of the inverted triangle
$rows = 5;
invertedTrianglePattern($rows);

?>

