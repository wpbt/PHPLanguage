# Class in PHP

- Class may contains:
  - Constants
  - Properties
  - Methods

Syntax:

```php
# A simple class in PHP
class  ClassName {
    // properties and methods go here!
}
```

## `$this` Variable

- It always refers to the current object.
- Used to refer to object's properties and methods.
- Available only inside the class.
- It can not be re-assigned to a variable.

```php
class  MainClass {
    $prop = 'a default value';
    // method declaration
    public  function  getProp() {
        // accessing the property.
        // you can also use it to access the methods like: $this->methodName();
        echo  $this->prop;
    }
}
```

## Creating objects

- use `new` keyword to create objects of a class.
- if the class's constructor doesn't accept any arguments, you can omit the parentheses.

```php
// class definition similar to above snippets!
$obj = new  ClassName(); // or new ClassName;
```

## Class Properties

- **Visibility Modifiers:** Class properties can be declared with visibility modifiers (`public`, `protected`, or `private`) to control access levels.
- **Static and Readonly:** Properties can be marked as `static` (shared across all instances of the class) or `readonly` (available from PHP 8.1, can only be initialized once).
- **Typed Properties:** You can declare the type of a property (`string`, `int`, `array`, etc.) starting from PHP 7.4.
- **Initialization Requirement:** Typed properties must be initialized before accessing them; otherwise, a fatal error will be thrown.
- **Avoid Function Calls:** When initializing properties, avoid using function calls to ensure predictable behavior.
-

```php
class Example {
    public string $name;
    protected int $age;
    private array $data;
    public static float $pi = 3.14;
    public readonly int $id;

    public function __construct(string $name, int $age, array $data, int $id) {
        $this->name = $name;
        $this->age = $age;
        $this->data = $data;
        $this->id = $id; // readonly property must be initialized in the constructor
    }
}
```

## Dynamic Properties

- **Creating/Accessing Non-existent Properties:** In PHP, you can dynamically create or access properties that are not explicitly declared within the class. This is known as dynamic properties.
- **Controlling Dynamic Properties:** To manage dynamic properties and control their behavior, you can implement the following magic methods:
  - `__set($name, $value)`: Called when writing data to inaccessible (non-existent or protected/private) properties.
  - `__get($name)`: Called when reading data from inaccessible (non-existent or protected/private) properties.
  - `__isset($name)`: Called when checking if an inaccessible property is set.
  - `__unset($name)`: Called when unset() is used on an inaccessible property.

```php
class Example {
    private $properties = [];

    // Called when writing data to inaccessible properties
    public function __set($name, $value) {
        $this->properties[$name] = $value;
    }

    // Called when reading data from inaccessible properties
    public function __get($name) {
        return $this->properties[$name] ?? null;
    }

    // Called when checking if an inaccessible property is set
    public function __isset($name) {
        return isset($this->properties[$name]);
    }

    // Called when unset() is used on an inaccessible property
    public function __unset($name) {
        unset($this->properties[$name]);
    }
}

$example = new Example;
$example->dynamicProperty = "I was added dynamically"; // Using __set()
echo $example->dynamicProperty; // Using __get(), Outputs: I was added dynamically
var_dump(isset($example->dynamicProperty)); // Using __isset(), Outputs: bool(true)
unset($example->dynamicProperty); // Using __unset()
var_dump(isset($example->dynamicProperty)); // Using __isset(), Outputs: bool(false)

```

## Class Constants

- Class constants can be redefined by a child class.
- If you use `final` keyword on a constant, it can not be reset / overridden in child class.
- Class constants are created on class basis not per object basis.
- You can also apply visibility modifiers on constants (public/protected/private).

```php
class Example {
    public const PUBLIC_CONSTANT = 'public value';
    protected const PROTECTED_CONSTANT = 'protected value';
    private const PRIVATE_CONSTANT = 'private value';
    final public const FINAL_CONSTANT = 'cannot be overridden';

    public static function showConstants() {
        echo self::PUBLIC_CONSTANT . "\n";
        echo self::PROTECTED_CONSTANT . "\n";
        echo self::PRIVATE_CONSTANT . "\n";
        echo self::FINAL_CONSTANT . "\n";
    }
}

class ChildExample extends Example {
    // Redefining public constant
    public const PUBLIC_CONSTANT = 'new public value';

    // Attempt to override final constant will cause an error
    // final public const FINAL_CONSTANT = 'new value';
}

Example::showConstants(); // Accessing constants from the Example class
echo ChildExample::PUBLIC_CONSTANT; // Outputs: new public value
```

## Class Methods

- They add functionality to the class and work on properties.
- Can be set as: `public`, `protected`, `private`, `static`
- Static methods belong to class itself.
- Abstract (`abstract`) methods doesn't have the implementation detail. They are implemented in extending classes.
- Methods with `final` keyword can not be overridden in sub-class.
- PHP also has a concept of magic methods.
