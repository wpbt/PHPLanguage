<?php
echo rand( 1, 10 ) . "\n";  // Random number between 1 and 10
echo mt_rand( 1, 100 ) . "\n"; // Better performance

echo pow( 2, 3 ) . "\n";    // Output: 8
echo sqrt( 16 ) . "\n";     // Output: 4
echo sin( deg2rad( 30 ) ) . "\n"; // Output: 0.5

echo 10 % 3 . "\n"; // Output: 1

echo 2 ** 3 . "\n"; // Output: 8

echo round( 3.4 ) . "\n"; // Output: 3
echo round( 3.6 ) . "\n"; // Output: 4

echo ceil( 4.2 ) . "\n"; // Output: 5

echo floor( 4.8 ) . "\n"; // Output: 4

echo number_format( 1234.56, 2, '.', ',' ) . "\n"; // Output: 1,234.56

echo log( M_E ) . "\n"; // Output: 1

echo exp( 1 ) . "\n"; // Output: 2.718281828459 (approximately e)

echo sin( M_PI_2 ) . "\n"; // Output: 1 (sin of π/2)


