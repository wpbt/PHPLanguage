<?php
/**
 * PHP Functions
 */


/* passing argument by reference example.
 * Notice the '&' before the parameter in function definition.
 */
function add_some_extra(&$string) {
    $string .= 'and something extra.';
}

$str = 'This is a string, ';
add_some_extra( $str );

echo $str; // outputs 'This is a string, and something extra.'


/**
 * Optional argument example!
 * 
 * This one is incorrect!
 */
function makeYogurtI( $container = "bowl", $flavour ) {
    return "Making a $container of $flavour yogurt.\n";
}

echo makeYogurtI( "raspberry" );

/**
 * Optional argument example!
 * 
 * This one is correct!
 * Note: optional arg should be declared at last!
 */
function makeYogurt( $flavour, $container = "bowl" ) {
    return "Making a $container of $flavour yogurt.\n";
}

echo makeYogurt( "raspberry" );