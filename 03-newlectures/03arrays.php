<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

//Simple array of numbers
$numbers = [1,2,3,4,5];

//Simple array of strings
$colors = ['red', 'green', 'blue'];

// print_r($colors);
// echo $colors[1];
// echo $numbers[1] + $numbers[3];

//Associative Arrays - allows us to use named keys to identify values.

$colors = [
  1 => 'red',
  2 => 'green',
  3 => 'blue',
];

// echo $colors[1]

//Strings as keys
$hex = [
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => '#00f',
];
// echo $hex['red'];

//Single person
$person = [
  'first_name' => 'Ryan',
  'last_name' => 'Azur',
  'email' => 'razur@gmail.com',
];

// echo $person['first_name'];

/* Multimensional array */

/* Multi-dimensional arrays are often used to store data in a table format */

$teamazur = [
  [
    'first_name' => 'Ryan',
    'last_name' => 'Azur',
    'email' => 'razur@gmail.com',
  ],
  [
    'first_name' => 'Pauline',
    'last_name' => 'Azur',
    'email' => 'pazur@gmail.com',
  ],
  [
    'first_name' => 'Alden',
    'last_name' => 'Azur',
    'email' => 'aazur@gmail.com',
  ],
  [
    'first_name' => 'Catrice',
    'last_name' => 'Azur',
    'email' => 'cazur@gmail.com',
  ],
];

// var_dump($teamazur);
// print_r($teamazur);
// echo $teamazur[0]['first_name'];


//Encode to JSON
// var_dump(json_encode($teamazur));

//Decode to JSON
$jsonobj = '{"first_name":"Ryan", "last_name":"Azur", "email":"razur@gmail.com"}';

var_dump(json_decode($jsonobj));
?>