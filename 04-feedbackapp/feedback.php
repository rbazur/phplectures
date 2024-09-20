<?php include 'inc/header.php';

$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<h2>Past Feedback</h2>

<?php if (empty($feedback)): ?>
  <p class="lead mt-3">There is no feedback</p>
<?php endif; ?>

<?php foreach ($feedback as $item): ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?php echo $item['body']; ?>
      <div class="text-secondary mt-2"></div>
      <?php echo $item['name']; ?>
      on <?php echo date_format(date_create($item['date']), 'g:ia \o\n l jS F Y'); ?>
    </div>
  </div>
<?php endforeach; ?>

</div>
</main>

<?php include 'inc/footer.php' ?>