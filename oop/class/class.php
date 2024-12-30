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
echo PHP_EOL;


/**
 * Readonly class!
 */
readonly class ReadOnlyClass {
    public string $name;
    // private $id; // if no type is specified, a fetal error is thrown!
    // public static int $count; // static is not allowed!

    public function __construct( string $name ) {
        $this->name = $name;
    }
    public function get_name(): string {
        return $this->name;
    }
}
$readonly_obj = new ReadOnlyClass( 'Some Value' );
print_r( $readonly_obj );
/**
 * setting a property dynamically will result in error!
 */
// $readonly_obj->some_prop = 'Different val'; // this line will throw an error!
echo "\n";

/**
 * Extending readonly class!
 * 
 * child class should also be a 'readonly' class.
 */
readonly class SubReadOnlyClass extends ReadOnlyClass {
    public function __construct( string $name ) {
        parent::__construct( $name );
    }
}
$sub_readonly_obj = new SubReadOnlyClass( 'some val' );
print_r( $sub_readonly_obj );
echo PHP_EOL;

/**
 * Creating objects
 */

class Test {
    private int $id;

    private function __construct() {
        $this->id = 12346;
    }

    // technique 1
    public static function get_new() {
        return new static();
    }

    // technique 2
    public static function get_instance() {
        return new self();
    }

}
$obj1 = Test::get_new();
$obj2 = Test::get_instance();
print_r( $obj1 );
echo "\n";
print_r( $obj2 );
echo "\n";

/**
 * 'final' keyword can be used to prevent overriding (methods & constants).
 * In case of 'final' class, the class can't be extended.
 * you can't use 'final' in properties!
 */

final class MyStrictClass {
    // properties and methods ...
}

// extending MyStrictClass will trigger a fetal error!
// class MyNewClass extends MyStrictClass {} // this is an error!

class DemoParentClass {
    final public function say_hello() {
        return "Hello from ParentClass!";
    }
}

class DemoChildClass extends DemoParentClass {
    // Attempting to override this method will cause an error:
    /* public function say_hello() {} */
}

abstract class DemoFinalAbstractClass {
    final public function fixed_behavior() {
        return "This behavior cannot be overridden.";
    }
}

// Any subclass cannot override fixedBehavior():
class DemoConcreteClass extends DemoFinalAbstractClass {

    // inside this sub-class:
    // you can call the fixedBehavior()
    // but you can't override it!

    /* public function fixed_behavior() {} */
}


