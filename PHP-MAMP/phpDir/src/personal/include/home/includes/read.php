<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h3><a href="../index.php">Back</a></h3>
<?php
include 'database.php';

// Retrieve the dishes from the database
$query = "SELECT * FROM items";
$result = mysqli_query($conn, $query);

// Check if any dishes were found
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Country</th><th>Dish Name</th><th>Ingredients</th><th>Steps</th><th>More</th><th>Added By</th></tr>";

    // Loop through each dish
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['country']."</td>";
        echo "<td>".$row['dishname']."</td>";
        echo "<td>".$row['ingredients']."</td>";
        echo "<td>".$row['steps']."</td>";
        echo "<td>".$row['more']."</td>";
        echo "<td>".$row['addedby']."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No dishes found in the database.";
}

// Close the database conn$conn
mysqli_close($conn);
?>
</body>
</html>

