<?php
abstract class Shape {
    abstract public function area();

    public function description() {
        return "This is a shape.";
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implementation of the abstract method
    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

$circle = new Circle(5);
echo $circle->area(); // Outputs: 78.539816339745
echo "\n";
echo $circle->description(); // Outputs: I am a shape.
echo "\n";

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function area() {
        return 0.5 * $this->base * $this->height;
    }
}

$rectangle = new Rectangle(4, 5);
$triangle = new Triangle(6, 3);

echo $rectangle->area(); // Outputs: 20
echo "\n";
echo $triangle->area(); // Outputs: 9
echo "\n";
