<?php
echo '<h1>SANITIZING INPUTS</h1>';
// <script>alert(1)</script>
/* --- Sanitizing Inputs -- */
/*  
    Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/
if (isset($_POST['submit'])){
  
  //Without Protection
  echo $_POST['username'] . "<br>";
  echo $_POST['age'] . "<br>";

 
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<br>
<div>
  <label>Name: </label>
  <input type="text" name="username">    
</div>
<br>
<div>
  <label>Age:</label>
  <input type="text" name="age">
</div>

<br>
<input type="submit" name="submit" value="Submit">
</form>
