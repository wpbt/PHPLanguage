# Namespace in PHP

- PHP Namespace serve as container for holding your library or application code. Think of namespace as a directory.
- Namespaces solve two problems:
  - Name collision with other libraries: imagine your application uses multiple libraries. And let's say your custom code has some exact names similar to the third party library. Namespace fixes this problem.
  - Shorter names for long library names for code readability.
- Namespace groups: Classes, Interfaces, Functions, and Constants under a logical name.
- Namespace names are case-insensitive.
- The Namespace name 'PHP', and compound names starting with this name (like; PHP\Classes) are reserved for internal language use and should not be used in the userspace code.

## Declaring a Namespace

- To create a namespace, you use the `namespace` keyword at the top of your PHP file. Nothing can precede it except `declare`.
- You can't use a forwardslash `\` in the namespace declaration. eg: `\Library\Science` (this is invalid namespace name).

```php
namespace Library\Science;

const CONST_ONE = 'Some Scientific Val';

function calculations() {
    echo "Doing research.... \n";
}

class Book {
    public function get_title() {
        return "A Brief History of Time";
    }
}
```

- Here: `Library\Science` is the namespace and `CONST_ONE, calculations, Book` are const, function, and class respectively within that namespace.

## Using a namespace

- Fully Qualified names:
  - starting with `\`. example: `\MyLib\SubName`.
- Importing using `use` keyword.
  - `use MyLib\SubName`
- Note: you will need to include the namespaced files into your application file to call the namespaced constants, functions, classes, interfaces.
- PHP can alias(/import) constants, functions, classes, interfaces, traits, enums and namespaces.
- Importing is performed at compile-time, and so does not affect dynamic class, function or constant names.

```php
# importing a function
use function MyLib\SubName\function_name;
# importing a constant
use const MyLib\SubName\CONST_NAME;
# importing a class
use MyLib\SubName\ClassName;

function_name();
echo CONST_NAME;
$obj = new ClassName();
```

- We can place multiple use statements on the same line

```php
use My\Full\Classname as Another, My\Full\NSname;

//...
```

## Scoping rules for importing

- The use keyword must be declared in the outermost scope of a file (the global scope) or inside namespace declarations. This is because the importing is done at compile time and not runtime, so it cannot be block scoped.

```php
namespace Languages;

function to_greenlandic() {
    # this is incorrect importing!
    use Languages\Danish;
    // ...
}
```

## Group use declarations

- Classes, functions and constants being imported from the same namespace can be grouped together in a single use statement.

```php
use some\namespace\ClassA;
use some\namespace\ClassB;
use some\namespace\ClassC as C;

use function some\namespace\fn_a;
use function some\namespace\fn_b;
use function some\namespace\fn_c;

use const some\namespace\ConstA;
use const some\namespace\ConstB;
use const some\namespace\ConstC;

// is equivalent to the following groupped use declaration
use some\namespace\{ClassA, ClassB, ClassC as C};
use function some\namespace\{fn_a, fn_b, fn_c};
use const some\namespace\{ConstA, ConstB, ConstC};
```

## Global space

- Prefixing a name with `\` will specify that the name is required from the global space even in the context of the namespace.

```php
namespace A\B\C;

/* This function is A\B\C\fopen */
function fopen() {
     /* ... */
     $f = \fopen(...); // call global fopen
     return $f;
}
```

## Declaring sub-namespaces

```php
namespace MyProject\Sub\Level;

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }
```

## Defining multiple namespaces in the same file

- Multiple namespaces may also be declared in the same file. There are two allowed syntaxes.

```php
# technique 1:
namespace MyProject;

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }

namespace AnotherProject;

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }

# using braces:
namespace MyProject {

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }
}

namespace AnotherProject {

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }
}
```

**Best practice is to use single file for a namespace**
