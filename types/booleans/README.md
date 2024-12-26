# Bools in PHP

- A Boolean in PHP is the simplest data type, representing only two possible values:

  - true
  - false

- Booleans are foundational in programming, as they are used in conditional logic, comparisons, and control structures.

- Booleans can be explicitly assigned using the keywords `true` or `false` (case-insensitive).

```php
<?php
$isTrue = true;   // Boolean true
$isFalse = false; // Boolean false
?>
```

## Truthiness and Falsiness in PHP

- In PHP, many values are automatically converted to true or false when evaluated in a Boolean context (e.g., in an if statement). These are referred to as truthy and falsy values.
- Falsy Values:
  - false
  - 0 (zero)
  - '', "" (empty string)
  - []
  - null
  - "0" (string with the character zero)

## Boolean Functions

- PHP provides functions for working with Boolean values or converting other types to Booleans.
  - `boolval()`: convert to bool explicitly.
  - `is_bool()`
  - `(bool) $var`: explicitly cast any variable to boolean
  - `(boolean) $var`: explicitly cast any variable to boolean
