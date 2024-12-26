# String

In PHP, a string is a sequence of characters enclosed in single quotes (') or double quotes (").

## Single-Quoted Strings

- Interpreted literally — no variable interpolation or escape sequences (except \\ and \').
- Best for simple, literal strings since they are slightly faster to parse.

```php
<?php
echo 'Hello, World!'; // Output: Hello, World!
echo 'It\'s a sunny day!'; // Escape the single quote
?>
```

## Double-Quoted Strings

- Allows variable interpolation and special characters via escape sequences.
- Preferred when the string includes variables or escape sequences.
  - Escape sequences include \n (newline), \t (tab), \\ (backslash), and \" (double quote).

```php
<?php
$name = "Alice";
echo "Hello, $name!"; // Output: Hello, Alice!
echo "Line break here\nNext line starts"; // `\n` for newline
?>
```

## PHP String features

- You can concatenate PHP strings using dot operator (.)

```sh
$firstName  = 'John';
$lastName   = 'Doe';
$fullName   = $firstName . $lastName;
```

- You can embed variables into double quoted strings

```sh
$firstName  = 'John';
$lastName   = 'Doe';
$fullName   = "Full name: $firstName  $lastName";
$juice      = 'apple';
echo "He drank some juice made of {$juice}s.";
# you can also embed: array items (using index/key: $arr[n]) and object properties
```

## String Functions

- PHP provides many builtin function to work with strings
  - `strlen()`: get string length.
  - `trim()`: remove whitespaces from both sides of the string.
  - `explode()`: split a string into an array.
  - `strtolower() / strtoupper()`: convert string case.
  - `substr()`: Extract part of a string
  - `str_replace()`: Replace all occurrences of a substring
  - `strcmp()`: Compares two strings (case-sensitive).
  - `strcasecmp()`: Compares two strings (case-insensitive).
  - `strpos()`: Finds the position of the first occurrence of a substring.
  - `ucfirst()`: Capitalizes the first character.
  - `ucwords()`: Capitalizes the first character of each word.
  - `strrev()`: Reverses a string.

## Multi-Line Strings

- Heredoc Syntax: Allows multi-line strings with variable interpolation.

```php
<?php
$name = "Alice";
echo <<<TEXT
Hello, $name!
This is a multi-line string.
TEXT;
?>
```

- Nowdoc Syntax: Similar to Heredoc but does not interpolate variables.

```php
<?php
echo <<<'TEXT'
This is a Nowdoc string.
$variable will not be parsed.
TEXT;
?>
```

## Escape Sequences

- Special characters can be escaped in double-quoted strings.
  - `\n`: New line
  - `\t`: Tab
  - `\\`: Backslash
  - `\"`: Double quote

## Performance Tips for Strings

- Prefer single quotes (') for simple strings to avoid parsing overhead.
- Use strlen() to optimize loops based on string length.

## Advanced String Features

- Strings can be treated as arrays of characters.
- PHP treats strings as binary-safe, meaning you can store binary data (like images) in them.
- Use md5() or sha1() to hash strings for security purposes.
- Use functions like htmlspecialchars() or htmlentities() for safe web output.

## What Does "Binary-Safe" Mean in PHP?

- When we say PHP strings are binary-safe, it means that a PHP string can hold any kind of data—including non-printable characters, such as binary data from an image, audio file, or any raw byte stream—without altering its content. This is because PHP treats strings as sequences of bytes, not as sequences of characters.
- Binary data refers to raw, unprocessed data, typically in the form of 0s and 1s. Examples include:
  - images (.jpg, .png)
  - audio (.mp3, .wav)
  - video (.mp4, .avi)
  - compressed files (.zip, .rar)
- PHP strings are not limited to readable characters (like A, B, C), but can store any byte value, from 0x00 to 0xFF (0–255 in decimal). This makes them binary-safe, meaning PHP doesn’t make any assumptions about what the bytes in the string represent—it simply stores them as-is.
- A null byte (\0) is a special character in many programming languages that serves as a string terminator. It is often used in languages like C to mark the end of a string in memory. When the null byte is encountered, the string is considered to end, even if there are more bytes stored after it.
- Unlike languages like C, a null byte in PHP does not terminate a string—it’s treated just like any other character in the string.
- Why is This Useful?: Because PHP strings are binary-safe, they are incredibly versatile and can be used to:
  - Store binary data directly in memory.
  - Manipulate binary files (e.g., extracting metadata from images, processing audio).
  - Transfer binary data (e.g., sending files via HTTP or saving them to a database).
- Cautions with Binary Data: When working with binary data, keep these in mind
  - Encoding: If you output binary data directly to a web page, it might break the page. Use base64_encode() to safely convert binary data to text.
  - String Manipulation Functions: Be cautious using string manipulation functions like strlen(), substr(), or strpos() on binary data. While they work, they might interpret certain byte sequences in unexpected ways.
  - Storage: When storing binary data in a database, use a proper binary-safe column type like BLOB to avoid data corruption.

## Security Considerations

- SQL Injection: Always sanitize or use prepared statements when inserting strings into SQL queries.
- XSS: Be cautious when outputting strings to HTML without proper escaping.
- Concept is: never trust users. Sanitize and validate user input always!
