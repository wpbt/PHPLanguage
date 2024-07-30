<?php
/**
 * PHP Functions
 */


/* passing argument by reference example.
 * Notice the '&' before the parameter in function definition.
 */
function add_some_extra( &$string ) {
    $string .= 'and something extra.';
}

$str = 'This is a string, ';
add_some_extra( $str );

echo $str; // outputs 'This is a string, and something extra.'
echo PHP_EOL; // #next output starts on new line!

/**
 * Optional argument example!
 * 
 * This one is incorrect!
 */
/*
function makeYogurtI( $container = "bowl", $flavour ) {
    return "Making a $container of $flavour yogurt.\n";
}

echo makeYogurtI( "raspberry" );
echo PHP_EOL;
*/
/**
 * Optional argument example!
 * 
 * This one is correct!
 * Note: optional arg should be declared at last (or after the required parameters)!
 */
function makeYogurt( $flavour, $container = "bowl" ) {
    return "Making a $container of $flavour yogurt.\n";
}

echo makeYogurt( "raspberry" );
echo PHP_EOL;

/**
 * Recursive function example
 */

function fibonacci( $num ) {
    return ( $num <= 1 ) ? $num : fibonacci( $num - 1 ) + fibonacci( $num - 2 );
}

function fibonacciSeries( $start, $end ) {
    $series = [];
    $i      = 0;

    while( true ) {
        $value = fibonacci( $i );

        if ( $value > $end ) {
            break;
        }

        if( $value >= $start ) {
            $series[] = $value;
        }

        $i++;
    }

    return $series;
}

$fibonacciSeries = fibonacciSeries( 0, 10 );

echo "Fibonacci series from 0 to 10: " . implode( ', ', $fibonacciSeries );
echo PHP_EOL;

/**
 * Passing objects as arguments example.
 */
class DefaultCoffeeMaker {
    public function brew() {
        return "Making coffee.\n";
    }
}
class FancyCoffeeMaker {
    public function brew() {
        return "Crafting a beautiful coffee just for you.\n";
    }
}

function makecoffee($coffeeMaker = new DefaultCoffeeMaker) {
    return $coffeeMaker->brew();
}

echo makecoffee();
echo makecoffee(new FancyCoffeeMaker);