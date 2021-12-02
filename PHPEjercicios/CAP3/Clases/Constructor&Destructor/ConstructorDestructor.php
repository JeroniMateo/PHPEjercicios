<?php
class People {
  // Properties
  public $name;
  public $lastname;

  // Methods


  //Constructor
function __construct($name,$lastname)
{
  $this->name = $name;
  $this->lastname = $lastname;
}

//Destructor
function __destruct() {
    echo "The person is {$this->name} and the lastname is {$this->lastname}.";
  }

  function get_name() {
    return $this->name;
  }

  function get_lastname() {
    return $this->lastname;
  }
}

$person = new People("Pepe","Gimenez");
echo "Name: " .  $person-> get_name();
echo "<br>";
echo "lastname: ". $person->get_lastname();
echo "<br>";
?>