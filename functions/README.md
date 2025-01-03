# Functions in PHP

Functions are fundamental concepts in programming. They encapsulate repetitive tasks, allowing for reuse throughout the application.

**It's a great idea to keep application functions in a separate file. You can include that file where those functions are used in the application.**

Syntax:

```php
// Function definition
function functionName( string $str_arg, int $num, array $data, string $optional_arg = 'default val' ): array
{
    // code / logic here

    # return single val or multiple values using an array.
    # return value should match with the return type declaration in function definition
    return $array_data;
}
// Function call
functionName( /* Supply arguments here as defined in the function defn. */ );
```

- Functions need to be defined before they are referenced.
- You can nest functions within other functions. The caveat is that the inner function won't be available until the outer function is called.
- A function can contain any piece of logic, class, constants, variables, and even functions.
- All functions and classes in PHP have the global scope - they can be called outside a function even if they were defined inside and vice versa.
- PHP does not support function overloading, nor is it possible to undefine or redefine previously-declared functions.
- Function names are case-insensitive but this doesn't mean you should do it. Call them as they were defined.

## Function Arguments

- Function(s) work with argument(s) to generate desired output.
- The arguments are evaluated from left to right, before the function is actually called.
- PHP supports passing arguments by:
  - value (default)
  - reference
  - default argument values.
  - variable length argument list.
  - named arguments (supported)
- Any optional arguments should be specified after any required arguments, otherwise they cannot be omitted from calls.
- The default value must be a constant expression, not (for example) a variable, a class member or a function call.

## Default Arguments

- Default argument can have:
  - scalar values.
  - array values,
  - null values,
  - and objects using syntax: new ClassName() (supported as of PHP 8.1)

## Named argument

- As of PHP 8.0.0, named arguments can be used to skip over multiple optional parameters.
- Named arguments allow passing arguments to a function based on the parameter name, rather than the parameter position.
- Named arguments are passed by prefixing the value with the parameter name followed by a colon.
- Parameter name can't be set dynamically.
- You can use a reserved keyword as parameter name but you should avoid such practice.
- The order in which the named arguments are passed does not matter.

Example:

```php
function makeYogurt($container = "bowl", $flavour = "raspberry", $style = "Greek")
{
    return "Making a $container of $flavour $style yogurt.\n";
}
// named argument!
echo makeyogurt(style: "natural");
```

## Returning values

- `return` keyword is used to return value(s).
- By default, `null` is returned.
- To return a reference from a function, use the reference operator & in both the function declaration and when assigning the returned value to a variable:

```php
function &returns_reference() {
    return $someref;
}

$newref =& returns_reference();
```

## Variable Functions

- PHP supports the concept of variable functions. This means that if a variable name has parentheses appended to it, PHP will look for a function with the same name as whatever the variable evaluates to, and will attempt to execute it.
- Among other things, this can be used to implement callbacks, function tables, and so forth.

## Anonymous Functions

- Anonymous functions, also known as closures, allow the creation of functions which have no specified name. They are most useful as the value of callable parameters.
- Anonymous functions are implemented using the Closure class.

Example:

```php
$greet = function($name) {
    printf("Hello %s\r\n", $name);
};

$greet('World');
$greet('PHP');
```

## Arrow Functions

- Arrow functions were introduced in PHP 7.4
- Arrow functions are implemented using the Closure class.

## First class callable syntax

- The first class callable syntax is introduced as of PHP 8.1.0, as a way of creating anonymous functions from callable.
