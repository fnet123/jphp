--TEST--
Aliasing leading to conflict should result in error message
--FILE--
<?php
error_reporting(E_ALL);

trait Hello {
   public function hello() {
     echo 'Hello';
   }
}

trait World {
   public function world() {
     echo ' World!';
   }
}


class MyClass {
   use Hello, World { world as hello; }
}

$o = new MyClass();
$o->hello();
$o->world();

?>
--EXPECTF--

Fatal error: Trait method 'world' has not been applied, because there are collision in 'World' and 'Hello' traits on MyClass in %s on line %d, position %d