# Object Inheritance

- Object inheritance is a fundamental concept in object-oriented programming that allows a class to inherit properties and methods from another class. This promotes code reuse and helps in building a hierarchical relationship between classes.
- Inheritance allows you to create a new class based on an existing class. The new class (child or subclass) inherits the properties and methods of the existing class (parent or superclass) and can also have its own additional properties and methods.

Example:

_Let's consider a general example with a Document class as the base class and a PDFDocument class as a more specific subclass._

```php
class Document {
    public $title;
    public $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function printDocument() {
        echo "Title: " . $this->title . "\n";
        echo "Content: " . $this->content . "\n";
    }
}

class PDFDocument extends Document {
    public $pdfVersion;

    public function __construct($title, $content, $pdfVersion) {
        parent::__construct($title, $content);
        $this->pdfVersion = $pdfVersion;
    }

    public function printPDFInfo() {
        echo "PDF Version: " . $this->pdfVersion . "\n";
    }
}

// Using the classes
$pdf = new PDFDocument("My PDF Title", "This is the content of the PDF.", "1.4");
$pdf->printDocument();
$pdf->printPDFInfo();
```

## Early vs. Late Binding

- `self` works like early binding. It locks to the class where the method was originally written. It happens on compile time.
  - Using `self` in extendable code can lead to unexpected behavior if subclasses override methods.
  - Use `self` when you want strict behavior tied to the specific class where the method is written.
- `static` works like late static binding, meaning it resolves to the class that made the call, even if it’s a child class. It happens during runtime.
  - The `static` keyword allows PHP to resolve methods and properties based on the class that called the method, even if the method is defined in a parent class.
  - Late static binding is useful when you have a parent class defining some behavior, but you want child classes to customize specific parts while still using the parent logic.
  - Use `static` when you want more flexible behavior that adapts to subclasses.
- Late static binding enables polymorphic behavior where methods adapt dynamically to the specific class context, making codebases more flexible.

```php
class Factory {
    public static function create() {
        return new static(); // Late static binding
    }
}

class ProductA extends Factory {}

$object = ProductA::create();
echo get_class($object); // Outputs: ProductA
```

- Here, the `create()` method uses static to ensure that the correct class (ProductA) is instantiated at runtime. If `self` were used, it would always instantiate Factory.
