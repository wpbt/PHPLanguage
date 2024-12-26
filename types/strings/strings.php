<?php
$first_name = 'John';
$last_name  = 'Doe';
$full_name  = $first_name . ' ' . $last_name; // concatenation is done using .

echo $full_name . PHP_EOL;

$string = "Hello, World!";
echo strlen( $string ) . PHP_EOL; // Output: 13

$sentence = "The quick brown fox jumps over the lazy dog.";
$position = strpos( $sentence, "fox" );
echo $position . PHP_EOL; // Output: 16 or false if not found

echo substr( $string, 0, 5 ) . PHP_EOL; // Output: "Hello"
echo substr( $string, 7 ) . PHP_EOL;    // Output: "World!"

$text       = "Hello world. Hello PHP.";
$newText    = str_replace( "Hello", "Welcome", $text );
echo $newText . PHP_EOL; // Output: "Welcome world. Welcome PHP."

$text = "Hello World";
echo strtolower( $text ) . PHP_EOL; // Output: "hello world"
echo strtoupper( $text ) . PHP_EOL; // Output: "HELLO WORLD"

echo ucfirst( $string ) . PHP_EOL; // Output: "Hello world"
echo ucwords( $string ) . PHP_EOL; // Output: "Hello World"

$text = "   Hello World   ";
echo trim( $text ) . PHP_EOL; // Output: "Hello World"
echo ltrim( $text ) . PHP_EOL; // Output: "Hello World   "
echo rtrim( $text ) . PHP_EOL; // Output: "   Hello World"

$csv    = "apple,banana,orange";
$fruits = explode( ",", $csv );
print_r( $fruits ); // Output: Array ( [0] => apple [1] => banana [2] => orange )
echo "\n";

$fruits = array( "apple", "banana", "orange" );
$csv    = implode( ",", $fruits );
echo $csv . "\n"; // Output: "apple,banana,orange"

$string = "Hello";
echo strrev( $string ) . PHP_EOL; // Output: "olleH"

$string = "Hello World";
echo substr_replace( $string, "PHP", 6 ) . PHP_EOL; // Output: "Hello PHP"

$string = "abcdef";
echo str_shuffle( $string ) . PHP_EOL; // Output: A random shuffle of "abcdef"

$input = "<script>alert('XSS')</script>";
echo htmlspecialchars( $input, ENT_QUOTES, 'UTF-8' ) . PHP_EOL; // Output: &lt;script&gt;alert(&#039;XSS&#039;)&lt;/script&gt;


