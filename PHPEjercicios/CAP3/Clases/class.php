<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods

function set_name($name){
    $this->name = $name;
}

  function get_name() {
    return $this->name;
  }


function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$fruit = new Fruit();
$fruit->set_name('Apple');
$fruit->set_color('red');

echo "Fruit: " .  $fruit-> get_name();
echo "<br>";
echo "Color: ". $fruit->get_color();
?>