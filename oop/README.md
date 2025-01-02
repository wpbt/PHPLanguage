# Concept of OOP

- Object-Oriented Programming (OOP) is a programming paradigm centered around the concept of objects.
- Objects are instances of classes.
- Objects contain
  - data in the form of fields (aka properties/variables)
  - code in the form of procedures (aka methods/functions).
- Think of objects as real world entities which have specific properties and behavior. Those objects will interact in the application in some way.

## Classes

- A blueprint for creating objects.
- It bundles related data and functions.

## Objects

- An instance of a class.
- An object is unique.

```php
class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function drive() {
        return "Driving a $this->color $this->model.";
    }
}

$my_car = new Car("red", "Toyota");
echo $my_car->drive();
```

## Benefits of OOP

- Code Organization: OOP promotes better code organization by bundling related data and functions together into classes and objects.
- Encapsulation: Restricts direct access to object components, preventing accidental modification of data and ensuring that only authorized methods can modify an object's state.
- Inheritance: Allows code reusability by enabling new classes to inherit properties and methods from existing classes, reducing redundancy and improving maintainability.
- Abstraction: Simplifies complex functionality by introducing simple interfaces to carry out tasks, making it easier to work with and understand the underlying system.
- Polymorphism: Allows you to call different methods or functions using the same interface, enabling a single function to operate on different data types or classes. This makes the code more flexible and scalable.

## Oerview of Object Oriented in PHP

- Defining a class
- Creating objects
- Setting visibility on property, methods, and constants inside class.
- Class constants
- Accessing property and methods
- Scope resolution operator (::)
- Magic methods in class (`__construct, __destruct, ...`)
- Inheritance using `extends`
- Static classes and methods
- Abstract classes
- Interface & Traits
- Concept of late static binding
- Preventing overriding (and extending) using `final` keyword.

## Further Topics

[Class](./class/) | [Inheritance](./inheritance/) | [Abstract Class](./abstract/) | [Interfaces](./interfaces/) | [Traits](./traits/)
