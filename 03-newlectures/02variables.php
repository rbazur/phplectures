<!-- Variables & Data Types -->
<!-- PHP Data Types -->

<!-- 
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource 
-->

<!-- Variable Rules -->
<!-- 
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
 -->

<?php
$name = 'Ryan'; //String
$age = 42; //Integer
$hasKids = true; //Boolean
$cashOnHand=92.3; //Float
// var_dump($cashOnHand);

/* Adding variables to strings */
// echo "$name is $age years old";

/* This is oldies but goodies */
// echo "${name} is ${age} years old";

//alternative
// echo sprintf("%s is %d years old", $name, $age);

//concatenate of strings - JS: + | PHP: .
// echo '<h3>' . $name . ' is ' . $age . ' years old</h3>';

/* Arithmetic Operator */
// echo 5 + 5;
// echo 15 - 5;
// echo 5 * 5;
// echo 5 / 5;

// echo 5 + 5 . '<br>';
// echo 15 - 5 . '<br>';
// echo 5 *  5 . '<br>';
// echo 5 / 5 . '<br>';

//Constants - cannot be changed 
// define ('HOST', 'localhost');
// define ('USER', 'root');
// define ('DB_NAME', 'cardbdemo');

// var_dump(DB_NAME);


//Code Challenge:
//Calculate the area and circumference of a circle using radius
//radius will be given by the user

//define the constant for PI
define('PI', 3.14159);

//define the radius of circle
$radius = 8;

//calculate the area and circumference
$area = PI * $radius * $radius;
$circumference = 2 * PI * $radius;

//format the result (2 decimal places)
$areaFormatted = number_format($area, 2);
$circumferenceFormatted = number_format($circumference, 2);

//display the result
//radius, area, circumference
echo 'Radius: ' . $radius . ' units<br>';
echo 'Area: ' . $areaFormatted . ' units<br>';
echo 'Circumference: ' . $circumferenceFormatted . ' units<br>';

?>