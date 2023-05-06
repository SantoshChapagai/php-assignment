<?php 
    if (isset($_POST['logOut'])){
      header("Location: ../../index.php");
    }
    ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Receipe</title>
  </head>
  <body>
    <div>
      <form method="post">
      <button type="submit" name="logOut">Log out</button>
      </form>
    </div>
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