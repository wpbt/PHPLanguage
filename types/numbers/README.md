# Numbers in PHP

In PHP, numbers are one of the primary data types, used to represent numeric values such as integers, floats, and numbers in scientific notation. PHP provides robust functionality to handle, manipulate, and perform operations on numbers.

## Types:

- Integers
- Floats

### Integers

- An integer is a whole number (positive, negative, or zero) without any decimal places.
- Can be decimal (base 10), octal (base 8), hexadecimal (base 16), or binary (base 2).
- The range of integers depends on the platform (32-bit or 64-bit).
- Get platform int size: **PHP_INT_SIZE**, **PHP_INT_MAX**, **PHP_INT_MIN**.

```php
<?php
$decimal    = 42; // Decimal integer
$negative   = -42; // Negative integer
$octal      = 0755; // Octal (starts with 0)
$hex        = 0x2A; // Hexadecimal (starts with 0x)
$binary     = 0b101010; // Binary (starts with 0b)

echo $decimal; // Output: 42
?>
```

### Floats

- A float (or double) is a number with a decimal point or in exponential (scientific) notation.
- Floats can represent fractional numbers like 3.14 or very large/small numbers using scientific notation like 1.2e3 (1.2 × 10³).

```php
<?php
$float1 = 3.14;       // Simple float
$float2 = -3.14;      // Negative float
$scientific = 1.2e3;  // Scientific notation (1200)
$smallNumber = 4.5e-3; // Scientific notation (0.0045)

echo $scientific; // Output: 1200
?>
```

## Checking Numeric Types

- PHP provides functions to check if a value is a number, integer, or float.
  - `is_numeric()`
  - `is_int()`
  - `is_float()`

## Number Functions

- PHP provides several built-in functions for working with numbers:
  - `abs()`: abs(-10); // Output: 10
  - `round()`: round(4.6) → 5
  - `ceil()`: ceil(4.2) → 5
  - `floor()`: floor(4.8) → 4
  - `rand() / mt_rand()`: Generate random numbers
  - `pow($base, $exp)`: Raises a number to a power.
  - `sqrt($num)`: Computes the square root.
  - `sin(), cos(), tan()`: Trigonometric functions.
  - `exp($num)`: Exponential function.
  - `intdiv()`: Returns the integer quotient of the division

## Type Casting

- You can explicitly cast variables to different number types:

```php
<?php
$intValue = (int) "123.5"; // Casts to integer, results in 123
$floatValue = (float) "123"; // Casts to float, results in 123.0
?>
```

## The Problem with Floats

- Floats are approximate representations of real numbers in PHP (and most other programming languages). They are stored as binary fractions in memory, which can cause precision errors because not all decimal numbers can be represented exactly in binary.
- A computer represents numbers in binary (base 2). Some decimal fractions cannot be exactly represented in binary, leading to tiny rounding errors.
- The decimal number 0.1 in binary is 0.000110011001100... (repeating forever).
- Since memory is finite, the representation is truncated, leading to approximation.
- Even simple arithmetic operations with floats can result in unexpected results:
  - echo 0.1 + 0.2; // Output: 0.30000000000000004
- Use bc (Binary Calculator) Functions or round() as a workaround of the precision issue.
  - `bcadd()`: Addition
  - `bcsub()`: Subtraction
  - `bcmul()`: Multiplication
  - `bcdiv()`: Division
