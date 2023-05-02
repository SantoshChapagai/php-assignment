<html>
  <head>

  </head>
  <body>
    <form method="POST">
     <label for="country">Country</label>
     <input type="text" id="country" name="country" required>
     <label for="dishname">Dish name</label>
     <input type="text" id="dishname" name="dishname" required>
     <label for="ingredients">Ingredients</label>
      <textarea id="ingredients" name="ingredients" required></textarea>
      <label for="steps">Cooking steps</label>
      <textarea id="steps" name="steps" required></textarea>
      <label for="more">Additional information</label>
      <textarea id="more" name="more"></textarea>
      <label for="aadedby">Added by</label>
      <input type="text" id="addedby" name="addedby" placeholder="your name" required>
      <input type="submit" name="submit" value="Add">
    </form>

    <?php
if (isset($_POST['submit'])) {
    // Retrieve the form data
    $country = $_POST['country'];
    $dishname = $_POST['dishname'];
    $ingredients = $_POST['ingredients'];
    $steps = $_POST['steps'];
    $more = $_POST['more'];
    $addedby = $_POST['addedby'];

    include 'database.php';
    
    // Insert the data into the database
    $query = "INSERT INTO items (country, dishname, ingredients, steps, more, addedby) 
              VALUES ('$country', '$dishname', '$ingredients', '$steps', '$more', '$addedby')";
    
    if (mysqli_query($conn, $query)) {
        echo "Data submitted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>
  </body>
</html>
