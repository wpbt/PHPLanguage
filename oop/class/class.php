<?php
/**
 * PHP Class
 */

 class Example {
    public string $name;
    protected int $age;
    private array $data;
    public static float $pi = 3.14;
    public readonly int $id;

    public function __construct(string $name, int $age, array $data, int $id) {
        $this->name = $name;
        $this->age = $age;
        $this->data = $data;
        $this->id = $id; // readonly property must be initialized in the constructor
    }
}

$example = new Example( 'John Doe', 18, array( 1, 'two' ), 12 );
print_r( $example );

