# Variables in PHP

`$this` is a special variable in PHP that cannot be assigned a value and is used within class methods to refer to the current instance of the class.

Variables in php are always assigned by value.

You can also use '&' to assign a variable by reference. Example:

```sh
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
