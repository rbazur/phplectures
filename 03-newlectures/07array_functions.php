<?php
echo '<h1>Array Functions</h1>';
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/
$fruits = ['apple', 'banana', 'chico'];

//Get array length
// echo count($fruits);

//Search in an array
// echo in_array('banana', $fruits);
// echo '<br>';
// var_dump(in_array('banana', $fruits))

$fruits[] = 'grapes';

// print_r($fruits);

//using push to add to an array
array_push($fruits, 'mango', 'orange', 'peras');
array_unshift($fruits,'pineapple');

//remove from an array
array_pop($fruits); //removing from the last element
array_shift($fruits); //removing the first element
// print_r($fruits);

// unset($fruits[3]);
// print_r($fruits);

//split into chunks of 2
// $chunkedArray = array_chunk($fruits,4);
// print_r($chunkedArray);

//Concatenation of Array
$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);
// print_r($arr3)

//sppread operator
$arr4 = [...$arr1, ...$arr2];
// print_r($arr4);

//combine arrays (keys & values)
$a = ['red', 'green', 'yellow'];
$b = ['apple', 'avocado', 'banana'];

$c = array_combine($a, $b);
// print_r($c);

//Array of keys
$keys = array_keys($c);
// print_r($keys);

//flip keys and values
$flipped = array_flip($c);
// print_r($flipped);

//create an array of numbers with range()
$numbers = range(1,20);

//Map through array and create a new one
$newNumbers = array_map(function ($number) {
  return "  {$number}";
}, $numbers);

print_r($newNumbers);

///display the numbers > = 10 : filter
$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
// print_r($lessThan10);


//you want to get the sum of 1 to 20:
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
print_r($sum);
?>