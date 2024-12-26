# PHP Arrays

- An array in PHP is a versatile and powerful data structure that allows you to store multiple values in a single variable.
- Arrays in PHP can be used to create lists, associative mappings, or even multi-dimensional data structures.
- An array can be created using: `array()` (or short: `[]`) construct.
- Each value in an array is stored as an element and can be accessed using a key (or index).

## Types:

- Indexed: An indexed array uses numeric keys, which are automatically assigned starting from 0.

```php
<?php
$fruits = ["Apple", "Banana", "Cherry"]; // Auto-indexed
$numbers = array(10, 20, 30);           // Alternative syntax

echo $fruits[0]; // Output: Apple
echo $numbers[2]; // Output: 30
?>
```

- Associative: An associative array uses string keys instead of numeric indices. It’s like a dictionary or key-value mapping.

```php
// Create an array
$items = array(
    'key1' => 'value 1',
    'key2' = 123,
    'key3' = array(),
);
// Access an item using syntax: $items['key']
$items['key1']; // value 1

// adding new element
$items['key4'] = 'some value';

// modifying a value
$items['key1'] = 'different value';

// removing an element
unset( $items['key2'] );
```

- Multidimensional: A multidimensional array contains other arrays as its elements, creating a matrix-like structure.

```php
<?php
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo $matrix[1][2]; // Output: 6 (row 2, column 3)
?>
```

## Looping through array:

```php
foreach( $arr as $value) {}
// or
foreach( $arr as $key => $val) {}
```

## Array features

- As of PHP 7.1.0, you can destructure arrays. You can also use `list()` to do that.

```php
[$a, $b] = [1, 2];
echo $a;
echo $b;
```

- As of PHP 7.4, you can use spread operator (...) to extract array elements.

```php
$arr1 = [1, 2];
$arr2 = [3, ...$arr1]; // [3, 1, 2]
```

## Some array functions

- `count() / sizeof()`: Get the number of elements
- `array_push()`: Add one or more elements to the end
- `array_pop()`: Remove the last element
- `array_shift()`: Remove the first element
- `array_unshift()`: Add to the beginning
- `array_merge()`: Merge two or more arrays
- `array_slice()`: Extract a portion of the array
- `array_splice()`: Remove a portion and replace it
- `in_array()`: Check if a value exists in an array
- `array_key_exists()`: Check if a key exists
- `array_search()`: Search for a value and return its key
- `sort()`: Sort indexed arrays
- `rsort()`: Sort indexed arrays in reverse
- `asort()`: Sort associative arrays by value
- `ksort()`: Sort associative arrays by key
- `usort()`: Sort using a user-defined comparison function
- `array_map()`: Apply a callback to elements
- `array_filter()`: Filter elements using a callback
- `array_reduce()`: Reduce array to a single value
- `isset($user["age"])`: Checks if a key exists.
- `in_array( $item, $array )`
- `array_values()`: Returns all the values of an array.
- `array_keys()`
- [PHP Array Functions](https://www.php.net/manual/en/ref.array.php)

## Array Performance Tips

- Use foreach instead of for for better readability and performance.
- Preallocate array size if possible to avoid resizing overhead.
- Prefer array functions over manual loops for operations.
