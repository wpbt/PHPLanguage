# NULL

- Null in PHP represents a variable with no value, or an uninitialized variable.
- NULL is case-insensitive.
- You can explicitly set a variable to null.
- When you unset a variable, it becomes null in the context where it was used.

```php
$var = "value";
unset($var);
var_dump($var); // null
```

- `is_null()`

## Object Type in PHP

- In PHP, the object type is one of the most powerful and flexible data types. Objects represent instances of classes and allow you to encapsulate both data (properties) and behavior (methods) within a single structure.
- An object in PHP is an instance of a class. A class serves as a blueprint, and an object is a specific realization of that blueprint.
- To create an object, you first need to define a class and then instantiate it using the new keyword.

```php
class Car {
    public $color; // Property
    public function drive() { // Method
        echo "The car is driving.";
    }
}

$myCar = new Car(); // Create an object
$myCar->color = "red"; // Set a property
$myCar->drive(); // Call a method
```

## Callbacks / Callables

- Callbacks or callables in PHP refer to any construct that can be invoked like a function. This includes:
  - Anonymous Functions (Closures): Functions without a named identifier that can be defined inline where they are used.
  - Named Functions: Functions that have been named and can be called by their name.
  - Static Methods: Methods of a class that can be called without an instance of the class.
  - Object Methods: Methods of a class instance.
  - Class Names: When used with :: to call static methods.
  - Array Callables: An array specifying an object and method to call.
  - Strings: A string specifying the function name for non-object static calls.

```php
$callback = function( $item ) {
    return $item * 2;
};
$numbers = [1, 2, 3];
$doubled = array_map( $callback, $numbers );

function double($item) {
    return $item * 2;
}

$numbers = [1, 2, 3];
$doubled = array_map('double', $numbers);
```

## Resources

- A resource is a special variable, holding a reference to an external resource.
- As resource variables hold special handles to opened files, database connections, image canvas areas and the like, converting to a resource makes no sense.
- A resource with no more references to it is detected automatically, and it is freed by the garbage collector. For this reason, it is rarely necessary to free the memory manually.
