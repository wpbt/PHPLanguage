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
