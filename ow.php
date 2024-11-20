    <?php

include('db.php');



$name = $_POST['Name_of_movie'];
$dt = $_POST['dt'];
$img = $_POST['img'];
$com = $_POST['com'];
$des = $_POST['des'];


// Check if a record with the same 'Time&Date' already exists
$query = "SELECT * FROM movies WHERE `Time&Date` = '$dt'";
$result = mysqli_query($db, $query);

if (mysqli_num_rows($result) > 0) {
  die("A movie with the same Time&Date already exists.");
}

$query = "INSERT INTO movies (`Name_of_movie`, `Time&Date`, `num of audience`,`image`,`comercial`,`Description`) VALUES ('$name', '$dt', 0,'$img','$com','$des')";
mysqli_query($db, $query);
header('location: ownerpage.php');

    ?>
