<?php
namespace NS; // this namespace can be your own namespace (in your app!).
// you will need to include the files before using a namespace!
// an autoloader can also be used instead of manually importing!
require_once __DIR__ . '/mylib/space_one.php';
require_once __DIR__ . '/mylib/space_two.php';

/**
 * Importing namespaces (these can be third-party library namespaces)!
 * 
 * creating an alias using 'as'.
 * importing an individual element. 
 */
use MyLib\SpaceOne as S1;
use MyLib\SpaceTwo as S2;
use const MyLib\SpaceOne\CONSTANT_SO;
use function MyLib\SpaceOne\fxn_name;
use MyLib\SpaceOne\MyClass as MyClassSO;
use MyLib\SpaceTwo\MyClass as MyClassST;

/**
 * Calling namespaced constant, function, and classe using fully qualified name!
 */
echo "\n======Fully-Qualified Names=========\n";
echo \MyLib\SpaceOne\CONSTANT_SO;
echo "\n\n";

echo \MyLib\SpaceOne\fxn_name();
echo "\n\n";

$obj1 = new \MyLib\SpaceOne\MyClass();
print_r( $obj1->greet() );
echo "\n";

echo \MyLib\SpaceTwo\CONSTANT_SO;
echo "\n\n";

echo \MyLib\SpaceTwo\fxn_name();
echo "\n\n";

$obj2 = new \MyLib\SpaceTwo\MyClass();
print_r( $obj2->greet() );
echo "\n";
echo "\n======Fully-Qualified Names End=========\n";

/**
 * using import!
 */
echo "\n======By 'use' satement=========\n";
S1\fxn_name();
echo "\n";

S2\fxn_name();
echo "\n";

echo S1\CONSTANT_SO;
echo "\n\n";

echo CONSTANT_SO;
echo "\n\n";

fxn_name();
echo "\n\n";

echo S2\CONSTANT_SO;
echo "\n\n";

$s1_obj = new S1\MyClass();
$s1_obj->greet();

echo "\n";

$s2_obj = new S2\MyClass();
$s2_obj->greet();

echo "\n";
$obj_s1 = new MyClassSO();
$obj_s1->greet();

echo "\n";
$obj_s2 = new MyClassST();
$obj_s2->greet();

echo "\n======By 'use' satement end=========\n";