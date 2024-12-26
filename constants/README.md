# Constants in PHP

- Constants never change throughout the execution of the program.
- You can use `const` or `define()` to define constants.
- You can also use `constant()` to retrieve the constant value.
- The scope of a constant is global.

Example:

```php
const PI = 3.1415;
define( 'RADIUS', 2.5 );
echo PI;
echo RADIUS;
echo constant( 'RADIUS' );

const ANIMALS = array( 'dog', 'cat', 'bird');
echo ANIMALS[1]; // outputs "cat"

// Constant arrays
define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));
echo ANIMALS[1]; // outputs "cat"

```

## Characteristics of Constants

- Once defined, the value of a constant cannot be changed.
- Constants are automatically global and can be used anywhere in the script after they are defined, even inside functions without the need for the `global` keyword.
- Unlike variables, constants do not start with a `$`.

## Some functions related to constants:

- `define()`
- `defined()`
- `get_defined_constants()`

**Note: constants defined using `const` keyword are handled at compile time and those defined using `define()` are handled at run time.**

## Pre defined Constants

PHP core defines some constants (few examples):

- `PHP_EOL`
- `PHP_INT_MAX`
- `PHP_INT_MIN`
- `E_ERROR`

## Magic constants

These contants behave based on their location of use.

- `__LINE__`
- `__FILE__`
- `__DIR__`
- `__FUNCTION__`
- `__CLASS__`
- `__METHOD__`
- `__TRAIT__`
- `__NAMESPACE__`

## Best Practices

- Use Constants for Configuration: Constants are perfect for configuration values that shouldn't change during runtime, like database connection details or API keys.
- Avoid Magic Numbers: Use named constants instead of hard-coded values to improve code readability and maintainability.
- Class Constants for Enumerations: Use class constants when you need to define a set of related, unchangeable values.
- Security: Constants can be used to store sensitive information since they can't be altered once set.
