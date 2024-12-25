# String

You can create strings in PHP by wrapping text in either:

- Single quotes
- Or double quotes
- Or heardoc / newdoc

### PHP String features

- You can concatenate PHP strings using dot operator (.)

```sh
$firstName = 'John';
$lastName = 'Doe';
$fullName = $firstName . $lastName;
```

- You can embed variables into double quoted strings

```sh
$firstName = 'John';
$lastName = 'Doe';
$fullName = "Full name: $firstName  $lastName";

$juice = 'apple';
echo "He drank some juice made of {$juice}s.";
# you can also embed: array items (using index/key: $arr[n]) and object properties
```

- PHP provides many builtin function to work with strings
  - `strlen()`: get string length.
  - `trim()`: remove whitespaces from both sides of the string.
  - `explode()`: split a string into an array.
  - `strtolower() / strtoupper()`: convert string case.
  - `substr()`: Extract part of a string
  - `str_replace()`: Replace all occurrences of a substring
