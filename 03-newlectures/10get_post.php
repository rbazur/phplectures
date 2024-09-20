<?php
echo '<h1>GET & POST</h1>';
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
if (isset($_POST['submit'])) {
    echo $_POST['username'] . "<br>";
    echo $_POST['age'] . "<br>";
}

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=Alden&age=10 ">Click Here</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"><br>
<div>
  <label for="name">Name:</label>
  <input type="text" name="username">  
</div>
<br>
<div>
  <label for="age">Age:</label>
  <input type="text" name="age">  
</div>
<br>

<input type="submit" value="Submit">
</form>