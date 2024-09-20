<?php
/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }

  - Functions have their own local scope as opposed to global scope
*/

function registerUser($username)
{
  echo "User {$username} has been registered!";
}

//Running a function
// registerUser('Ryan');

// function add ($num1, $num2)
// {
//   return $num1 + $num2;
// }

// echo add(5,5);
// $sum = add(5,7);
// echo $sum;

//default values
// function subtract($num1=10, $num2 = 5)
// {
//   return $num1 - $num2;
// }

// echo subtract();
// echo subtract(15);

//Assigning anonymous function to variables
// $add = function ($num1, $num2) {
//   return $num1 + $num2;
// };

// echo $add(11,13);

//Arrow function
$multiply = fn($num1, $num2) => $num1 * $num2;
echo $multiply(97,97);
?>