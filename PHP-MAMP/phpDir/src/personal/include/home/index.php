<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <?php
include '../header.php';
?>
<div class="holder">
  <div class="create">
  <h2>Add receipe to the database</h2>
  <?php
include 'includes/create.php';
?>
  </div>
  <div class="view">
    <h2>Find the receipe</h2>
  <h3><a href="includes/read.php">View here</a></h3>
  </div>
</div>


  <?php
include '../footer.php';
?>

  </body>
</html>