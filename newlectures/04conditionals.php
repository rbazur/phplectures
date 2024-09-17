<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

// $age = 18;

// if ($age >= 18) {
//   echo 'You are old enough to vote!';  
// } else {
//   echo 'Sorry, you are too young to vote';
// }


//Dates
// $t = date('H');

// $t = 18;
// if ($t <12) {
//   echo 'Have a great morning';
// } elseif ($t < 17) {
//   echo 'Good afternoon';
// } else {
//   echo 'Good evening';
// }

$posts = [];

// if (!empty($posts)) {
//   echo $posts[0];
// } else {
//   echo 'No Posts';
// }

//ternary operator
/* 
The ternary operator is a shorthand if statement
Ternary Syntax:
  condition ? true : false;
 */

//  echo !empty($posts[0]) ? $posts[0] : 'There are no posts';
//  echo !empty($posts[0]) ? $posts[0] ; //this will give you an error
//  echo !empty($posts[0]) ? $posts[0] : null ; 

// $firstPost = !empty($posts[0]) ? $posts[0] : null;

// echo $firstPost;

//Null Coalescing operator was introduced in PHP 7.4
//Will return null if $posts is empty
//Always returns first parameter, unless first parameter happens to be null

$firstPost = $posts[0] ?? null;
echo $firstPost;
/* 
Switch Statements

 */
$favcolor = 'orange';

switch ($favcolor) {
  case 'red':
    echo 'Your favorite color is red!';
    break;
  case 'green':
    echo 'Your favorite color is green!';
    break;
  case 'blue':
    echo 'Your favorite color is blue!';
    break;
  
  case 'yellow':
    echo 'Your favorite color is yellow!';
    break;
  
  case 'pink':
    echo 'Your favorite color is pink!';
    break;
  
  default:
    echo 'Your favorite color is not present in bioman <br>';
    echo 'It is ' . $favcolor;
    break;
}

?>