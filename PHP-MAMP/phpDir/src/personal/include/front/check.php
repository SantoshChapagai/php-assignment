<?php
include 'database.php';
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $storedPassword = $row['password'];

            // Verify the password
            if (password_verify($password, $storedPassword)) {
            header("Location: ../home/index.php");
            exit();
            } else {
                echo "Invalid email or password.";
            }
        } else {
            echo "Invalid email.";
        }
    } else {
        echo "Query execution failed.";
    }
}
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Sign in</title>
    </head>
    <body>
    <form action="check.php" method="POST">
        <label for="email">Email</label>
    <input id="email" type="email" name="email" placeholder="Email" required><br>
    <label for="password">Password</label>
    <input id="password" type="password" name="password" placeholder="Password" required><br>
    <input type="submit" name="login" value="Login">
</form>
    </body>
</html>
