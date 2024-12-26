<?php
/**
 * Constants in PHP
 */

define( "API_VERSION", "V2" );
echo API_VERSION . "\n";


define('ROLES', array( 'admin', 'editor', 'subscriber' ));
echo ROLES[1] . "\n";
# you can't alter ROLES constant array!

class My_Configs {
    const API_KEY = 'secret key';
}
echo My_Configs::API_KEY . "\n"; // Static access
$obj = new My_Configs;
echo $obj::API_KEY . "\n"; // Object access

// Avoid magic numbers!
$temperature = 40;
// Note: Here, 32 is a magic number because its significance isn't immediately clear to someone reading the code
if ( $temperature > 32 ) {
    echo "It's above freezing! \n";
}

/**
 * Fix: Define the named constant
 * Benefits:
 *  - Clarity: FREEZING_POINT_WATER clearly communicates its purpose.
 *  - Consistency: If the freezing point of water needs to change (for instance, if you're dealing with Fahrenheit vs. Celsius), you only change it in one place.
 *  - Documentation: Constants serve as a form of documentation within your code, explaining what the number represents.
 */
$temperature = 31;
const FREEZING_POINT_WATER = 32;
if ( $temperature > FREEZING_POINT_WATER ) {
    echo "It's above freezing! \n";
}