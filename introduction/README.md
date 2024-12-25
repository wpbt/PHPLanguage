# Introduction

PHP is a simple and dynamic language used primarily in web development.

## Dynamic vs Static languages

Dynamic languages don't require you to define the type (e.g., int, float, or string) during variable declaration.

Static languages require you to define the type (e.g., int, float, or string) during variable declaration.

**In general, programs written in statically-typed languages are more performant.**

## Features of PHP

- PHP is open source, platform independent, and easy to learn programming language.
- Full form: PHP Hypertext Preprocessor (it's a recursive acronym)
- File extension: **.php**
- Opening tag: **<?php**
- Closing tag: **?>**
- Only the code between PHP tags (opening & closing) is processed/interpreted and rest is ignored or output as it is. This makes easy for users to embed PHP and HTML in a single file.
- PHP is executed on server only.
- PHP is cost effective.
- PHP is widely used in developing dynamic websites.
- PHP can process forms & files (images/pdf/json/xml).
- PHP supports wide range of databases (MySQL, PostgreSQL, SQLite, MongoDB).
- PHP can be used to send emails.
- It's always a good practice to omit the closing tag (**?>**) at the end of the php file.
- PHP statements are terminated usig a semicolon (**;**).
- PHP ignores extra whitespace, so you can format code for readability.
- PHP automatically reports errors, but you can configure error reporting levels using the `error_reporting()` function.

## Comments in php

Single line comment:

```php
// this is a single line comment
# This is also a single line comment.
```

Multi line comment:

```php
/**
 * This is a multi line
 * comment.
 **/
```

## Basic Syntax

- PHP code is embedded within a file using the `<?php` and `?>` tags. This tells the server to process the code inside the tags as PHP.

```php
echo  "Hello Developer!";
```

- Case Sensitivity:
  - PHP keywords (e.g., if, else, while) are case-insensitive.
  - Variable names are case-sensitive.

```php
IF (true) { echo  "Works"; }
$name = "John";
echo  $Name; // Error: Undefined variable
```

- PHP can coexist with HTML. You can write PHP directly in an HTML file for dynamic content.

## Variable Declaration

- In PHP, variables start with a dollar sign **($)**.
- After **$**, you can't use number.
- You can only use : **Aa-Zz, 0-9, and \_ (underscore)** in a variable name.
- **Tip:** use meaningful names to declare variables and indent properly for readability.
- Always stick to same naming convention throughout the project.
- Some common naming conventions:
- CamelCase / camelCase
- snake_case / Snake_Case
- For classes, use _CamelCase_ technique (you can use \_ to separate words).
- For constants, use _UPPER_CASE_ convention.
- For functions, use _functionName_ convention.
