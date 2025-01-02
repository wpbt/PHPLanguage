<?php
function generate_numbers() {
    for ($i = 1; $i <= 3; $i++) {
        yield $i; // Pause here and return $i
    }
}

foreach (generate_numbers() as $number) {
    echo $number . "\n"; // Outputs 1, 2, 3 one at a time
}

echo "\n", "====new func start======", "\n";

function generate_fibonacci() {
    $a = 0;
    $b = 1;
    while (true) {
        yield $a;
        [$a, $b] = [$b, $a + $b];
    }
}

foreach (generate_fibonacci() as $number) {
    if ($number > 50) break; // Stop when we get past 100
    echo $number . "\n";
}

echo "\n", "====new func start======", "\n";

function generate_key_value_pairs() {
    yield "first" => "John";
    yield "second" => "Jane";
}

foreach (generate_key_value_pairs() as $key => $value) {
    echo "$key: $value\n"; // Outputs "first: John" and "second: Jane"
}

echo "\n", "====new func start======", "\n";

function interactive_generator() {
    $name = yield "What is your name?\n";
    yield "Hello, $name!\n";
}

$gen = interactive_generator();
echo $gen->current(); // Outputs "What is your name?"
echo $gen->send( "Alice" ); // Outputs "Hello, Alice!"

echo "\n", "====new func start======", "\n";

function simple_generator() {
    yield 1;
    yield 2;
    yield 3;
}

$gen = simple_generator();

echo $gen->current(); // Outputs 1
echo "\n";
$gen->next();         // Move to the next yield
echo "\n";
echo $gen->current(); // Outputs 2
echo "\n";
$gen->next();         // Move to the next yield
echo "\n";
echo $gen->current(); // Outputs 3

echo "\n", "====new func start======", "\n";

function exception_handling_generator() {
    try {
        echo "Generator started.\n";
        yield; // Execution pauses here
    } catch (Exception $e) {
        echo "Caught exception: " . $e->getMessage() . "\n";
        yield; // Allow further interaction
    }
    echo "Generator ended.\n";
}

$gen = exception_handling_generator();
$gen->next(); // Start the generator

try {
    $gen->throw(new Exception("Something went wrong!")); // Inject exception
    if ($gen->valid()) {
        $gen->next(); // Continue the generator if it's still valid
    }
} catch (Exception $e) {
    echo "Unhandled exception: " . $e->getMessage() . "\n";
}

echo "\n", "====new func start======", "\n";

