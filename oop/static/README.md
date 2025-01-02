# Static keyword in PHP

- Static properties and methods belong to the class itself instead of its objects.
- To access static properties and methods, you don't need to instantiate the class.
- Static methods can't use `$this` because there is no instance context.
- Static methods are used for utility classes (Math functions, string manipulation functions, ...).

```php
class Counter {
    public static $count = 0; // Static property

    public static function increment() {
        self::$count++; // Access static property with "self::"
    }
}

Counter::$count; // Access directly using class name
Counter::increment(); // Call static method
echo Counter::$count; // Outputs: 1
```

## Scope Resolution Operator `::`

- The scope resolution operator (::) is like a pointer that lets you access:
  - static methods
  - static properties
  - class constants
  - parent methods / constructor from a child class `parent::__construct()`, `parent::method_name()`.

```php
class Math {
    public const PI = 3.141579;
    public static $pi = 3.14;

    public static function area_of_circle($radius) {
        return self::$pi * $radius * $radius;
    }
}

echo Math::PI; // Access constant
echo Math::$pi; // Access static property
echo Math::area_of_circle(10); // Call static method
```

## Differences Between self, parent, and static

- `self`: Refers to the class where the method is defined (resolved at compile time).
- `parent`: Refers to the parent class of the current class.
- `static`: Refers to the class in the current context (resolved at runtime).
