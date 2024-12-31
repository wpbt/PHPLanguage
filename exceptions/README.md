# Errors & Exceptions in PHP

- Errors that occur in your application should be handled properly.
- Errors and exceptions in PHP are mechanisms for identifying and handling runtime issues that occur during script execution. These mechanisms ensure robust and maintainable applications by providing structured ways to address problems.
- Errors are issues arising from incorrect code or environmental conditions (e.g., missing files, invalid syntax).
- Exceptions are part of a structured error-handling system that allows developers to anticipate and manage specific problems programmatically.

## How PHP Handles Errors

- By default, PHP reports errors based on the server's configuration (php.ini).
- Errors can either:
  - Be displayed on the screen (display_errors).
  - Be logged to a file (log_errors).
  - `error_log()` can be used to log errors to a file in your application.

## Configuring Error Behavior in PHP

- The `error_reporting()` function specifies which error levels to report.

```php
# in php.ini file
error_reporting = E_ALL

# in your script file (e.g., app.php)
error_reporting( E_ALL ); // Report all errors

// Turn off all error reporting
error_reporting(0);
```

## Displaying Errors

- Errors can be displayed to the user during development but should be hidden in production.

```php
# Configuration in php.ini
display_errors = On   // Enable for development
display_errors = Off  // Disable for production

# Runtime Configuration: (in your app file: app.php)
ini_set('display_errors', '1'); // Enable
ini_set('display_errors', '0'); // Disable
```

## Logging Errors

- Logging errors is crucial in production environments to troubleshoot without exposing sensitive information.

```php
# Configuration in php.ini
log_errors = On
error_log = /path/to/error.log

# Runtime Configuration:
ini_set('log_errors', '1');
ini_set('error_log', '/path/to/error.log');
```

## Error Precedence

- Runtime settings (ini_set) override php.ini values for the duration of the script.

## Custom Error Handling

- PHP allows developers to define how errors are handled programmatically using `set_error_handler`.

## Error Types

- Parse Errors (E_PARSE): Errors detected during the compilation phase of the script, typically caused by syntax mistakes.
- Fatal Errors (E_ERROR): Critical errors that prevent script execution. Common causes include undefined functions or classes.
- Warning Errors (E_WARNING): Non-fatal runtime issues that do not halt script execution.
- Notice Errors (E_NOTICE): Minor issues like accessing undefined variables.

## PHP Exceptions

- PHP exceptions provide a structured mechanism to handle anticipated errors or special conditions that arise during execution.
- Key constructs:
  - `try` block: Code that might throw an exception is placed here.
  - `catch` Block: Handles the exception and contains logic for recovery or logging.
  - `finally` Block: always executes, regardless of whether an exception was thrown or caught. This block is optional.

```php
try {
    // code that can throw an exception is placed here.
}
catch (Exception $e) {
    // you can resolve the issue here.
    // Resolve: log or display a message for user & devs.
}
finally {
    // This block executes at last!
}
```

## Throwing an Exception

```php
# based on a condition, you can throw an exception like:

throw new Exception( 'error message...' );
```

## Exception Hierarchy in PHP

- PHP has a predefined exception hierarchy:
  - Base class: Exception
  - Subclasses: ErrorException, RuntimeException,...
  - See full list [here](https://www.php.net/manual/en/spl.exceptions.php).
