# Abstract Classes in PHP

- PHP has abstract classes, methods, and properties.
- An abstract class in PHP is a blueprint for other classes.
- Classes defined as abstract cannot be instantiated, and any class that contains at least one abstract method or property must also be abstract.
- Methods defined as abstract simply declare the method's signature and whether it is public or protected; they cannot define the implementation.
- Abstract classes are designed to be extended by other classes.
- Abstract classes are used when you want to define common behavior (methods) and properties for related classes, but the exact implementation of some methods should be left to the child (extending) classes.

```php
abstract class Shape {
    // Abstract method: No implementation here
    abstract public function area();

    // Concrete method: Fully implemented
    public function description() {
        return "I am a shape.";
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implementation of the abstract method
    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

$circle = new Circle(5);
echo $circle->area(); // Outputs: 78.539816339744
echo "\n";
echo $circle->description(); // Outputs: I am a shape.
echo "\n";
```

## Why Use Abstract Classes?

- Enforce a Common Interface: Abstract classes ensure that all subclasses implement certain methods. This is particularly useful in large applications to maintain consistency.
- Reuse Code: Common functionality can be implemented in the abstract class, avoiding code duplication in subclasses.
- Provide a Template: They act as a template for designing classes with a similar structure.

## Abstract Classes vs Interfaces

- Abstract classes:
  - can contain concrete methods.
  - can contain properties
  - can't have multiple inheritance.
- Interfaces:
  - A class can implement multiple interfaces.
  - Interfaces can't define concrete methods. They just declare a method.

## Rules and Restrictions

- Abstract classes are not required to have abstract methods, but having at least one abstract method is often why the class is abstract.
- All abstract methods in an abstract class must be implemented in any concrete subclass.
- Visibility (public, protected, or private) of an abstract method must match the method in the child class.
