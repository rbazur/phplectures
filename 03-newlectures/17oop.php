<?php 
echo '<h1>OOP</h1>';
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
  //Properties are attributes that belong to a class

  //Access modifiers: public, private, protected
  //public - can be access from anywhere
  //private - can only be accessed from inside the class
  //protected - can only be access from inside the class and by inheriting classes

  public $name;
  public $email;
  public $password;
  public $title;

  //Constructor is called whenever an object is created from the class
  //We pass in properties to the constructor from the outside
  // We assign the properties passed in from the outside to the properties we created inside the class

  public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  //Methods are functions that belong to a class
  function setName($name) {
    $this -> name = $name;
  }

  public function getName() {
    return $this->name;
  }

}

//Instantiate a user
$user1 = new User('Ryan', 'ryan@gmail.com', 'qwerty123');
$user2 = new User('Alden', 'alden@gmail.com', 'P@55w0rd!');

echo $user1->email . "<br>";
echo $user2->name . "<br>";


// $user1 = new User();
// $user2 = new User();

// $user1 -> setName('Ryan');
// $user2 -> setName('Alden');

// echo $user1 -> getName() . "<br>";
// echo $user2 -> getName() . "<br>";

// var_dump($user1);
// echo "<br>";
// var_dump($user2);

//Inheritance
class Employee extends User {
  public function __construct($name, $email, $password, $title) {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function getTitle() {
    return $this->title;
  }
}

$employee1 = new Employee('Catrice', 'catrice@gmail.com', '123456', 'Manager');
echo $employee1->getTitle();
?>