<?php
namespace MyLib\SpaceOne;

const CONSTANT_SO = 1212;

function fxn_name() {
    echo "Hello from: ". __NAMESPACE__ . " (namespace) and ". __FUNCTION__ ." (function) (ONE)\n";
}

class MyClass {
    function greet() {
        echo "Hello from: ". __NAMESPACE__ . " (namespace) and ". __CLASS__ ." (class) (ONE)\n";
    }
}
