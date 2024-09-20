<?php
echo '<h1>Sessions</h1>';
/* ------------ Sessions ------------ */
/*  
    Sessions are a way to store information (in variables) to be used across multiple pages.  
    Unlike cookies, sessions are stored on the server.
*/ 

session_start(); //Must be called before accessing any session data

if (isset($_POST['submit'])){ 
   $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   
   $password = $_POST['password'];

   if ($username == 'ryan' && $password == 'qwerty') {
    //Set session variable
    $_SESSION['username'] = $username;
    //redirect to another page
    header('Location: /phplectures/extras/dashboard.php');
   } else {
    echo 'Incorrect username or password';
   }


}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<br>
<div>
  <label for="username">Username: </label>
  <input type="text" name="username">    
</div>
<br>
<div>
  <label for="password">Password:</label>
  <input type="password" name="password">
</div>

<br>
<input type="submit" name="submit" value="Submit">
</form>
