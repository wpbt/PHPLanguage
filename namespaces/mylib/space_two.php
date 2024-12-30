<?php
namespace MyLib\SpaceTwo;

const CONSTANT_SO = 2121;

function fxn_name() {
    echo "Hello from: ". __NAMESPACE__ . " (namespace) and ". __FUNCTION__ ." (function) (TWO)\n";
}

class MyClass {
    function greet() {
        echo "Hello from: ". __NAMESPACE__ . " (namespace) and ". __CLASS__ ." (class) (TWO)\n";
    }
}
