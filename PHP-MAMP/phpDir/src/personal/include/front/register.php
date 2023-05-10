<?php
include 'database.php';

if (isset($_POST['signup'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
   
  $uppercase = preg_match('@[A-Z]@', $password);
 $specialChars = preg_match('@[^\w]@', $password);
 if (strlen($password) < 8 || !$uppercase || !$specialChars) {
   echo 'Password must contain 8 characters, at least one uppercase and special character';
 }else{
  // password hassing
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT );

  if (!empty($email) && !empty($password)) {
    // Check if the email already exists in the database
    $existingQuery = "SELECT COUNT(*) FROM users WHERE email = '$email'";
    $existingResult = mysqli_query($conn, $existingQuery);
    $count = mysqli_fetch_row($existingResult)[0];

    if ($count == 0) {
      // Email does not exist, proceed with inserting the record
      $query = "INSERT INTO users (email, password) VALUES ('$email', '$hashedPassword')";
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
}

?>

<form action="" method="POST">
  <input type="email" name="email" placeholder="Email" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <input type="submit" name="signup" value="Sign up">
</form>

<?php 
 
?>