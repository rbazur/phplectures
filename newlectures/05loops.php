<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

//Output the numbers 1 to 5
// for($x = 1; $x <=5; $x++) {
//   echo "Number (For): $x <br>";
// }


/* ------------ While Loop ------------ */
/*
** While Loop Syntax
  initialization
  while (condition) {
  // code to be executed
   increment
  }
*/

// $x = 1;

// while ($x <= 5) {
//     echo "Number (While): $x <br>";
//     $x++;
// }

/* ------------ Do While Loop ------------ */
/*
** Do While Loop Syntax
  
  initialization
  do {
  // code to be executed
   increment
  } while (condition)

  do while loop will always execute the block of code once, even if the condition is false
// */

// $x = 6;
// do {
//       echo "Number (Do while): $x <br>";
//       $x++;
// } while ($x <= 5);


/* ------------ Foreach Loop ------------ */
/*
** Foreach Loop Syntax
  foreach ($array as $value) {
    //code to be executed
  }  

*/

//Loop through an array
// $numbers = [1,2,3,4,5,6,7,8,9,10];

// foreach ($numbers as $x) {
//         echo "Number (Foreach): $x <br>";
// }

//use the indexes within the loop

// $posts = ['Post One', 'Post Two', 'Post Three'];

// foreach ($posts as $index => $post) {
//   echo "${index} - ${post} <br>";
// }

//Use the keys within the loop for an associative array

$person = [
  'first_name' => 'Ryan',
  'last_name' => 'Azur',
  'email' => 'razur@gmail.com',
];

//Get keys
foreach ($person as $key => $val) {
  echo "${key} - ${val} <br>";
}


?>