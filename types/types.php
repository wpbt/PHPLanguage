<?php
/**
 * Introduction to PHP Types
 */

/**
 * Generates a greeting message.
 *
 * This function takes an optional string argument representing a name and returns
 * a greeting message. If no name is provided, it defaults to greeting a visitor.
 *
 * @param string $name The name of the person to greet. Default is an empty string.
 * @return string A greeting message.
 */
function greet(string $name = ''): string {
    return $name ? 'Hello, ' . $name : 'Hello Visitor';
}

// Example usage:
echo greet( 'John' ); // Outputs: Hello, Alice
echo greet();        // Outputs: Hello Visitor


/**
 * Calculates the sum of two integers.
 *
 * This function takes two integer arguments and returns their sum.
 *
 * @param int $a The first integer to be added.
 * @param int $b The second integer to be added.
 * @return int The sum of the two integers.
 */
function sumResult(int $a, int $b): int {
    return $a + $b;
}

// Example usage:
echo sumResult(3, 5); // Outputs: 8

$firstName = 'John';
$lastName = 'Doe';
$fullName = "Full name: $firstName  $lastName";
