<?php include 'inc/header.php' ?>

<?php
//Set vars to empty values
$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';

//Form submit
if (isset($_POST['submit'])) {
  //Validate name
  if (empty($_POST['name'])) {
    $nameErr = 'Name is required';
  } else {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  //validate email
  if (empty($_POST['email'])) {
    $emailErr = 'Email is required';
  } else {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  }

  //Validate body
  if (empty($_POST['body'])) {
    $bodyErr = 'Feedback is required';
  } else {
    $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }


  if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {

    //Set timezone to Asia/Manila
    date_default_timezone_set('Asia/Manila');

    //Add to database
    $currentDate = date('Y-m-d H:i:s'); //current timestamp
    $sql = "INSERT INTO feedback (name, email, body, date) VALUES ('$name', '$email', '$body', '$currentDate')";
    if (mysqli_query($conn, $sql)) {
      //success
      header('Location: feedback.php');
    } else {
      //Error
      echo 'Error: ' . mysqli_error($conn);
    }
  }
}
?>

<img src="./img/logo.png" width="200" class="mb-3" alt="" />
<h2>Feedback</h2>
<p class="lead text-center">
  Leave feedback for Kodego Bootcamp Tropang Potchi
</p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input
      type="text"
      class="form-control"
      id="name"
      name="name"
      placeholder="Enter your name" value="<?php echo htmlspecialchars($name); ?>" />

    <?php if (!empty($nameErr)) { ?> <span class="text-danger"> <?php echo $nameErr; ?></span> <?php } ?>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input
      type="email"
      class="form-control"
      id="email"
      name="email"
      placeholder="Enter your email" value="<?php echo htmlspecialchars($email); ?>" />

    <?php if (!empty($emailErr)) { ?> <span class="text-danger"> <?php echo $emailErr; ?></span> <?php } ?>


  </div>
  <div class="mb-3">
    <label for="body" class="form-label">Feedback</label>
    <textarea
      class="form-control"
      id="body"
      name="body"
      placeholder="Enter your feedback">
      <?php echo htmlspecialchars($body); ?>
    </textarea>

    <?php if (!empty($bodyErr)) { ?> <span class="text-danger"> <?php echo $bodyErr; ?></span> <?php } ?>
  </div>
  <div class="mb-3">
    <input
      type="submit"
      name="submit"
      value="Send"
      class="btn btn-dark w-100" />
  </div>
</form>
</div>
</main>

<?php include 'inc/footer.php' ?>