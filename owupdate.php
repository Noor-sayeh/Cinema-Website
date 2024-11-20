<?php
include('db.php');

if (empty($_POST["Name_of_movie"])) {
    die("Name is required");
}

$name = $_POST['Name_of_movie'];
$newDate = $_POST['newDate'];

// Check if a record with the given movie name exists
$query = "SELECT * FROM movies WHERE `Name_of_movie` = '$name'";
$result = mysqli_query($db, $query);

if (mysqli_num_rows($result) == 0) {
    die("No matching records found to update.");
}

// Perform the update query
$updateQuery = "UPDATE movies SET `Time&Date` = '$newDate' WHERE `Name_of_movie` = '$name'";
mysqli_query($db, $updateQuery);

header('location: ownerpage.php');
?>
