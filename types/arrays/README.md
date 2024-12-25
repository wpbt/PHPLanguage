# PHP Arrays

An array can be created using: `array()` (or short: `[]`) construct.

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

Looping through array:

```php
foreach( $arr as $value) {}
// or
foreach( $arr as $key => $val) {}
```

## Array features

- As of PHP 7.1.0, you can destructure arrays.

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
