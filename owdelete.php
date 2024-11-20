<?php

include('db.php');
var_dump($_POST);


if ($_SERVER["REQUEST_METHOD"] !== "POST" || !isset($_POST["Name_of_movie"])) {
    die("Invalid request or name is required");
}

$name = $_POST['Name_of_movie'];

// Delete the movie from the movies table
$deleteQuery = "DELETE FROM movies WHERE `Name_of_movie` = ?";
$stmt = mysqli_prepare($db, $deleteQuery);
mysqli_stmt_bind_param($stmt, "s", $name);
mysqli_stmt_execute($stmt);

if (mysqli_affected_rows($db) > 0) {
    echo "The movie has been deleted successfully.";
} else {
    echo "No matching records found to delete.";
}
header('location: ownerpage.php');
?>
