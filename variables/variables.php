<?php
/**
 * Variables in PHP
 */

function get_count() {
    static $count = 0; // Initialize $count to 0 only once
    echo $count;
    $count++;
}

get_count(); // Outputs: 0
echo PHP_EOL;
get_count(); // Outputs: 1
echo PHP_EOL;
get_count(); // Outputs: 2
echo PHP_EOL;

class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name; // Sets the 'name' property of the current object instance
    }

    public function get_name() {
        return $this->name; // Accesses the 'name' property of the current object instance
    }
}

$obj = new Person("John");
echo $obj->get_name(); // Outputs: John
echo PHP_EOL;


$box    = "gift";
$$box   = "flowers";

echo $gift; // Outputs: flowers
echo PHP_EOL;


$global_var = "I am global!";

function test_global() {
    global $global_var; // Import the global variable
    // best practice is to 'do not modify global variables in function scope. it might have unexpected side effects'.
    // if you need to process the global data, copy the global variable into local scope and work with that locally scoped information.
    $local_var = $global_var;

    $updated_info = "I updated: $local_var";
    echo $updated_info;
}
test_global(); // Outputs: I am global!
echo PHP_EOL;
// the global data is 'in-tact'.
echo $global_var;
echo PHP_EOL;

$interest_rate = 5.2;
$temp_interest_rate = &$interest_rate;
$temp_interest_rate = 8.95;
echo $interest_rate;
echo PHP_EOL;