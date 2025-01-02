# Interfaces in PHP

- Interfaces are like blueprints for designing software.
- They define a contract that other parts of your code must follow.
- In PHP, an interface:
  - defines what methods a class must have
  - doesn't define how those methods work.
- All methods declared in an interface must be public; this is the nature of an interface.
- Interfaces may define magic methods to require implementing classes to implement those methods.
- It's possible for interfaces to have constants.
- As of PHP 8.4.0, interfaces may also declare properties.
- A class can implement multiple interfaces.
- An interface can extend other (multiple) interface using `extend`.

## Why Use Interfaces?

- Consistency Across Implementations: Every class that implements an interface has the same structure.
- Flexibility with Freedom: While enforcing structure, interfaces let each class customize its implementation.
- Polymorphism: Interfaces allow you to treat different objects the same way. If two classes implement the same interface, you can call their methods without caring about their internal workings.

## Syntax

```php
# Step 1: Define the Interface
interface Animal {
    public function makeSound(); // Every Animal must have this method
    public function move();      // Every Animal must have this method
}

# Step 2: Implement the Interface in a Class
class Dog implements Animal {
    public function makeSound() {
        return "Woof!";
    }

    public function move() {
        return "The dog runs.";
    }
}

# Step 3: Use the Interface
function interactWithAnimal(Animal $animal) {
    echo $animal->makeSound();
    echo $animal->move();
}

$dog = new Dog();

interactWithAnimal( $dog );  // Output: Woof! The dog runs.
```

## Interfaces vs Abstract Classes

- Interface have method declarations only. Abstract class can have both method declaration and definition.
- A class can implement multiple interfaces. A class can extend only one abstract class.
- Interface is used: when you need a contract for multiple, unrelated classes. While abstract class is used: when you need a base class with shared functionality.

## Best Practices

- If different classes share the same behavior but implement it differently, use interfaces.
- Focus on a single responsibility. Don’t cram too many unrelated methods into one interface.
- Pass interfaces as dependencies instead of specific classes. This makes your code more flexible and testable.
