# Constants in PHP

- You can use `const` or `define()` to define constants.
- You can also use `constant()` to retrieve the constant value.
- The scope of a constant is global.

Example:

```sh
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
