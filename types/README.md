# Types in PHP

In programming, an expression always results in a value. This value is of specific type. PHP expressions can result in one of the following types:

- Scalar Data Types: Scalar types hold a single value.
  - `bool`
  - `string`
  - `int`
  - `float`
- Compound Data Types: Compound types can store multiple values or complex relationships.
  - `array`: Indexed, Associative, and Multidimensional (arrays within array)
  - `object`
  - `callable`
- Special Data Types
  - `null`
  - `resource` (handle to external resources: file, database connection)

## Statement Vs. Expression

- An expression evaluates to a value.
- A statement is a complete line of a code that performs an action or operation.
- So, expressions are evaluated to produce values, while statements are executed to perform actions in a program.
- An expression can be part of a statement, but a statement does not equate to an expression.

```php
// expression(s)
5 + 3
sin(3.14)

// statement(s)
$x = 5;
echo "Hello World";
# conditional statement!
if ($x > 10) {
  echo "Large number";
}
```

## Notes

- PHP is a dynamic language, which means the type of a variable is determined at runtime. However, PHP also allows you to specify the type of a variable during its declaration.
- Specifying the types in programs is good for debugging and reliability.
- PHP often converts types automatically (type juggling) but allows explicit casting.
- PHP allows declaring types for function arguments and return values.

## Type Checking Functions

- `is_int()`
- `is_float()`
- `is_string()`
- `is_bool()()`
- `is_array()`
- `is_object()`
- `is_null()`
- `gettype()`
- `instanceof`

[String](./strings/)
[Numbers](./numbers/)
[Arrays](./arrays/)
[Booleans](./booleans/)
