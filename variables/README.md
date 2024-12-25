# Variables in PHP

`$this` is a special variable in PHP that cannot be assigned a value and is used within class methods to refer to the current instance of the class.

Variables in php are always assigned by value.

You can also use '&' to assign a variable by reference. Example:

```php
$interest_rate = 5.2;
$temp_interest_rate = &$interest_rate;

# now changing $temp_interest_rate would change the $interest_rate variable as well.
```

It's always a good practice to assign a default value to a variable.

## Variable Scope

In PHP there are two scopes:

- Local: variables defined within a function, class, namespace.
- Global: variable defined within the top level of the script.

Note: you can use `global` keyword to access the top level global scoped variables within the function. Example:

```sh
$var1 = 'xyz';
$var2 = 'abc';
function someFunction() {
    global $a, $b;
    // now you can access the top-level variable within this function.
    # You can also use $GLOBALS array to access them.
    $a = $GLOBALS['var1'];
    $b = $GLOBALS['var2'];
}
```

- You can also use `static` keyword to create a variable that won't lose it's value when program leaves it's scope. Example:

```sh
function getCount() {
    static $count = 0;
    echo $count;
    $count++;
}
```

- Just one note regarding `static` variable: you shouldn't assign a dynamic expression as it's value because the static declarations are resolved in compile time.

## Superglobals

Built-in PHP variable which can be accessed anywhere in PHP environment.

Examples:

- `$GLOBALS`
- `$_SERVER`
- `$_GET`
- `$_POST`
- `$_FILES`
- `$_COOKIE`
- `$_SESSION`
- `$_REQUEST`
- `$_ENV`

## Variable handling Functions

- boolval — Get the boolean value of a variable
- debug_zval_dump — Dumps a string representation of an internal zval structure to output
- doubleval — Alias of floatval
- empty — Determine whether a variable is empty
- floatval — Get float value of a variable
- get_debug_type — Gets the type name of a variable in a way that is suitable for debugging
- get_defined_vars — Returns an array of all defined variables
- get_resource_id — Returns an integer identifier for the given resource
- get_resource_type — Returns the resource type
- gettype — Get the type of a variable
- intval — Get the integer value of a variable
- is_array — Finds whether a variable is an array
- is_bool — Finds out whether a variable is a boolean
- is_callable — Verify that a value can be called as a function from the current scope
- is_countable — Verify that the contents of a variable is a countable value
- is_double — Alias of is_float
- is_float — Finds whether the type of a variable is float
- is_int — Find whether the type of a variable is integer
- is_integer — Alias of is_int
- is_iterable — Verify that the contents of a variable is an iterable value
- is_long — Alias of is_int
- is_null — Finds whether a variable is null
- is_numeric — Finds whether a variable is a number or a numeric string
- is_object — Finds whether a variable is an object
- is_real — Alias of is_float
- is_resource — Finds whether a variable is a resource
- is_scalar — Finds whether a variable is a scalar
- is_string — Find whether the type of a variable is string
- isset — Determine if a variable is declared and is different than null
- print_r — Prints human-readable information about a variable
- serialize — Generates a storable representation of a value
- settype — Set the type of a variable
- strval — Get string value of a variable
- unserialize — Creates a PHP value from a stored representation
- unset — Unset a given variable
- var_dump — Dumps information about a variable
- var_export — Outputs or returns a parsable string representation of a variable
