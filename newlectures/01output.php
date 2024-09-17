<?php 
    // This is a single line comment
  //shortcut key - ctr; + /
  
  /*
  This is
  for multiple 
  line comments
  shortcut key - chift + alt + a
  */
  

  /*  Outputting Content */
  
  //echo - Output strings, numbers, html, etc....
// echo 'Hello World';
// echo 123;
// echo 123, 'Hello', 92.3;
// echo '<h1>Hello</h1>';
// echo 'Magulong <br/>';
// echo 'World <br/>';
// echo 123, ' ', 'Hello', ' ', 92.3;

// print - similar to echo, a little bit slower and can only take one argument
// print 'Hello from print';

// print_r - gives a little bit more info. Can be used to print arrays

// print_r([1,2,3]);
// print_r('Hello');

// var_dump - more info like data type and length
// var_dump('Hello');
// var_dump(true);
var_dump([1,2,3]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Hello <?php echo 'Ryan'; ?></h1>
  <h1>Hello <?= 'Musikahan'; ?></h1>
  
</body>
</html>
