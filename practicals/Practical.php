<?php
namespace practicals;

class Practical {
    /**
     * Function to print "Hello, World!"
     */
    public static function printHello() {
        echo "Hello, World!\n";
    }

    /**
     * Function to add two numbers
     * @param int $num1 The first number
     * @param int $num2 The second number
     * @return int The sum of the two numbers
     */
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    /**
     * Function to generate a Fibonacci sequence
     * @param int $n The number of elements in the Fibonacci sequence
     * @return array An array containing the Fibonacci sequence
     */
    public static function generateFibonacciSequence($n) {
        $fibonacciSequence = [0, 1];
        for ($i = 2; $i < $n; $i++) {
            $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
        }
        return $fibonacciSequence;
    }
}
?>

21 changes: 21 additions & 0 deletions 21
tests/Unit/PracticalTest.php
@@ -0,0 +1,21 @@
<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

require(__DIR__.'/../../practicals/Practical.php');
use practicals\Practical;

class PracticalTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testAdd(): void
    {
        $this->assertEquals(Practical::add(1,3), 4);
    }
}

?>
