<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('db.php');

$name = $_POST['name1'];
$nameofper = $_POST['num'];

$query = "INSERT INTO movie_booking (`Name of movie`, `name of person`, `number of person`) VALUES (?, ?, ?)";

$stmt = mysqli_prepare($db, $query);
mysqli_stmt_bind_param($stmt, "sss", $movieName, $name, $nameofper);

$movieName = $_POST['movieName'];

mysqli_stmt_execute($stmt);

// Increment the number of audience in the movies table
$updateQuery = "UPDATE movies SET `num of audience` = `num of audience` + 1 WHERE `Name_of_movie` = 'elf'";
mysqli_query($db, $updateQuery);

if (mysqli_affected_rows($db) == -1) {
    echo "Error updating the number of audience in the movies table: " . mysqli_error($db);
}

header('location: http://localhost:3000/movies1.php?');
?>

