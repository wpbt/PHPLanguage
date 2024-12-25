<?php
/**
 * Introduction to the php language
 */

// Example of good variable names.
$name       = 'John Doe';
$count      = 10;
$colors     = array( 'Red', 'Yellos' );
$indexes    = array( 11, 14, 99 );
$weight     = 70.5;

// defining constant
const PI = 3.1415;
define( 'RATE', 3.0 );

// printing or displaying values.
echo PI;
echo PHP_EOL; // prints a new line; same as: echo "\n"
print constant( 'RATE' );
echo "\n";
print( "$name $count" );
print PHP_EOL;
print_r( $colors );
echo "\n";
var_dump( $indexes );
echo PHP_EOL;
// formatting a string:
printf( 'Name: %s, Weight: %d(kg)', $name, $weight );
$formatted_string = sprintf( 'Name: %s, Weight: %d(kg)', $name, $weight );
echo "\n";
echo $formatted_string;

# defining a class
class ClassName {}
// creating obj:
$obj = new ClassName; // you can also use `new ClassName()`
echo "\n";
var_dump( $obj );

// defining a function
function function_name() {}
// calling function name
echo "\n";
function_name();