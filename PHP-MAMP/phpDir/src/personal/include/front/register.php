<?php
include 'database.php';

if (isset($_POST['signup'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // password encryption
  $hashFormat = "2y$10$";
  $salt = "Theusersignintothereceipeapp!/2023";
  $hashFormatAndSalt = $hashFormat . $salt;
  $password = crypt($password, $hashFormatAndSalt);

  if (!empty($email) && !empty($password)) {
    // Check if the email already exists in the database
    $existingQuery = "SELECT COUNT(*) FROM users WHERE email = '$email'";
    $existingResult = mysqli_query($conn, $existingQuery);
    $count = mysqli_fetch_row($existingResult)[0];

    if ($count == 0) {
      // Email does not exist, proceed with inserting the record
      $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
      $result = mysqli_query($conn, $query);

      if (!$result) {
        die('Query insertion failed');
      } else {
        echo 'Database record successfully created';
      }
    } else {
      echo 'Email already exists';
    }
  } else {
    echo 'Email and password must be filled';
  }
}
?>

<form action="" method="POST">
  <input type="email" name="email" placeholder="Email" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <input type="submit" name="signup" value="Sign up">
</form>