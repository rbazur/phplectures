<?php
echo '<h1>Exceptions</h1>';
/* ----------- Exceptions ----------- */

/*
  PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.
*/

function inverse($x) {
  if (!$x) {
    throw new Exception('Division by zero!');
  }

  return 1 / $x;
}

// echo inverse(0) . '<br>';

//Handle Exception
try {
  echo inverse(10) . '<br>';
  echo inverse(50) . '<br>';
  echo inverse(3) . '<br>';
  echo inverse(0) . '<br>';
  echo inverse(8) . '<br>';
} catch (Exception $e) {
  echo 'Caught exception:', $e->getMessage(), '<br>';
} finally {
  echo 'Tapusin mo na sir, tomguts na! <br>';
}

echo 'Hello World!';
?>