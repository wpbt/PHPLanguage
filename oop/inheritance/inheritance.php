<?php
/**
 * Inheritance in PHP
 * ==================
 * parent class: very general (lays the foundation for child classes)
 * child class: - very specific (but related to parent in some way).
 *              - child class can build further on basic functionalities by adding own features (properties and methods).
 *              - this technique is called 'incremental development'.
 */

class Animal {
    public function speak() {
        return "Some generic sound";
    }
}

class Dog extends Animal {
    // overriding the general feature to make it specific!
    public function speak() {
        // you can use parent::speak() to call parent method.
        echo "My parent makes: " . parent::speak() . "\n";
        return "Bark";
    }
}

$dog = new Dog();
echo $dog->speak(); // Outputs: Bark
echo "\n";

/**
 * Concept of late static binding in php!
 * 
 * self -> its value is determined at compile time. Meaning wherever it's called.
 * static -> its value is determined at run time.
 */

 class ParentClass {
    public static function whoami() {
        return "ParentClass";
    }

    public static function test1() {
        return self::whoami(); // self -> references 'ParentClass'
    }

    public static function test2() {
        return static::whoami(); // static -> references at run time.
    }
}

class ChildClass extends ParentClass {
    public static function whoami() {
        return "ChildClass";
    }
}

echo ChildClass::test1(); // Outputs: ParentClass
echo "\n";
echo ChildClass::test2(); // Outputs: ChildClass
echo "\n";