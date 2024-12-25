<?php
/**
 * Introduction to PHP Types
 */
$str            = 'string value';
$int            = 100;
$decimal_number = 19.5;
$is_admin       = false;
$is_logged_in   = true;
$ids            = [1, 3, 4, 5, 6];
$colors         = ['red', 'pink', 'black', 'yellow'];
$matrix         = [[2, 4], [8, 16]];
$person         = ['id' => 1, 'name' => 'John Doe', 'age' => 20, 'weight' => 70.5];
$obj            = new stdClass(); // this is a standard class in PHP
$func           = function() {};


echo gettype( $str ) . PHP_EOL;
echo gettype( $int ) . PHP_EOL;
echo gettype( $decimal_number ) . PHP_EOL;
echo gettype( $is_admin ) . PHP_EOL;
echo gettype( $is_logged_in ) . PHP_EOL;
echo gettype( $ids ) . PHP_EOL;
echo gettype( $colors ) . PHP_EOL;
echo gettype( $matrix ) . PHP_EOL;
echo gettype( $person ) . PHP_EOL;
echo gettype( $obj ) . PHP_EOL;
echo gettype( $func ) . PHP_EOL;


function greet(string $name = ''): string {
    return $name ? 'Hello, ' . $name : 'Hello Visitor';
}

// Example usage:
echo greet( 'John' ) . PHP_EOL; // Outputs: Hello, Alice
echo greet() . PHP_EOL; // Outputs: Hello Visitor


function sum_result(int $a, int $b): int {
    return $a + $b;
}

// Example usage:
echo sum_result(3, 5) . PHP_EOL; // Outputs: 8
