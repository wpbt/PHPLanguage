<?php
$var = "value";
unset( $var );
var_dump( $var ); // null
echo PHP_EOL;

$callback = function( $item ) {
    return $item * 2;
};
$numbers = [1, 2, 3];
$doubled = array_map( $callback, $numbers );
print_r( $doubled );
echo PHP_EOL;

function double( $item ) {
    return $item * 2;
}

$numbers = [1, 2, 3];
$doubled = array_map( 'double', $numbers );
print_r( $doubled );
echo PHP_EOL;

class Math1 {
    public function double( $item ) {
        return $item * 2;
    }
}

$math = new Math1;
$numbers = [1, 2, 3];
$doubled = array_map( [$math, 'double'], $numbers );
print_r( $doubled );
echo PHP_EOL;


class Math2 {
    public static function double( $item ) {
        return $item * 2;
    }
}

$numbers = [1, 2, 3];
$doubled = array_map( ['Math2', 'double'], $numbers );
print_r( $doubled );
echo PHP_EOL;

// Using array_filter with a closure
$numbers = [1, 2, 3, 4, 5];
$even_numbers = array_filter( $numbers, function( $num ) {
    return $num % 2 == 0;
} );
print_r( $even_numbers );
echo PHP_EOL;

// Using usort with a named function
function compare( $a, $b ) {
    return $a <=> $b; // Spaceship operator for comparison
}

$array = [3, 1, 4, 1, 5, 9];
usort( $array, 'compare' );
print_r( $array );
echo PHP_EOL;

// Using call_user_func with an array callable
class Greeter {
    public function greet( $name ) {
        return "Hello, $name";
    }
}

$greeter = new Greeter();
echo call_user_func( [$greeter, 'greet'], "Alice" );
echo PHP_EOL;