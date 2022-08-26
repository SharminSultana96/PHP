<?php
class Fruit {
  final public function intro() {  //aekhane final public lekhar karone reride kora jabe na output asbe na, final na dele asbe, call korte parbe.

    echo "I am intro class";
    // some code
  }
}

class Strawberry extends Fruit {
  // will result in error
  public function intro() {
    // some code
    echo "I am intro from child";
  }
}

$obj = new Strawberry;
$obj->intro();
?>